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

$colname_noid = "-1";
if (isset($_POST['noid'])) {
  $colname_noid = $_POST['noid'];
}
$colname2_noid = "0";
if (isset($_POST['formtype'])) {
  $colname2_noid = $_POST['formtype'];
}
mysql_select_db($database_dbconnect, $dbconnect);
$query_noid = sprintf("SELECT * FROM noid WHERE NoidNo LIKE %s and formtype = %s", GetSQLValueString("%" . $colname_noid . "%", "text"),GetSQLValueString($colname2_noid, "text"));
$noid = mysql_query($query_noid, $dbconnect) or die(mysql_error());
$row_noid = mysql_fetch_assoc($noid);
$totalRows_noid = mysql_num_rows($noid);

mysql_select_db($database_dbconnect, $dbconnect);
$query_form = "SELECT * FROM typeform";
$form = mysql_query($query_form, $dbconnect) or die(mysql_error());
$row_form = mysql_fetch_assoc($form);
$totalRows_form = mysql_num_rows($form);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SEARCH</title>
<style type="text/css">
body,td,th {
	font-family: "Comic Sans MS", cursive;
}
body {
	background-color: #f4c7bd;
	background-image: url(img/bg3.jpg);
	background-attachment: fixed;
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
<style> 
select {
    
    padding: 7px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid #d35256;
    border-radius: 4px;
}
</style>
<style>
       .pageheader
       {
          width:100%;
          height:150px;
          background-image: url(img/bg3.jpg);
          position:fixed;
          top:0;
          z-index:99;
       }
      .pagefooter
      {
          width:100%;
          height:50px;
          background-image: url(img/bg3.jpg);
          position:fixed;
          bottom:0;
       } 
    body {
	background-color: #f4c7bd;
}
</style>
</head>

<body>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<div align="center">
  <form id="form2" name="form2" method="post" action="" class="pageheader">
    <h2>ค้นหาแบบสอบถาม</h2>
    <p>ประเภทแบบสอบถาม
      <select name="formtype" id="formtype">

        <option value="แบบสอบถามราคาต้นทุน" <?php if($_POST['formtype'] == 'แบบสอบถามราคาต้นทุน') {echo "selected=selected"; } ?>>แบบสอบถามราคาต้นทุน</option>
		<option value="แบบสอบถามการผลิต" <?php if($_POST['formtype'] == 'แบบสอบถามการผลิต') {echo "selected=selected"; } ?>>แบบสอบถามการผลิต</option>
      </select>
    เลขที่
<input type="text" name="noid" id="noid" value='<?=$_POST['noid'];?>'/>
    <input name="submit2" type="submit" class="button button5" id="submit2" value="ค้นหา" />
    </p>
  </form>
  <p>&nbsp;</p>
  <table border="1">
    <tr>
      <td width="148"><div align="center">
        <h4>เลขที่</h4>
      </div></td>
      <td width="147"><div align="center">
        <h4>แก้ไขครั้งที่</h4>
      </div></td>
      <td width="178"><div align="center">
        <h4>STATUS</h4>
      </div></td>
      <td width="116"><div align="center">
        <h4>VIEW</h4>
      </div></td>
    </tr>
    <?php do { ?>
      <tr>
        <td><div align="center" id="NoidNo"><?php echo $row_noid['NoidNo']; ?></div></td>
        <td><div align="center"><?php echo $row_noid['editNo']; ?></div></td>
        <td><div align="center"><?php echo $row_noid['formtype']; ?></div></td>
        <td><div align="center"><a href="report.php?formtype=<?php echo $row_noid['formtype']; ?>&amp;noid=<?php echo $row_noid['NoidNo']; ?>" target="_blank">VIEW</a></div></td>
      </tr>
      <?php } while ($row_noid = mysql_fetch_assoc($noid)); ?>
  </table>
</div>
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
mysql_free_result($noid);

mysql_free_result($form);
?>
