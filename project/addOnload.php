<?php require_once('Connections/dbconnect.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO onload (onloadname) VALUES (%s)",
                       GetSQLValueString($_POST['onloadname'], "text"));

  mysql_select_db($database_dbconnect, $dbconnect);
  $Result1 = mysql_query($insertSQL, $dbconnect) or die(mysql_error());
}

mysql_select_db($database_dbconnect, $dbconnect);
$query_Recordset1 = "SELECT * FROM onload";
$Recordset1 = mysql_query($query_Recordset1, $dbconnect) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADD ONLOAD</title>
<style type="text/css">
body {
	background-color: #f4c7bd;
	background-image: url(img/bg3.jpg);
	background-attachment: fixed;
}
body,td,th {
	font-family: "Comic Sans MS", cursive;
}
</style>
<style>
a:link, a:visited {
    background-color: #d35256;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	border-radius: 20px;
}


a:hover, a:active {
    background-color: Tomato;
	border-radius: 50%;
}
</style>
<style>
.button {
    background-color: #d35256;
    border: none;
    color: white;
    padding: 7px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	font-family: "Comic Sans MS", cursive;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
    cursor: pointer;
}
.button5 {
    background-color: white;
    color: black;
    border: 2px solid #d35256;
	border-radius: 20px;
}
.button5:hover {
    background-color: #d35256;
    color: white;
}
</style>
<style> 
input[type=text] {
    
    padding: 7px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid #d35256;
    border-radius: 4px;
}
</style>
</head>

<body>
<script language="javascript">
function fncSubmit()
{
	if(document.form1.onloadname.value == "")
	{
		alert('กรุณากรอกข้อมูลที่ต้องการเพิ่ม');
		document.form1.onloadname.focus();		
		return false;
	}
}
</script>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1" onsubmit="Javascript:return fncSubmit();">
  <h2 align="center">เพิ่มข้อมูล ONLOAD</h2>
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">ONLOAD : </td>
      <td><input type="text" name="onloadname" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right"><div align="center"></div></td>
      <td><div align="center">
        <input type="submit" class="button button5" value="ADD" />
      </div></td>
    </tr>
  </table>
  <p>
    <input type="hidden" name="MM_insert" value="form1" />
  </p>
  <p>&nbsp;</p>
  <div align="center">
    <table width="300" border="1">
      <tr>
        <td><div align="center">
          <h4>ONLOAD</h4>
        </div></td>
        <td><div align="center">
          <h4>DELETE</h4>
        </div></td>
      </tr>
      <?php do { ?>
        <tr>
          <td><div align="center" id="onloadname"><?php echo $row_Recordset1['onloadname']; ?></div></td>
          <td><div align="center"><a href="delete.php?onloadname=<?php echo $row_Recordset1['onloadname']; ?>" onClick="return chkdel();">DELETE</a></div></td>
        </tr>
        <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
    </table>
  </div>
</form>
<p>&nbsp;</p>
</body>
<script language="JavaScript">
function chkdel(){if(confirm('  You want to delete this file ??? ')){
	return true;
}else{
	return false;
}
}
</script>
</html>
<?php
mysql_free_result($Recordset1);
?>
