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

$colname_Recordset2 = "-1";
if (isset($_POST['noid'])) {
  $colname_Recordset2 = $_POST['noid'];
}
mysql_select_db($database_dbconnect, $dbconnect);
$query_Recordset2 = sprintf("SELECT * FROM noid INNER JOIN seller ON noid.NoidNo = seller.NoidNo INNER JOIN  technical_data ON noid.NoidNo = technical_data.NoidNo INNER JOIN  guaranteed ON noid.NoidNo = guaranteed.NoidNo INNER JOIN accessories ON noid.NoidNo = accessories.NoidNo WHERE noid.NoidNo LIKE %s", GetSQLValueString("%" . $colname_Recordset2 . "%", "text"));
$Recordset2 = mysql_query($query_Recordset2, $dbconnect) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>คู่มือต้นทุน</title>
<style>
       .pageheader
       {
          width:100%;
          height:75px;
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
<style type="text/css">
@import url("webfonts/cordia_0/stylesheet.css");
@import url("webfonts/angsa/stylesheet.css");

body,td,th {
	font-family: angsa;
	font-size: 18px;
}
body {
	background-color: #f4c7bd;
	background-image: url(img/bg3.jpg);
	background-attachment: fixed;
}
</style>
<style>
.button {
    background-color: #d35256;
    border: none;
    color: white;
    padding: 7px 10px;
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
	border-radius: 10px;
}
.button5:hover {
    background-color: #d35256;
    color: white;
	
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
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #fcc29c}

th {
    background-color: #ffa366;
    color: black;
}
</style>
</head>
<body>
<form class="pageheader" id="form1" name="form1" method="post" action="">
  <p>
    <select name="noid" id="noid" style="width: 100px">
      <option value="C1" <?php if($_POST['noid'] == 'C1') {echo "selected=selected"; } ?>>C1</option>
      <option value="C2" <?php if($_POST['noid'] == 'C2') {echo "selected=selected"; } ?>>C2</option>
      <option value="C4" <?php if($_POST['noid'] == 'C4') {echo "selected=selected"; } ?>>C4</option>
      <option value="CA" <?php if($_POST['noid'] == 'CA') {echo "selected=selected"; } ?>>CA</option>
      <option value="CB" <?php if($_POST['noid'] == 'CB') {echo "selected=selected"; } ?>>CB</option>
      <option value="CC" <?php if($_POST['noid'] == 'CC') {echo "selected=selected"; } ?>>CC</option>
      <option value="CD" <?php if($_POST['noid'] == 'CD') {echo "selected=selected"; } ?>>CD</option>
      <option value="CE" <?php if($_POST['noid'] == 'CE') {echo "selected=selected"; } ?>>CE</option>
      <option value="CF" <?php if($_POST['noid'] == 'CF') {echo "selected=selected"; } ?>>CF</option>
      <option value="CG" <?php if($_POST['noid'] == 'CG') {echo "selected=selected"; } ?>>CG</option>
      <option value="CH" <?php if($_POST['noid'] == 'CH') {echo "selected=selected"; } ?>>CH</option>
      <option value="CI" <?php if($_POST['noid'] == 'CI') {echo "selected=selected"; } ?>>CI</option>
</select>
    <input name="go" type="submit" class="button5 button" id="go" value="GO!!!" />
  </p>
</form>
<br />
<br />
<br />
<br />
<table width="3500"  border="1">
  <tr>
    <th rowspan="2"><div align="center"><strong>No.</strong></div></th>
    <th width="131" rowspan="2"><div align="center"><strong>R.</strong></div></th>
    <th width="111"rowspan="2"><div align="center"><strong>Sale.</strong></div></th>
    <th rowspan="2"><div align="center"><strong>Customer.</strong></div></th>
    <th colspan="3"><div align="center"><strong>Date.</strong></div></th>
    <th width="111" rowspan="2"><div align="center"><strong>KVA.</strong></div></th>
    <th width="133" rowspan="2"><div align="center"><strong>TAP.</strong></div></th>
    <th width="167" rowspan="2"><div align="center"><strong>PRI.</strong></div></th>
    <th width="186" rowspan="2"><div align="center"><strong>SEC.</strong></div></th>
    <th width="214" rowspan="2"><div align="center"><strong>TYPE.</strong></div></th>
    <th width="162" rowspan="2"><div align="center"><strong>VEC.</strong></div></th>
    <th colspan="5"><div align="center"><strong>Guaranteed Loss.</strong></div></th>
    <th colspan="2"><div align="center"><strong>Temp Rise.</strong></div></th>
    <th colspan="9"><div align="center"><strong>Accessories.</strong></div></th>
  </tr>
  <tr>
    <th width="50"><div align="center"><strong>Recive.</strong></div></th>
    <th width="50"><div align="center"><strong>Due.</strong></div></th>
    <th width="52"><div align="center"><strong>Comple.</strong></div></th>
    <th width="41"><div align="center"><strong>NL</strong></div></th>
    <th width="36"><div align="center"><strong>LL</strong></div></th>
    <th width="152"><div align="center"><strong>Tolerance.</strong></div></th>
    <th width="52"><div align="center"><strong>IMP.</strong></div></th>
    <th width="152"><div align="center"><strong>Tolerance.</strong></div></th>
    <th width="127"><div align="center"><strong>Oil.</strong></div></th>
    <th width="130"><div align="center"><strong>Winding.</strong></div></th>
    <th width="60"><div align="center"><strong>Thermo.</strong></div></th>
    <th width="60"><div align="center"><strong>Press.Relif.</strong></div></th>
    <th width="60"><div align="center"><strong>Buchho.</strong></div></th>
    <th width="60"><div align="center"><strong>Oil.LV.</strong></div></th>
    <th width="60"><div align="center"><strong>Winding.</strong></div></th>
    <th width="60"><div align="center"><strong>Press.Gauge.</strong></div></th>
    <th width="60"><div align="center"><strong>Box.</strong></div></th>
    <th width="60"><div align="center"><strong>OLT.</strong></div></th>
    <th width="60"><div align="center"><strong>ETC.</strong></div></th>
  </tr>
    <?php do { 
	?>
      <tr>
        <td width="140"><div align="center"><?php echo $row_Recordset2['NoidNo']; ?></div></td>
        <td><div align="center"><?php echo $row_Recordset2['editNo']; ?></div></td>
        <td width="187"><div align="center"><?php echo $row_Recordset2['sellerName1']; ?></div></td>
        <td width="165"><div align="center"><?php echo $row_Recordset2['sellerName2']; ?></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"><?php echo $row_Recordset2['kva']; ?></div></td>
        <td><div align="center"><?php echo $row_Recordset2['tapping']; ?></div></td>
        <td><div align="center"><?php echo $row_Recordset2['primaryvol']; ?></div></td>
        <td><div align="center"><?php echo $row_Recordset2['secondaryvol']; ?></div></td>
        <td><div align="center"><?php echo $row_Recordset2['typeTransfrom']; ?></div></td>
        <td><div align="center"><?php echo $row_Recordset2['vectorgroup']; ?></div></td>
        <td><div align="center"><?php echo $row_Recordset2['core']; ?></div></td>
        <td><div align="center"><?php echo $row_Recordset2['copper']; ?></div></td>
        <td><div align="center"><?php echo $row_Recordset2['tolerance1']; ?></div></td>
        <td><div align="center"><?php echo $row_Recordset2['z']; ?></div></td>
        <td><div align="center"><?php echo $row_Recordset2['tolerance2']; ?></div></td>
        <td><div align="center"><?php echo $row_Recordset2['tempo']; ?></div></td>
        <td><div align="center"><?php echo $row_Recordset2['tempw']; ?></div></td>
        <td><div align="center"><?php if($row_Recordset2['accessories1'] == "THERMOMETER"){ echo $row_Recordset2['value1']; 
								}elseif($row_Recordset2['accessories2'] == "THERMOMETER"){ echo $row_Recordset2['value2'];
								}elseif($row_Recordset2['accessories3'] == "THERMOMETER"){ echo $row_Recordset2['value3'];
								}elseif($row_Recordset2['accessories4'] == "THERMOMETER"){ echo $row_Recordset2['value4'];
								}elseif($row_Recordset2['accessories5'] == "THERMOMETER"){ echo $row_Recordset2['value5'];
								}elseif($row_Recordset2['accessories6'] == "THERMOMETER"){ echo $row_Recordset2['value6'];} ?></div></td>
        <td><div align="center"><?php if($row_Recordset2['accessories1'] == "PRESSURE RELIFE"){ echo $row_Recordset2['value1']; 
								}elseif($row_Recordset2['accessories2'] == "PRESSURE RELIFE"){ echo $row_Recordset2['value2'];
								}elseif($row_Recordset2['accessories3'] == "PRESSURE RELIFE"){ echo $row_Recordset2['value3'];
								}elseif($row_Recordset2['accessories4'] == "PRESSURE RELIFE"){ echo $row_Recordset2['value4'];
								}elseif($row_Recordset2['accessories5'] == "PRESSURE RELIFE"){ echo $row_Recordset2['value5'];
								}elseif($row_Recordset2['accessories6'] == "PRESSURE RELIFE"){ echo $row_Recordset2['value6'];} ?></div></td>
        <td><div align="center"><?php if($row_Recordset2['accessories1'] == "BUCHOLZ RELAY"){ echo $row_Recordset2['value1']; 
								}elseif($row_Recordset2['accessories2'] == "BUCHOLZ RELAY"){ echo $row_Recordset2['value2'];
								}elseif($row_Recordset2['accessories3'] == "BUCHOLZ RELAY"){ echo $row_Recordset2['value3'];
								}elseif($row_Recordset2['accessories4'] == "BUCHOLZ RELAY"){ echo $row_Recordset2['value4'];
								}elseif($row_Recordset2['accessories5'] == "BUCHOLZ RELAY"){ echo $row_Recordset2['value5'];
								}elseif($row_Recordset2['accessories6'] == "BUCHOLZ RELAY"){ echo $row_Recordset2['value6'];} ?></div></td>
        <td><div align="center"><?php if($row_Recordset2['accessories1'] == "PRESSURE GUAGE"){ echo $row_Recordset2['value1']; 
								}elseif($row_Recordset2['accessories2'] == "PRESSURE GUAGE"){ echo $row_Recordset2['value2'];
								}elseif($row_Recordset2['accessories3'] == "PRESSURE GUAGE"){ echo $row_Recordset2['value3'];
								}elseif($row_Recordset2['accessories4'] == "PRESSURE GUAGE"){ echo $row_Recordset2['value4'];
								}elseif($row_Recordset2['accessories5'] == "PRESSURE GUAGE"){ echo $row_Recordset2['value5'];
								}elseif($row_Recordset2['accessories6'] == "PRESSURE GUAGE"){ echo $row_Recordset2['value6'];} ?></div></td>
        <td><div align="center"><?php if($row_Recordset2['accessories1'] == "OIL LEVEL GAUGE"){ echo $row_Recordset2['value1']; 
								}elseif($row_Recordset2['accessories2'] == "OIL LEVEL GAUGE"){ echo $row_Recordset2['value2'];
								}elseif($row_Recordset2['accessories3'] == "OIL LEVEL GAUGE"){ echo $row_Recordset2['value3'];
								}elseif($row_Recordset2['accessories4'] == "OIL LEVEL GAUGE"){ echo $row_Recordset2['value4'];
								}elseif($row_Recordset2['accessories5'] == "OIL LEVEL GAUGE"){ echo $row_Recordset2['value5'];
								}elseif($row_Recordset2['accessories6'] == "OIL LEVEL GAUGE"){ echo $row_Recordset2['value6'];} ?></div></td>
        <td><div align="center"><?php if($row_Recordset2['accessories1'] == "WINDING TEMP INDICATOR"){ echo $row_Recordset2['value1']; 
								}elseif($row_Recordset2['accessories2'] == "WINDING TEMP INDICATOR"){ echo $row_Recordset2['value2'];
								}elseif($row_Recordset2['accessories3'] == "WINDING TEMP INDICATOR"){ echo $row_Recordset2['value3'];
								}elseif($row_Recordset2['accessories4'] == "WINDING TEMP INDICATOR"){ echo $row_Recordset2['value4'];
								}elseif($row_Recordset2['accessories5'] == "WINDING TEMP INDICATOR"){ echo $row_Recordset2['value5'];
								}elseif($row_Recordset2['accessories6'] == "WINDING TEMP INDICATOR"){ echo $row_Recordset2['value6'];} ?></div></td>
        <td><div align="center"><?php echo $row_Recordset2['cable']; ?> <?php echo $row_Recordset2['spe']; ?></div></td>
        <td><div align="center"><?php echo $row_Recordset2['onload']; ?></div></td>
        <td><div align="center"><?php echo $row_Recordset2['abb']; ?></div></td>
      </tr>
      <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table> 
<p>&nbsp;</p>

</body>
</html>
<?php
mysql_free_result($Recordset2);
?>
