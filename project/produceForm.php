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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "costform")) {
  $insertSQL = sprintf("INSERT INTO noid (NoidNo, editNo,formtype) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['no'], "text"),
                       GetSQLValueString($_POST['EditNo'], "text"),
                       GetSQLValueString($_POST['formtype'], "text"));

  mysql_select_db($database_dbconnect, $dbconnect);
  $Result1 = mysql_query($insertSQL, $dbconnect) or die(mysql_error());

  $insertGoTo = "succeed.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "costform")) {
  $insertSQL = sprintf("INSERT INTO seller (NoidNo, sellerName1, sellerName2, sellerName3, sellerName4) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['no'], "text"),
                       GetSQLValueString($_POST['name1'], "text"),
                       GetSQLValueString($_POST['name2'], "text"),
                       GetSQLValueString($_POST['name3'], "text"),
                       GetSQLValueString($_POST['name4'], "text"));

  mysql_select_db($database_dbconnect, $dbconnect);
  $Result1 = mysql_query($insertSQL, $dbconnect) or die(mysql_error());

  $insertGoTo = "succeed.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "costform")) {
  $insertSQL = sprintf("INSERT INTO refference (NoidNo, refference1, so, refference2, reffno, refference3, refference4, refference5, refference6) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['no'], "text"),
                       GetSQLValueString($_POST['REFFERENCE1'], "text"),
                       GetSQLValueString($_POST['so'], "text"),
                       GetSQLValueString($_POST['REFFERENCE2'], "text"),
                       GetSQLValueString($_POST['reffno'], "text"),
                       GetSQLValueString($_POST['REFFERENCE3'], "text"),
                       GetSQLValueString($_POST['REFFERENCE4'], "text"),
                       GetSQLValueString($_POST['REFFERENCE5'], "text"),
                       GetSQLValueString($_POST['REFFERENCE6'], "text"));

  mysql_select_db($database_dbconnect, $dbconnect);
  $Result1 = mysql_query($insertSQL, $dbconnect) or die(mysql_error());

  $insertGoTo = "succeed.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}


if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "costform")) {
  $insertSQL = sprintf("INSERT INTO technical_data (NoidNo, kva, phase, hz, tapping, technical, loadtap, primaryvol, secondaryvol, typeTransfrom, othertypetransfrom, leader, vectorgroup, loadtype, otherload, fin) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['no'], "text"),
					   GetSQLValueString($_POST['kva'], "text"),
                       GetSQLValueString($_POST['phase'], "text"),
                       GetSQLValueString($_POST['hz'], "text"),
                       GetSQLValueString($_POST['tapping'], "text"),
                       GetSQLValueString($_POST['technical'], "text"),
                       GetSQLValueString($_POST['loadtap'], "text"),
                       GetSQLValueString($_POST['primaryvol'], "text"),
                       GetSQLValueString($_POST['secondaryvol'], "text"),
                       GetSQLValueString($_POST['typeTransfrom'], "text"),
                       GetSQLValueString($_POST['othertypetransform'], "text"),
                       GetSQLValueString($_POST['leader'], "text"),
                       GetSQLValueString($_POST['vectorgroup'], "text"),
                       GetSQLValueString($_POST['loadtype'], "text"),
                       GetSQLValueString($_POST['otherload'], "text"),
					   GetSQLValueString($_POST['fin'], "text"));

  mysql_select_db($database_dbconnect, $dbconnect);
  $Result1 = mysql_query($insertSQL, $dbconnect) or die(mysql_error());

  $insertGoTo = "succeed.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "costform")) {
  $insertSQL = sprintf("INSERT INTO guaranteed (NoidNo, gua, core, copper, z, `at`, tempo, tempw, tolerance1, otherTolerance1, tolerance2, otherTolerance2, HV4, LV4) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['no'], "text"),
                       GetSQLValueString($_POST['gua'], "text"),
                       GetSQLValueString($_POST['CORE'], "text"),
                       GetSQLValueString($_POST['COPPER'], "text"),
                       GetSQLValueString($_POST['z'], "text"),
                       GetSQLValueString($_POST['at'], "text"),
                       GetSQLValueString($_POST['tempo'], "text"),
                       GetSQLValueString($_POST['tempw'], "text"),
                       GetSQLValueString($_POST['TOLERANCE'], "text"),
                       GetSQLValueString($_POST['otherTolerance1'], "text"),
                       GetSQLValueString($_POST['t'], "text"),
                       GetSQLValueString($_POST['otherTolerance2'], "text"),
                       GetSQLValueString($_POST['HV4'], "text"),
                       GetSQLValueString($_POST['LV4'], "text"));

  mysql_select_db($database_dbconnect, $dbconnect);
  $Result1 = mysql_query($insertSQL, $dbconnect) or die(mysql_error());

  $insertGoTo = "succeed.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "costform")) {
  $insertSQL = sprintf("INSERT INTO accessories (NoidNo, standard1, standard2, akstandard, accessories1, value1, comment1, cable, accessories2, value2, comment2, spe, accessories3, value3, comment3, fishtale, talefish, accessories4, value4, comment4, onload, accessories5, value5, comment5, abb, accessories6, value6, comment6, commentAcc, otherAcc) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['no'], "text"),
                       GetSQLValueString($_POST['STANDARD1'], "text"),
                       GetSQLValueString($_POST['STANDARD2'], "text"),
					   GetSQLValueString($_POST['akstandard'], "text"),
                       GetSQLValueString($_POST['accessories1'], "text"),
                       GetSQLValueString($_POST['value1'], "text"),
                       GetSQLValueString($_POST['comment1'], "text"),
                       GetSQLValueString($_POST['cable'], "text"),
                       GetSQLValueString($_POST['accessories2'], "text"),
                       GetSQLValueString($_POST['value2'], "text"),
                       GetSQLValueString($_POST['comment2'], "text"),
                       GetSQLValueString($_POST['spe'], "text"),
                       GetSQLValueString($_POST['accessories3'], "text"),
                       GetSQLValueString($_POST['value3'], "text"),
                       GetSQLValueString($_POST['comment3'], "text"),
                       GetSQLValueString($_POST['fishtale'], "text"),
                       GetSQLValueString($_POST['talefish'], "text"),
                       GetSQLValueString($_POST['accessories4'], "text"),
                       GetSQLValueString($_POST['value4'], "text"),
                       GetSQLValueString($_POST['comment4'], "text"),
                       GetSQLValueString($_POST['onload'], "text"),
                       GetSQLValueString($_POST['accessories5'], "text"),
                       GetSQLValueString($_POST['value5'], "text"),
                       GetSQLValueString($_POST['comment5'], "text"),
                       GetSQLValueString($_POST['abb'], "text"),
                       GetSQLValueString($_POST['accessories6'], "text"),
                       GetSQLValueString($_POST['value6'], "text"),
                       GetSQLValueString($_POST['comment6'], "text"),
                       GetSQLValueString($_POST['commentAcc'], "text"),
                       GetSQLValueString($_POST['otherAcc'], "text"));

  mysql_select_db($database_dbconnect, $dbconnect);
  $Result1 = mysql_query($insertSQL, $dbconnect) or die(mysql_error());

  $insertGoTo = "succeed.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "costform")) {
	$chk6[]="";
    $chk6=implode(',', $_POST['en']);
	
  $insertSQL = sprintf("INSERT INTO other (NoidNo, OIL, otherOIL, color, color1, shade, othercolor, en, otheren) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['no'], "text"),
                       GetSQLValueString($_POST['OIL'], "text"),
                       GetSQLValueString($_POST['otherOIL'], "text"),
                       GetSQLValueString($_POST['color'], "text"),
                       GetSQLValueString($_POST['color1'], "text"),
                       GetSQLValueString($_POST['shade'], "text"),
                       GetSQLValueString($_POST['otherColor'], "text"),
                       GetSQLValueString($chk6, "text"),
                       GetSQLValueString($_POST['otheren'], "text"));

  mysql_select_db($database_dbconnect, $dbconnect);
  $Result1 = mysql_query($insertSQL, $dbconnect) or die(mysql_error());

  $insertGoTo = "succeed.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "costform")) {
	$oiltest7[]="";
	$part[]="";
	$soun[]="";
	$lea[]="";
	$vibra[]="";
	$dga[]="";
	
    $oiltest7=implode(',', $_POST['oiltest']);
    $part=implode(',', $_POST['PARTIAL']);
    $soun=implode(',', $_POST['SOUND']);
    $lea=implode(',', $_POST['leak']);
    $vibra=implode(',', $_POST['VIBRATION']);
    $dga=implode(',', $_POST['DGA']);
	
  $insertSQL = sprintf("INSERT INTO test (NoidNo, `routine`, typetest1, HV7, LV7, typetest2, oiltest, power, `partial`, sound, leak, vibration, DGA) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['no'], "text"),
                       GetSQLValueString($_POST['ROUTINE'], "text"),
                       GetSQLValueString($_POST['typetest1'], "text"),
                       GetSQLValueString($_POST['HV7'], "text"),
                       GetSQLValueString($_POST['LV7'], "text"),
                       GetSQLValueString($_POST['typetest2'], "text"),
                       GetSQLValueString($oiltest7, "text"),
                       GetSQLValueString($_POST['POWER'], "text"),
                       GetSQLValueString($part, "text"),
                       GetSQLValueString($soun, "text"),
                       GetSQLValueString($lea, "text"),
                       GetSQLValueString($vibra, "text"),
                       GetSQLValueString($dga, "text"));

  mysql_select_db($database_dbconnect, $dbconnect);
  $Result1 = mysql_query($insertSQL, $dbconnect) or die(mysql_error());

  $insertGoTo = "succeed.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "costform")) {
  $insertSQL = sprintf("INSERT INTO packing (NoidNo, pack, set8, set8_1, set8_2) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['no'], "text"),
                       GetSQLValueString($_POST['pack'], "text"),
                       GetSQLValueString($_POST['set8'], "text"),
                       GetSQLValueString($_POST['set8_1'], "text"),
                       GetSQLValueString($_POST['set8_2'], "text"));

  mysql_select_db($database_dbconnect, $dbconnect);
  $Result1 = mysql_query($insertSQL, $dbconnect) or die(mysql_error());

  $insertGoTo = "succeed.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "costform")) {
	$ttest9[]="";
	$ttest9=implode(',', $_POST['ttest']);
  $insertSQL = sprintf("INSERT INTO transport (NoidNo, transport, transportin, transportout, car, road, ttest, shock) VALUES (%s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['no'], "text"),
                       GetSQLValueString($_POST['transport'], "text"),
                       GetSQLValueString($_POST['transportin'], "text"),
                       GetSQLValueString($_POST['transportout'], "text"),
                       GetSQLValueString($_POST['car'], "text"),
                       GetSQLValueString($_POST['road'], "text"),
                       GetSQLValueString($ttest9, "text"),
                       GetSQLValueString($_POST['SHOCK'], "text"));

  mysql_select_db($database_dbconnect, $dbconnect);
  $Result1 = mysql_query($insertSQL, $dbconnect) or die(mysql_error());

  $insertGoTo = "succeed.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "costform")) {
  $insertSQL = sprintf("INSERT INTO etc (NoidNo, mat, othermat, many, date10, date10_1, spare, presentNo, doc, other10) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['no'], "text"),
                       GetSQLValueString($_POST['mat'], "text"),
                       GetSQLValueString($_POST['othermat'], "text"),
                       GetSQLValueString($_POST['many'], "text"),
                       GetSQLValueString($_POST['date10'], "text"),
                       GetSQLValueString($_POST['date10_1'], "text"),
                       GetSQLValueString($_POST['SPARE'], "text"),
                       GetSQLValueString($_POST['presentno'], "text"),
                       GetSQLValueString($_POST['doc'], "text"),
                       GetSQLValueString($_POST['other10'], "text"));

  mysql_select_db($database_dbconnect, $dbconnect);
  $Result1 = mysql_query($insertSQL, $dbconnect) or die(mysql_error());

  $insertGoTo = "succeed.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "costform")) {
  $insertSQL = sprintf("INSERT INTO approve (NoidNo, approve1, approve2, approve3, approve4, approve5, approve6, approve7, approve8, approve9, wantDate, TellDate, present, position) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['no'], "text"),
                       GetSQLValueString($_POST['approve1'], "text"),
                       GetSQLValueString($_POST['approve2'], "text"),
                       GetSQLValueString($_POST['approve3'], "text"),
                       GetSQLValueString($_POST['approve4'], "text"),
                       GetSQLValueString($_POST['approve5'], "text"),
                       GetSQLValueString($_POST['approve6'], "text"),
                       GetSQLValueString($_POST['approve7'], "text"),
                       GetSQLValueString($_POST['approve8'], "text"),
                       GetSQLValueString($_POST['approve9'], "text"),
					   GetSQLValueString($_POST['wantDate'], "text"),
					   GetSQLValueString($_POST['TellDate'], "text"),
					   GetSQLValueString($_POST['present'], "text"),
					   GetSQLValueString($_POST['position'], "text"));

  mysql_select_db($database_dbconnect, $dbconnect);
  $Result1 = mysql_query($insertSQL, $dbconnect) or die(mysql_error());

  $insertGoTo = "succeed.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "costform")) {
  $insertSQL = sprintf("INSERT INTO forproduce (NoidNo, Itemcode) VALUES (%s, %s)",
                       GetSQLValueString($_POST['no'], "text"),
                       GetSQLValueString($_POST['itemcode'], "text"));

  mysql_select_db($database_dbconnect, $dbconnect);
  $Result1 = mysql_query($insertSQL, $dbconnect) or die(mysql_error());

  $insertGoTo = "succeed.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_dbconnect, $dbconnect);
$query_accessory = "SELECT * FROM accessorytool";
$accessory = mysql_query($query_accessory, $dbconnect) or die(mysql_error());
$row_accessory = mysql_fetch_assoc($accessory);
$totalRows_accessory = mysql_num_rows($accessory);

mysql_select_db($database_dbconnect, $dbconnect);
$query_technicial = "SELECT * FROM technicial";
$technicial = mysql_query($query_technicial, $dbconnect) or die(mysql_error());
$row_technicial = mysql_fetch_assoc($technicial);
$totalRows_technicial = mysql_num_rows($technicial);

mysql_select_db($database_dbconnect, $dbconnect);
$query_loadtap = "SELECT * FROM loadtap";
$loadtap = mysql_query($query_loadtap, $dbconnect) or die(mysql_error());
$row_loadtap = mysql_fetch_assoc($loadtap);
$totalRows_loadtap = mysql_num_rows($loadtap);

mysql_select_db($database_dbconnect, $dbconnect);
$query_typetransform = "SELECT * FROM typetransform";
$typetransform = mysql_query($query_typetransform, $dbconnect) or die(mysql_error());
$row_typetransform = mysql_fetch_assoc($typetransform);
$totalRows_typetransform = mysql_num_rows($typetransform);

mysql_select_db($database_dbconnect, $dbconnect);
$query_leader = "SELECT * FROM leader";
$leader = mysql_query($query_leader, $dbconnect) or die(mysql_error());
$row_leader = mysql_fetch_assoc($leader);
$totalRows_leader = mysql_num_rows($leader);

mysql_select_db($database_dbconnect, $dbconnect);
$query_loadingtype = "SELECT * FROM loadingtype";
$loadingtype = mysql_query($query_loadingtype, $dbconnect) or die(mysql_error());
$row_loadingtype = mysql_fetch_assoc($loadingtype);
$totalRows_loadingtype = mysql_num_rows($loadingtype);

mysql_select_db($database_dbconnect, $dbconnect);
$query_fishtale = "SELECT * FROM fishtale";
$fishtale = mysql_query($query_fishtale, $dbconnect) or die(mysql_error());
$row_fishtale = mysql_fetch_assoc($fishtale);
$totalRows_fishtale = mysql_num_rows($fishtale);

mysql_select_db($database_dbconnect, $dbconnect);
$query_talefish = "SELECT * FROM talefish";
$talefish = mysql_query($query_talefish, $dbconnect) or die(mysql_error());
$row_talefish = mysql_fetch_assoc($talefish);
$totalRows_talefish = mysql_num_rows($talefish);

mysql_select_db($database_dbconnect, $dbconnect);
$query_onload = "SELECT * FROM onload";
$onload = mysql_query($query_onload, $dbconnect) or die(mysql_error());
$row_onload = mysql_fetch_assoc($onload);
$totalRows_onload = mysql_num_rows($onload);

mysql_select_db($database_dbconnect, $dbconnect);
$query_otheronload = "SELECT * FROM otheronload";
$otheronload = mysql_query($query_otheronload, $dbconnect) or die(mysql_error());
$row_otheronload = mysql_fetch_assoc($otheronload);
$totalRows_otheronload = mysql_num_rows($otheronload);

mysql_select_db($database_dbconnect, $dbconnect);
$query_specolor = "SELECT * FROM specolor";
$specolor = mysql_query($query_specolor, $dbconnect) or die(mysql_error());
$row_specolor = mysql_fetch_assoc($specolor);
$totalRows_specolor = mysql_num_rows($specolor);

mysql_select_db($database_dbconnect, $dbconnect);
$query_road = "SELECT * FROM road";
$road = mysql_query($query_road, $dbconnect) or die(mysql_error());
$row_road = mysql_fetch_assoc($road);
$totalRows_road = mysql_num_rows($road);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript1.2">
var highlightcolor="#FBCEB3"
var ns6=document.getElementById&&!document.all
var previous=''
var eventobj
//Regular expression to highlight only form elements
var intended=/INPUT|TEXTAREA|SELECT|OPTION/
//Function to check whether element clicked is form element
function checkel(which){
if (which.style&&intended.test(which.tagName)){
if (ns6&&eventobj.nodeType==3)
eventobj=eventobj.parentNode.parentNode
return true
}
else
return false
}
//Function to highlight form element
function highlight(e){
eventobj=ns6? e.target : event.srcElement
if (previous!=''){
if (checkel(previous))
previous.style.backgroundColor=''
previous=eventobj
if (checkel(eventobj))
eventobj.style.backgroundColor=highlightcolor
}
else{
if (checkel(eventobj))
eventobj.style.backgroundColor=highlightcolor
previous=eventobj
}
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>แบบสอบถามการผลิต</title>
<style type="text/css">
body {
	background-color: #E95E12;
	
}

</style>
<script>
function keyPressed(e)
{
     var key;     
     if(window.event)
          key = window.event.keyCode; //IE
     else
          key = e.which; //firefox     
     return (key != 13);
}
</script>
<script language=JavaScript>

var datePickerDivID = "datepicker";
var iFrameDivID = "datepickeriframe";

var dayArrayShort = new Array('Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa');
var dayArrayMed = new Array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
var dayArrayLong = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
var monthArrayShort = new Array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
var monthArrayMed = new Array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec');
var monthArrayLong = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
 
var defaultDateSeparator = "/";        // รูปแบบตัวคั่นระหว่าง วัน เดือน ปี (มี "/" or ".")
var defaultDateFormat = "dmy"    // ใส่รูปแบบการเรียงลำดับของ วัน เดือน ปี ครับ (มี "mdy", "dmy", and "ymd")
var dateSeparator = defaultDateSeparator;
var dateFormat = defaultDateFormat;

function displayDatePicker(dateFieldName, displayBelowThisObject, dtFormat, dtSep)
{
  var targetDateField = document.getElementsByName (dateFieldName).item(0);

  if (!displayBelowThisObject)
    displayBelowThisObject = targetDateField;
 
  // if a date separator character was given, update the dateSeparator variable
  if (dtSep)
    dateSeparator = dtSep;
  else
    dateSeparator = defaultDateSeparator;
 
  // if a date format was given, update the dateFormat variable
  if (dtFormat)
    dateFormat = dtFormat;
  else
    dateFormat = defaultDateFormat;
 
  var x = displayBelowThisObject.offsetLeft;
  var y = displayBelowThisObject.offsetTop + displayBelowThisObject.offsetHeight ;
 
  // deal with elements inside tables and such
  var parent = displayBelowThisObject;
  while (parent.offsetParent) {
    parent = parent.offsetParent;
    x += parent.offsetLeft;
    y += parent.offsetTop ;
  }
 
  drawDatePicker(targetDateField, x, y);
}


function drawDatePicker(targetDateField, x, y)
{
  var dt = getFieldDate(targetDateField.value );

  if (!document.getElementById(datePickerDivID)) {

    var newNode = document.createElement("div");
    newNode.setAttribute("id", datePickerDivID);
    newNode.setAttribute("class", "dpDiv");
    newNode.setAttribute("style", "visibility: hidden;");
    document.body.appendChild(newNode);
  }
 
  // move the datepicker div to the proper x,y coordinate and toggle the visiblity
  var pickerDiv = document.getElementById(datePickerDivID);
  pickerDiv.style.position = "absolute";
  pickerDiv.style.left = x + "px";
  pickerDiv.style.top = y + "px";
  pickerDiv.style.visibility = (pickerDiv.style.visibility == "visible" ? "hidden" : "visible");
  pickerDiv.style.display = (pickerDiv.style.display == "block" ? "none" : "block");
  pickerDiv.style.zIndex = 10000;
 
  // draw the datepicker table
  refreshDatePicker(targetDateField.name, dt.getFullYear(), dt.getMonth(), dt.getDate());
}

function refreshDatePicker(dateFieldName, year, month, day)
{

  var thisDay = new Date();
 
  if ((month >= 0) && (year > 0)) {
    thisDay = new Date(year, month, 1);
  } else {
    day = thisDay.getDate();
    thisDay.setDate(1);
  }

  var crlf = "\r\n";
  var TABLE = "<table cols=7 class='dpTable'>" + crlf;
  var xTABLE = "</table>" + crlf;
  var TR = "<tr class='dpTR'>";
  var TR_title = "<tr class='dpTitleTR'>";
  var TR_days = "<tr class='dpDayTR'>";
  var TR_todaybutton = "<tr class='dpTodayButtonTR'>";
  var xTR = "</tr>" + crlf;
  var TD = "<td class='dpTD' onMouseOut='this.className=\"dpTD\";' onMouseOver=' this.className=\"dpTDHover\";' ";    // leave this tag open, because we'll be adding an onClick event
  var TD_title = "<td colspan=5 class='dpTitleTD'>";
  var TD_buttons = "<td class='dpButtonTD'>";
  var TD_todaybutton = "<td colspan=7 class='dpTodayButtonTD'>";
  var TD_days = "<td class='dpDayTD'>";
  var TD_selected = "<td class='dpDayHighlightTD' onMouseOut='this.className=\"dpDayHighlightTD\";' onMouseOver='this.className=\"dpTDHover\";' ";    // leave this tag open, because we'll be adding an onClick event
  var xTD = "</td>" + crlf;
  var DIV_title = "<div class='dpTitleText'>";
  var DIV_selected = "<div class='dpDayHighlight'>";
  var xDIV = "</div>";
 
  // start generating the code for the calendar table
  var html = TABLE;

  html += TR_title;
  html += TD_buttons + getButtonCode(dateFieldName, thisDay, -1, "<") + xTD;
  html += TD_title + DIV_title + monthArrayLong[ thisDay.getMonth()] + " " + thisDay.getFullYear() + xDIV + xTD;
  html += TD_buttons + getButtonCode(dateFieldName, thisDay, 1, ">") + xTD;
  html += xTR;
 
  // this is the row that indicates which day of the week we're on
  html += TR_days;
  for(i = 0; i < dayArrayShort.length; i++)
    html += TD_days + dayArrayShort[i] + xTD;
  html += xTR;
 
  // now we'll start populating the table with days of the month
  html += TR;
 
  // first, the leading blanks
  for (i = 0; i < thisDay.getDay(); i++)
    html += TD + " " + xTD;
 
  // now, the days of the month
  do {
    dayNum = thisDay.getDate();
    TD_onclick = " onclick=\"updateDateField('" + dateFieldName + "', '" + getDateString(thisDay) + "');\">";
    
    if (dayNum == day)
      html += TD_selected + TD_onclick + DIV_selected + dayNum + xDIV + xTD;
    else
      html += TD + TD_onclick + dayNum + xTD;
    
    // if this is a Saturday, start a new row
    if (thisDay.getDay() == 6)
      html += xTR + TR;
    
    // increment the day
    thisDay.setDate(thisDay.getDate() + 1);
  } while (thisDay.getDate() > 1)
 
  // fill in any trailing blanks
  if (thisDay.getDay() > 0) {
    for (i = 6; i > thisDay.getDay(); i--)
      html += TD + " " + xTD;
  }
  html += xTR;
 
  // add a button to allow the user to easily return to today, or close the calendar
  var today = new Date();
  var todayString = "Today is " + dayArrayMed[today.getDay()] + ", " + monthArrayMed[ today.getMonth()] + " " + today.getDate();
  html += TR_todaybutton + TD_todaybutton;
  html += "<button class='dpTodayButton' onClick='refreshDatePicker(\"" + dateFieldName + "\");'>this month</button> ";
  html += "<button class='dpTodayButton' onClick='updateDateField(\"" + dateFieldName + "\");'>close</button>";
  html += xTD + xTR;
 
  // and finally, close the table
  html += xTABLE;
 
  document.getElementById(datePickerDivID).innerHTML = html;
  // add an "iFrame shim" to allow the datepicker to display above selection lists
  adjustiFrame();
}

function getButtonCode(dateFieldName, dateVal, adjust, label)
{
  var newMonth = (dateVal.getMonth () + adjust) % 12;
  var newYear = dateVal.getFullYear() + parseInt((dateVal.getMonth() + adjust) / 12);
  if (newMonth < 0) {
    newMonth += 12;
    newYear += -1;
  }
 
  return "<button class='dpButton' onClick='refreshDatePicker(\"" + dateFieldName + "\", " + newYear + ", " + newMonth + ");'>" + label + "</button>";
}

function getDateString(dateVal)
{
  var dayString = "00" + dateVal.getDate();
  var monthString = "00" + (dateVal.getMonth()+1);
  dayString = dayString.substring(dayString.length - 2);
  monthString = monthString.substring(monthString.length - 2);
 
  switch (dateFormat) {
    case "dmy" :
      return dayString + dateSeparator + monthString + dateSeparator + dateVal.getFullYear();
    case "ymd" :
      return dateVal.getFullYear() + dateSeparator + monthString + dateSeparator + dayString;
    case "mdy" :
    default :
      return monthString + dateSeparator + dayString + dateSeparator + dateVal.getFullYear();
  }
}

function getFieldDate(dateString)
{
  var dateVal;
  var dArray;
  var d, m, y;
 
  try {
    dArray = splitDateString(dateString);
    if (dArray) {
      switch (dateFormat) {
        case "dmy" :
          d = parseInt(dArray[0], 10);
          m = parseInt(dArray[1], 10) - 1;
          y = parseInt(dArray[2], 10);
          break;
        case "ymd" :
          d = parseInt(dArray[2], 10);
          m = parseInt(dArray[1], 10) - 1;
          y = parseInt(dArray[0], 10);
          break;
        case "mdy" :
        default :
          d = parseInt(dArray[1], 10);
          m = parseInt(dArray[0], 10) - 1;
          y = parseInt(dArray[2], 10);
          break;
      }
      dateVal = new Date(y, m, d);
    } else if (dateString) {
      dateVal = new Date(dateString);
    } else {
      dateVal = new Date();
    }
  } catch(e) {
    dateVal = new Date();
  }
 
  return dateVal;
}


function splitDateString(dateString)
{
  var dArray;
  if (dateString.indexOf("/") >= 0)
    dArray = dateString.split("/");
  else if (dateString.indexOf(".") >= 0)
    dArray = dateString.split(".");
  else if (dateString.indexOf("-") >= 0)
    dArray = dateString.split("-");
  else if (dateString.indexOf("\\") >= 0)
    dArray = dateString.split("\\");
  else
    dArray = false;
 
  return dArray;
}

function updateDateField(dateFieldName, dateString)
{
  var targetDateField = document.getElementsByName (dateFieldName).item(0);
  if (dateString)
    targetDateField.value = dateString;
 
  var pickerDiv = document.getElementById(datePickerDivID);
  pickerDiv.style.visibility = "hidden";
  pickerDiv.style.display = "none";
 
  adjustiFrame();
  targetDateField.focus();

  if ((dateString) && (typeof(datePickerClosed) == "function"))
    datePickerClosed(targetDateField);
}

function adjustiFrame(pickerDiv, iFrameDiv)
{

  var is_opera = (navigator.userAgent.toLowerCase().indexOf("opera") != -1);
  if (is_opera)
    return;
  
  // put a try/catch block around the whole thing, just in case
  try {
    if (!document.getElementById(iFrameDivID)) {

      var newNode = document.createElement("iFrame");
      newNode.setAttribute("id", iFrameDivID);
      newNode.setAttribute("src", "javascript:false;");
      newNode.setAttribute("scrolling", "no");
      newNode.setAttribute ("frameborder", "0");
      document.body.appendChild(newNode);
    }
    
    if (!pickerDiv)
      pickerDiv = document.getElementById(datePickerDivID);
    if (!iFrameDiv)
      iFrameDiv = document.getElementById(iFrameDivID);
    
    try {
      iFrameDiv.style.position = "absolute";
      iFrameDiv.style.width = pickerDiv.offsetWidth;
      iFrameDiv.style.height = pickerDiv.offsetHeight ;
      iFrameDiv.style.top = pickerDiv.style.top;
      iFrameDiv.style.left = pickerDiv.style.left;
      iFrameDiv.style.zIndex = pickerDiv.style.zIndex - 1;
      iFrameDiv.style.visibility = pickerDiv.style.visibility ;
      iFrameDiv.style.display = pickerDiv.style.display;
    } catch(e) {
    }
 
  } catch (ee) {
  }
 
}

</script>

<style>

/* the div that holds the date picker calendar */
.dpDiv {
	}

/* the table (within the div) that holds the date picker calendar */
.dpTable {
	font-family: Tahoma, Arial, Helvetica, sans-serif;
	font-size: 12px;
	text-align: center;
	color: #505050;
	background-color: #ece9d8;
	border: 1px solid #AAAAAA;
	}

/* a table row that holds date numbers (either blank or 1-31) */
.dpTR {
	}

/* the top table row that holds the month, year, and forward/backward buttons */
.dpTitleTR {
	}

/* the second table row, that holds the names of days of the week (Mo, Tu, We, etc.) */
.dpDayTR {
	}

/* the bottom table row, that has the "This Month" and "Close" buttons */
.dpTodayButtonTR {
	}

/* a table cell that holds a date number (either blank or 1-31) */
.dpTD {
	border: 1px solid #ece9d8;
	}

/* a table cell that holds a highlighted day (usually either today's date or the current date field value) */
.dpDayHighlightTD {
	background-color: #CCCCCC;
	border: 1px solid #AAAAAA;
	}

/* the date number table cell that the mouse pointer is currently over (you can use contrasting colors to make it apparent which cell is being hovered over) */
.dpTDHover {
	background-color: #aca998;
	border: 1px solid #888888;
	cursor: pointer;
	color: red;
	}

/* the table cell that holds the name of the month and the year */
.dpTitleTD {
	}

/* a table cell that holds one of the forward/backward buttons */
.dpButtonTD {
	}

/* the table cell that holds the "This Month" or "Close" button at the bottom */
.dpTodayButtonTD {
	}

/* a table cell that holds the names of days of the week (Mo, Tu, We, etc.) */
.dpDayTD {
	background-color: #CCCCCC;
	border: 1px solid #AAAAAA;
	color: white;
	}

/* additional style information for the text that indicates the month and year */
.dpTitleText {
	font-size: 12px;
	color: gray;
	font-weight: bold;
	}

/* additional style information for the cell that holds a highlighted day (usually either today's date or the current date field value) */ 
.dpDayHighlight {
	color: 4060ff;
	font-weight: bold;
	}

/* the forward/backward buttons at the top */
.dpButton {
	font-family: Verdana, Tahoma, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: gray;
	background: #d8e8ff;
	font-weight: bold;
	padding: 0px;
	}

/* the "This Month" and "Close" buttons at the bottom */
.dpTodayButton {
	font-family: Verdana, Tahoma, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: gray;
	background: #d8e8ff;
	font-weight: bold;
	}

</style>
<style>
.button {
    background-color: #FBCEB3;
    border: none;
    color: white;
    padding: 10px 22px;
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
    border: 2px solid #FBCEB3;
	border-radius: 20px;
}
.button5:hover {
    background-color: #FBCEB3;
    color: black;
}
</style>
</head>

<body onKeyPress="return keyPressed(event)">
<script language="javascript">
function fncSubmit()
{
	if(document.costform.no.value == "")
	{
		alert('กรุณากรอกข้อมูลให้ครบ');
		document.costform.no.focus();		
		return false;
	}
	if(document.costform.name1.value == "")
	{
		alert('กรุณากรอกข้อมูลให้ครบ');
		document.costform.name1.focus();
		return false;
	}	
	if(document.costform.name2.value == "")
	{
		alert('กรุณากรอกข้อมูลให้ครบ');
		document.costform.name2.focus();		
		return false;
	}
	if(document.costform.name3.value == "")
	{
		alert('กรุณากรอกข้อมูลให้ครบ');
		document.costform.name3.focus();		
		return false;
	}
	if(document.costform.name4.value == "")
	{
		alert('กรุณากรอกข้อมูลให้ครบ');
		document.costform.name4.focus();		
		return false;
	}
	if(document.costform.REFFERENCE1.checked == "" && document.costform.REFFERENCE2.checked == "" && document.costform.REFFERENCE3.checked == "" && document.costform.REFFERENCE4.checked == "" && document.costform.REFFERENCE5.checked == "" && document.costform.REFFERENCE6.checked == "")
	{
		alert('กรุณากรอกข้อมูลให้ครบ');
		document.costform.REFFERENCE1.focus();		
		return false;
	}
	if(document.costform.kva.value == "")
	{
		alert('กรุณากรอกข้อมูลให้ครบ');
		document.costform.kva.focus();		
		return false;
	}
	if(document.costform.phase.value == "")
	{
		alert('กรุณากรอกข้อมูลให้ครบ');
		document.costform.phase.focus();		
		return false;
	}
	if(document.costform.hz.value == "")
	{
		alert('กรุณากรอกข้อมูลให้ครบ');
		document.costform.hz.focus();		
		return false;
	}
	if(document.costform.tapping.value == "")
	{
		alert('กรุณากรอกข้อมูลให้ครบ');
		document.costform.tapping.focus();		
		return false;
	}
	if(document.costform.primaryvol.value == "")
	{
		alert('กรุณากรอกข้อมูลให้ครบ');
		document.costform.primaryvol.focus();		
		return false;
	}
	if(document.costform.secondatyvol.value == "")
	{
		alert('กรุณากรอกข้อมูลให้ครบ');
		document.costform.secondaryvol.focus();		
		return false;
	}
	if(document.costform.vectorgroup.value == "")
	{
		alert('กรุณากรอกข้อมูลให้ครบ');
		document.costform.vectorgroup.focus();		
		return false;
	}
	document.costform.submit();	
}
</script>
<form onClick="highlight(event)" name="costform"  action="<?php echo $editFormAction; ?>" method="POST" id="costform" onSubmit="JavaScript:return fncSubmit();">
	
    
<!big table>

<img src="img/logo_detail.jpg" />
	<center><table border="2" width="50%" bgcolor="#FAA575">
		
	  <caption> <font size = "5"><b>ใบสอบถามการผลิต<br>
	  </caption></font></b>
  <tr><td colspan="2"><input type="hidden" name="formtype" value="แบบสอบถามการผลิต" >
	<p align="right"><font size= "2"> เลขที่ </font>
	<input type="text" name="no" size="15" width="20"></p>
  <p align="right"><font size= "2"> แก้ไขครั้งที่ </font>
	<input type="text" name="EditNo" size="8" width="5"></p></td></tr>
<!row1 seller>
		<tr><td><center> 1 SELLER </center></td>
			<td> ชื่อผู้ขอ <input type="text" name="name1" size="20" width="20" maxlength="30">
				ผู้เปิดค้าประมูล / ลูกค้า <input type="text" name="name2" size="20" width="20" maxlength="30">
				<p> ชื่อผู้ใช้ (Owner) <input type="text" name="name3" size="20" width="20" maxlength="30">
				โครงการ / Bid No. <input type="text" name="name4" size="20" width="20" maxlength="30"></p>
			</td>
	  </tr>

<!row2 refference>
		<tr>
			<td><center> 2 REFERENCE </center></td>
			<td> <input type="checkbox" name="REFFERENCE1" id="REFFERENCE1" value="√"> <!1>ลูกค้าเคยใช้หม้อแปลง S/O <input name="so" id="so" type="text" disabled="disabled" size="15"> 
				<input type="checkbox" name="REFFERENCE2" id="REFFERENCE2" value="√"> <!2>อ้างอิงทุนเลขที่ <input name="reffno" id="refno" type="text" disabled="disabled" size="15">
			  <p><input type="checkbox" name="REFFERENCE3" value="√"> <!3>ลูกค้า (ผู้ใช้) ไม่เคยสั่งหม้อแปลงเอกรัฐ <input type="checkbox" name="REFFERENCE4" value="√"> <!4>ออกแบบใหม่เพื่อทดแทนของเดิม </p>
				<p> <input type="checkbox" name="REFFERENCE5" value="√"><!5>ออกแบบปกติตามมาตรฐานเอกรัฐ <input type="checkbox" name="REFFERENCE6" value="√"><!6> ออกแบบตามลูกค้ากำหนด (FIX DIMENTION)  </p> 
			</td>
		</tr>

<!row3 technical data>
		<tr>
			<td><center> 3 TECHNICAL DATA </center></td>
			<!first table>
			<td><table border="1" width="100%">
				<tr>
					<td><center>KVA</td>
					<td><center>Phase</td>
					<td><center>Hz</td>
					<td><center>% TAPPING</td>
					<td><center><select name="technical" size="1">
					  <?php
do {  
?>
					  <option value="<?php echo $row_technicial['technicialname']?>"><?php echo $row_technicial['technicialname']?></option>
					  <?php
} while ($row_technicial = mysql_fetch_assoc($technicial));
  $rows = mysql_num_rows($technicial);
  if($rows > 0) {
      mysql_data_seek($technicial, 0);
	  $row_technicial = mysql_fetch_assoc($technicial);
  }
?>
                    </select></td>
					<td><center> PRIMARY VOLTAGE</td>
					<td><center> SECONDARY VOLTAGE</td>
				</tr>
				<tr>
					<td><center> <input type="text" name="kva" id="kva" /> </td>
					<td><center> <input type="text" name="phase" /> </td>
					<td><center> <input type="text" name="hz" /> </td>
					<td><center> <input type="text" name="tapping" /> </td>
					<td><center><select name="loadtap" size="1">
					  <?php
do {  
?>
					  <option value="<?php echo $row_loadtap['loadtapname']?>"><?php echo $row_loadtap['loadtapname']?></option>
					  <?php
} while ($row_loadtap = mysql_fetch_assoc($loadtap));
  $rows = mysql_num_rows($loadtap);
  if($rows > 0) {
      mysql_data_seek($loadtap, 0);
	  $row_loadtap = mysql_fetch_assoc($loadtap);
  }
?>
                    </select></td>
					<td><center> <input type="text" name="primaryvol" /></td>
					<td><center> <input type="text" name="secondaryvol" /> </td>
				</tr>
				</table>
				<!second table>
				<table border="1" width="100%">
					<tr>
						<td><center>TYPE OF TRANFORMER</td>
						<td><center>ชนิดของตัวนำ</td>
						<td><center>VECTOR GROUP</td>
						<td colspan="2"><center>LOADING TYPE</td>
					</tr>
					<tr>
						<td><center><select name="typeTransfrom" id="typeTransfrom" size="1" style="width: 200px">
						  <?php
do {  
?>
						  <option value="<?php echo $row_typetransform['typetransformname']?>"><?php echo $row_typetransform['typetransformname']?></option>
						  <?php
} while ($row_typetransform = mysql_fetch_assoc($typetransform));
  $rows = mysql_num_rows($typetransform);
  if($rows > 0) {
      mysql_data_seek($typetransform, 0);
	  $row_typetransform = mysql_fetch_assoc($typetransform);
  }
?>
                        </select></td>

						<td><center><select name="leader" size="1" style="width: 100px">
						  <?php
do {  
?>
						  <option value="<?php echo $row_leader['leadername']?>"><?php echo $row_leader['leadername']?></option>
						  <?php
} while ($row_leader = mysql_fetch_assoc($leader));
  $rows = mysql_num_rows($leader);
  if($rows > 0) {
      mysql_data_seek($leader, 0);
	  $row_leader = mysql_fetch_assoc($leader);
  }
?>
                        </select></td>

						<td><center><input type="text" name="vectorgroup" /></center></td>
						<td><center><select name="loadtype" size="1" style="width: 200px">
						  <?php
do {  
?>
						  <option value="<?php echo $row_loadingtype['loadingtypename']?>"><?php echo $row_loadingtype['loadingtypename']?></option>
						  <?php
} while ($row_loadingtype = mysql_fetch_assoc($loadingtype));
  $rows = mysql_num_rows($loadingtype);
  if($rows > 0) {
      mysql_data_seek($loadingtype, 0);
	  $row_loadingtype = mysql_fetch_assoc($loadingtype);
  }
?>
                        </select></td>
						<td><input type="text" name="otherload"></td>
					</tr>
                    <tr><td><center>อื่นๆ <input type="text" name="othertypetransform"  /></center></td>
                    <td><div align="center">ครีบ
                  <select name="fin" id="fin" size="1" style="width: 150px"/>
                    <option value="CORRUGATE">CORRUGATE</option>
                    <option value="FIN">FIN</option>                  
                  </select>
                  </div></td></tr>
				</table>
			</td>
		</tr>

<!row4 guaruntee>
			<tr>
				<td><center> 4 GUARANTEED </center></td>
				<td><input name="gua" type="radio" value="มาตรฐานเอกรัฐ (IEC STANDARD ; TOTAL LOSS +10% )" checked="checked"> 
				มาตรฐานเอกรัฐ (IEC STANDARD ; TOTAL LOSS +10% )<br>
				<input type="radio" name="gua" id="gua" value="พิเศษ"> พิเศษ
				<!table in>
				<table border="1" width="100%">
					<tr>
						<td><center>CORE LOSS (WATT)</td>
						<td><center>COPPER LOSS (WATT)</td>
						<td colspan="2"><center>% Z</td>
						
						<td><center>AT (°C)</td>
						<td colspan="2"><center>TEMP RISE OIL/WINDING</td>
					</tr>
					<tr>
						<td><div align="center">
						  <input type="text" name="CORE" id="CORE" >
					    </div></td>
						<td><div align="center">
						  <input type="text" name="COPPER" id="COPPER" >
					    </div></td>
						<td colspan="2"><div align="center">
						  <input type="text" name="z" id="z" >
					    </div></td>
						<td><div align="center">
						  <input type="text" name="at" id="at" >
					    </div></td>
						<td><div align="center">
						  <input type="text" name="tempo" id="tempo" >
					    </div></td>
						<td><div align="center">
						  <input type="text" name="tempw" id="tempw" >
					    </div></td>
					</tr>
					<tr>
						<td colspan="2" rowspan="2"> TOLERANCE 
							<input type="radio" name="TOLERANCE" value="ตาม IEC STANDARD" onclick="CheckTOLERANCE()">ตาม IEC STANDARD 
							<input type="radio" name="TOLERANCE" value="+ 0%"  onclick="CheckTOLERANCE()"> + 0% <br>
							<center><input type="radio" name="TOLERANCE" id="TOLERANCE" value="อื่นๆ" onclick="CheckTOLERANCE()"> อื่นๆ <input name="otherTolerance1" id="otherTolerance1" type="text" disabled="disabled" size="5"></td>
						<td colspan="2" rowspan="2"> TOLERANCE 
							<input type="radio" name="t" value="ตาม IEC STANDARD" onclick="Checkt()"> ตาม IEC STANDARD <br>
							<input type="radio" name="t" id="t" value="อื่นๆ" onclick="Checkt()"> อื่นๆ 
							<input name="otherTolerance2" id="otherTolerance2" type="text" disabled="disabled" size="5"></td>
						<td colspan="3"><center> IMPULSE : FULL WAVE (KV)</td>
					</tr>
					<tr>
						<td><center>HV / LV</center></td>
						<td><input type="text" name="HV4" id="HV4"></td>
						<td><input type="text" name="LV4" id="LV4"></td>
					</tr>
				</table>
			  </td>
			</tr>

<!row5 accessories>
			<tr>
				<td><center> 5 ACCESSORIES</td>
			  <td><input name="STANDARD1" type="checkbox" value="√" checked="checked">
			  มาตรฐานเอกรัฐ <input name="akstandard" type="text" id="akstandard" size="120" readonly="readonly" /><br>
			  
				<input type="checkbox" name="STANDARD2" value="√" id="STANDARD2" >รายละเอียดเพิ่มเติม
				<!table in>
				<table border="1" width="100%">
					<!row1>
					<tr>
						<td>
							<select name="accessories1" id="accessories1"  size="1" disabled="disable" style="width: 200px">
							  <option value=""> กรุณาเลือก
								<?php
                                do {  
                                ?>
							  <option value="<?php echo $row_accessory['accname']?>"><?php echo $row_accessory['accname']?></option>
							  <?php
} while ($row_accessory = mysql_fetch_assoc($accessory));
  $rows = mysql_num_rows($accessory);
  if($rows > 0) {
      mysql_data_seek($accessory, 0);
	  $row_accessory = mysql_fetch_assoc($accessory);
  }
?>
                            </select>
						</td>
						<td>
							<select name="value1" id="value1" size="1" disabled="disable" >
								<option value=""> กรุณาเลือก
								<option value="WO/C"> WO/C
								<option value="W/C"> W/C
							</select>
						</td>
						<td><center>
						  <input type="text" name="comment1" id="comment1" placeholder="BRAND/Comment" disabled="disable" ></td>
						<td colspan="2"><center><b>CABLE BOX TYPE</td>
						<td>
							<select name="cable" size="1">
								<option value=""> กรุณาเลือก
								<option value="1"> 1
								<option value="2"> 2
								<option value="3"> 3
								<option value="4"> 4
								<option value="5"> 5
								<option value="พิเศษ"> พิเศษ
							</select>
						</td>
					</tr>
					<!row2>
					<tr>
						<td>
							<select name="accessories2" id="accessories2" size="1" disabled="disable" style="width: 200px">
							  <option value=""> กรุณาเลือก
                              
                            </select>
						</td>
						<td>
							<select name="value2" id="value2" size="1" disabled="disable" >
								<option value=""> กรุณาเลือก
								<option value="WO/C"> WO/C
								<option value="W/C"> W/C
							</select>
						</td>
						<td><center>
						  <input type="text" name="comment2" id="comment2" placeholder="BRAND/Comment" disabled="disable"></td>
						<td><center><b>พิเศษ</td>
						<td colspan="2"><input type="text" name="spe" size="10"></td>
					</tr>
					<!row3>
					<tr>
						<td>
							<select name="accessories3" id="accessories3" size="1" disabled="disable" style="width: 200px">
							  <option value=""> กรุณาเลือก
                              </select>
						</td>
						<td>
							<select name="value3" id="value3" size="1" disabled="disable">
								<option value=""> กรุณาเลือก
								<option value="WO/C"> WO/C
								<option value="W/C"> W/C
							</select>
						</td>
						<td><center>
						  <input type="text" name="comment3" id="comment3" placeholder="BRAND/Comment" disabled="disable"></td>
						<td><center><b>ชนิดหางปลา</td>
						<td>
							<select name="fishtale" size="1">
							  <option value=""> กรุณาเลือก
                              <?php
do {  
?>
							  <option value="<?php echo $row_fishtale['fishtalename']?>"><?php echo $row_fishtale['fishtalename']?></option>
							  <?php
} while ($row_fishtale = mysql_fetch_assoc($fishtale));
  $rows = mysql_num_rows($fishtale);
  if($rows > 0) {
      mysql_data_seek($fishtale, 0);
	  $row_fishtale = mysql_fetch_assoc($fishtale);
  }
?>
                            </select>
						</td>
						<td>
							<select name="talefish" size="1">
							  <option value=""> กรุณาเลือก
                              <?php
do {  
?>
							  <option value="<?php echo $row_talefish['talefishname']?>"><?php echo $row_talefish['talefishname']?></option>
							  <?php
} while ($row_talefish = mysql_fetch_assoc($talefish));
  $rows = mysql_num_rows($talefish);
  if($rows > 0) {
      mysql_data_seek($talefish, 0);
	  $row_talefish = mysql_fetch_assoc($talefish);
  }
?>
                            </select>
						</td>
					</tr>
					<!row4>
					<tr>
						<td>
							<select name="accessories4" id="accessories4" size="1" disabled="disable" style="width: 200px">
							  <option value=""> กรุณาเลือก
                              
                            </select>
						</td>
						<td>
							<select name="value4" id="value4" size="1" disabled="disable">
								<option value=""> กรุณาเลือก
								<option value="WO/C"> WO/C
								<option value="W/C"> W/C
							</select>
						</td>
						<td><center>
						  <input type="text" name="comment4" id="comment4" placeholder="BRAND/Comment" disabled="disable"></td>
						<td><center><b>ONLOAD TAPCHANGER</td>
						<td>
							<select name="onload" size="1">
							  <option value=""> กรุณาเลือก
                              <?php
do {  
?>
							  <option value="<?php echo $row_onload['onloadname']?>"><?php echo $row_onload['onloadname']?></option>
							  <?php
} while ($row_onload = mysql_fetch_assoc($onload));
  $rows = mysql_num_rows($onload);
  if($rows > 0) {
      mysql_data_seek($onload, 0);
	  $row_onload = mysql_fetch_assoc($onload);
  }
?>
                      </select></td>
					</tr>
					<!row5>
					<tr>
						<td>
							<select name="accessories5" id="accessories5" size="1" disabled="disable" style="width: 200px">
							  <option value=""> กรุณาเลือก
                              
                            </select>
						</td>
						<td>
							<select name="value5" id="value5" size="1" disabled="disable">
								<option value=""> กรุณาเลือก
								<option value="WO/C"> WO/C
								<option value="W/C"> W/C
							</select>
						</td>
						<td><center>
						  <input type="text" name="comment5" id="comment5" placeholder="BRAND/Comment" disabled="disable"></td>
						<td><center><b>อื่นๆ</td>
						<td colspan="2">
							<select name="abb" size="1">
							  <option value=""> กรุณาเลือก
                              <?php
do {  
?>
							  <option value="<?php echo $row_otheronload['otheronloadname']?>"><?php echo $row_otheronload['otheronloadname']?></option>
							  <?php
} while ($row_otheronload = mysql_fetch_assoc($otheronload));
  $rows = mysql_num_rows($otheronload);
  if($rows > 0) {
      mysql_data_seek($otheronload, 0);
	  $row_otheronload = mysql_fetch_assoc($otheronload);
  }
?>
							</select>
						</td>
					</tr>
					<!row6>
					<tr>
						<td>
							<select name="accessories6" id="accessories6" size="1" disabled="disable" style="width: 200px">
							  <option value=""> กรุณาเลือก
                              </select>
						</td>
						<td>
							<select name="value6" id="value6" size="1" disabled="disable">
								<option value=""> กรุณาเลือก
								<option value="WO/C"> WO/C
								<option value="W/C"> W/C
							</select>
						</td>
						<td><center>
						  <input type="text" name="comment6" id="comment6" placeholder="BRAND/Comment" disabled="disable"></td>
						<td colspan="3"><center><input type="text" name="commentAcc" id="commentAcc" ></td>
					</tr>

					<tr>
						<td><center><b>อื่นๆ</td>
						<td colspan="2"> <input type="text" name="otherAcc" id="otherAcc" disabled="disable"></td>
					</tr>
				</table>
				</td>
			</tr>

<!row6 other>
			<tr>
				<td><center> 6 OTHER</td>
				<td>
					<b>OIL TYPE
					<!table1>
					<table width="70%">
						<tr>
							<td><input type="radio" name="OIL" id="OIL1" value="UN - INHIBITATED" onclick="CheckOIL()"> 
							UN - INHIBITATED </td>
							<td><input type="radio" name="OIL" id="OIL2" value="INHIBITATED" onclick="CheckOIL()"> INHIBITATED</td>
							<td><input type="radio" name="OIL" id="OIL3" value="SILICONE" onclick="CheckOIL()"> SILICONE</td>
							<td><input type="radio" name="OIL" id="OIL4" value="FR3" onclick="CheckOIL()"> FR3 </td>
							<td><input type="radio" name="OIL" id="OIL" value="อื่นๆ" onclick="CheckOIL()"> อื่นๆ <input name="otherOIL" id="otherOIL" type="text" disabled="disabled" size="20" onclick="CheckOIL()"></td>
						</tr>
					</table>
					<b> สี
					<!table2>
					<table>
						<tr>
							<td><input type="radio" name="color" value="มาตรฐานเอกรัฐ" onclick="Checkcolor()"> มาตรฐานเอกรัฐ</td>
							<td><input type="radio" name="color" value="มาฐานเอกรัฐ EPOXY" onclick="Checkcolor()"> มาฐานเอกรัฐ EPOXY</td>
						</tr>
						<tr>
							<td><input type="radio" name="color" id="color" value="พิเศษ" onclick="Checkcolor()"> พิเศษ 
							  <select name="color1" id="color1" disabled="disabled">
							    <option value=""> -
							      <?php
do {  
?>
						        </option>
							    <option value="<?php echo $row_specolor['specolorname']?>"><?php echo $row_specolor['specolorname']?></option>
							    <?php
} while ($row_specolor = mysql_fetch_assoc($specolor));
  $rows = mysql_num_rows($specolor);
  if($rows > 0) {
      mysql_data_seek($specolor, 0);
	  $row_specolor = mysql_fetch_assoc($specolor);
  }
?>
					        </select></td>
							<td>เฉดสี <input name="shade" id="shade" type="text" disabled="disabled" size="5"></td>
							<td>อื่นๆ<input name="otherColor" id="otherColor" type="text" disabled="disabled">  </td>
						</tr>
					</table>
					<!table3>
					<b>รายละเอียดสภาพแวดล้อม
                    <table>
		  <tr>
							<td><input type="checkbox" name="en[]" value="มีไอเกลือจากทะเล"> 
							มีไอเกลือจากทะเล</td>
							<td><input type="checkbox" name="en[]" value="มีฝุ่นมากในการติดตั้งใช้งาน"> มีฝุ่นมากในการติดตั้งใช้งาน</td>
							<td><input type="checkbox" name="en[]" value="มีไอสารเคมี"> มีไอสารเคมี</td>
							<td><input type="checkbox" name="en[]" value="มีการเคลื่อนย้ายบ่อยครั้ง"> มีการเคลื่อนย้ายบ่อยครั้ง</td>
							<td><input type="checkbox" name="en[]" id="en" value="อื่นๆ"> อื่นๆ <input name="otheren" id="otheren" type="text" disabled="disabled" size="20"></td>
						</tr>
					</table>
				</td>
			</tr>

<!row7 test>
			<tr>
				<td><center>7.TEST</td>
				<td>
					<table>
						<tr>
							<td colspan="2">1.ROUTINE TEST</td>
							<td><input type="radio" name="ROUTINE" value="IEC STANDARD" onclick="CheckROUTINE()"> IEC STANDARD</td>
							<td><input type="radio" name="ROUTINE" value="ANSI / IEEE STANDARD" onclick="CheckROUTINE()"> ANSI / IEEE STANDARD</td>
							<td><input type="radio" name="ROUTINE" id="ROUTINE" value="อื่นๆ" onclick="CheckROUTINE()"> อื่นๆ <input name="otherROUTINE" id="otherROUTINE" type="text" disabled="disabled" size="5"></td>
						</tr>
						<tr>
							<td colspan="2">2.TYPE TEST</td>
							<td colspan="2"><input type="checkbox" name="typetest1" id="typetest1" value="IMPULSE : FULL WAVE(HV / LV)"> IMPULSE : FULL WAVE(HV / LV)  <input name="HV7" id="HV7" type="text" disabled="disabled" size="5"> / <input name="LV7" id="LV7" type="text" disabled="disabled" size="5"></td>
							<td><input type="checkbox" name="typetest2" value="TEMP RISE"> TEMP RISE</td>
						</tr>
						<tr>
							<td colspan="2">3.OIL TEST</td>
							<td> <input type="checkbox" name="oiltest[]" value="DGA"> DGA</td>
							<td> <input type="checkbox" name="oiltest[]" value="BREAK DOWN VOLTAGE"> BREAK DOWN VOLTAGE</td>
							<td> <input type="checkbox" name="oiltest[]" value="WATER CONTENT"> WATER CONTENT</td>
						</tr>
						<tr>
							<td colspan="2">4.POWER FACTOR</td>
							<td> <input type="checkbox" name="POWER" value="ทดสอบ"> ทดสอบ</td>
						</tr>
						<tr>
							<td colspan="2">5.PARTIAL DISCHARGE (ภายนอก)</td>
							<td> <input type="checkbox" name="PARTIAL[]" value="ทดสอบ"> ทดสอบ</td>
							<td> <input type="checkbox" name="PARTIAL[]" value="REPORT"> REPORT</td>
						</tr>
						<tr>
							<td colspan="2">6.SOUND LEVEL TEST (1 วัน)</td>
							<td> <input type="checkbox" name="SOUND[]" value="ทดสอบ"> ทดสอบ</td>
							<td> <input type="checkbox" name="SOUND[]" value="REPORT"> REPORT</td>
						</tr>
						<tr>
							<td colspan="2">7.การทดสอบรั่วซึม (1 วัน)</td>
							<td> <input type="checkbox" name="leak[]" value="ทดสอบ"> ทดสอบ</td>
							<td> <input type="checkbox" name="leak[]" value="REPORT"> REPORT</td>
						</tr>
						<tr>
							<td colspan="2">8.การทด VIBRATION (1 วัน)</td>
							<td> <input type="checkbox" name="VIBRATION[]" value="ทดสอบ"> ทดสอบ</td>
							<td> <input type="checkbox" name="VIBRATION[]" value="REPORT"> REPORT</td>
						</tr>
						<tr>
							<td colspan="2">9.DGA TEST</td>
							<td> <input type="checkbox" name="DGA[]" value="DGA ก่อนทดสอบ"> DGA ก่อนทดสอบ</td>
							<td> <input type="checkbox" name="DGA[]" value="DGA หลังทดสอบ"> DGA หลังทดสอบ </td>
						</tr>
					</table>
				</td>
			</tr>

<!row8 packing>
			<tr>
				<td><center>8.PACKING</td>
				<td>
					<fieldset><legend><b>ลักษณะบรรจุภัณฑ์</b></legend>
						<table>
							<tr>
								<td>1. <input type="radio" name="pack" value="ลังไม้"> ลังไม้</td>
								<td> <input type="radio" name="pack" value="ลังเหล็ก"> ลังเหล็ก</td>
								<td> <input type="radio" name="pack" value="พาเลท"> พาเลท</td>
							</tr>
							<tr>
								<td>2. <input type="radio" name="set8" value="COMPLETE SET" onclick="Checkset8()"> COMPLETE SET</td>
							</tr>
							<tr>
								<td><input type="radio" name="set8" id="set8" value="แยกชิ้นส่วนประกอบ" onclick="Checkset8()">  แยกชิ้นส่วนประกอบ</td>
							</tr>
							<tr>
								<td></td>
								<td colspan="2"><input name="set8_1" id="set8_1" type="text" disabled="disabled" size="30"></td>
							</tr>
							<tr>
								<td></td>
								<td colspan="2"><input name="set8_2" id="set8_2" type="text" disabled="disabled" size="30"></td>
							</tr>
						</table>
					</fieldset>
				</td>
			</tr>

<!row9 transport>
			<tr>
				<td>9.TRANSPORT</td>
				<td>
					<table>
						<tr>
							<td>1.</td>
							<td><input type="radio" name="transport" id="transport1" value="ในประเทศ" onclick="Checktransport1()"> ในประเทศ <input name="transportin" id="transportin" type="text" disabled="disabled" size="10"></td>
							<td><input type="radio" name="transport" id="transport2" value="ต่างประเทศ" onclick="Checktransport1()"> ต่างประเทศ <input name="transportout" id="transportout" type="text" disabled="disabled" size="10"></td>
						</tr>
						<tr>
							<td>2.</td>
							<td><input type="radio" name="car" id="car" value="ทางรถยนต์" onclick="Checkcar()"> ทางรถยนต์ <select name="road" id="road" disabled="disabled">
							  <option value="">กรุณาเลือก</option>
							  <?php
do {  
?>
							  <option value="<?php echo $row_road['roadname']?>"><?php echo $row_road['roadname']?></option>
							  <?php
} while ($row_road = mysql_fetch_assoc($road));
  $rows = mysql_num_rows($road);
  if($rows > 0) {
      mysql_data_seek($road, 0);
	  $row_road = mysql_fetch_assoc($road);
  }
?>
                            </select></td>
							<td><input type="radio" name="car" value="ทางเรือ" onclick="Checkcar()"> ทางเรือ</td>
						</tr>
						<tr>
							<td>3.Transportation test</td>
							<td><input type="checkbox" name="ttest[]" value="ทดสอบ"> ทดสอบ </td>
							<td><input type="checkbox" name="ttest[]" value="REPORT"> REPORT </td>
						</tr>
						<tr>
							<td>4.SHOCK RECORDER</td>
							<td><input type="radio" name="SHOCK" value="ONE WAY"> ONE WAY</td>
							<td><input type="radio" name="SHOCK" value="RETURN"> RETURN</td>
						</tr>
					</table>
				</td>
			</tr>

<!row10 etc>
			<tr>
				<td><center>10.ETC.</td>
				<td>
					<table>
						<tr>
							<td>1.วัศดุของลูกค้าส่งให้ประกอบ / ผลิต</td>
							<td> <input type="radio" name="mat" id="mat1"value="ไม่มี" onclick="Checkmat()"> ไม่มี</td>
							<td><input type="radio" name="mat" id="mat2" value="มี" onclick="Checkmat()"> มี <input name="othermat" id="othermat" type="text" disabled="disabled" size="20"></td>
						</tr>
						<tr>
							<td colspan="2">2.จำนวนที่ต้องการ <input type="text" name="many" size="5"></td>
							<td>กำหนดส่งประมาณวันที่ <a href="javascript:displayDatePicker('date10')"><input name="date10" size="10" placeholder="วัน/เดือน/ปี"></a><br> หรือภายใน <input type="text" name="date10_1" size="5"> วัน (นับจาก S/O รวมวันหยุด)</td>
						</tr>
						<tr>
							<td colspan="2"> 3.ลูกค้าต้องการ SPARE PARTS</td>
							<td><input type="text" name="SPARE" size="100%"></td>
						</tr>
						<tr>
							<td>4.ได้ขอแบบเสนอลูกค้ามาด้วยเลขที่</td>
							<td><input type="text" name="presentno" size="10"></td>
							<td>5.มีเอกสารแนบ <input type="text" name="doc" size="5"> แผ่น</td>
						</tr>
						<tr>
							<td colspan="3">6.ข้อมูลอื่นๆ <input type="text" name="other10" size="100%"></td>
						</tr>
					</table>
				</td>
			</tr>

<!row11 approve>
			<tr>
				<td><center>11.APPROVE</td>
				<td>
					1.<input type="checkbox" name="approve1" value="√"> ลูกค้าไม่ต้องการ APPROVE แบบก่อนผลิต <br>
					2.<input type="checkbox" name="approve2" id="approve2" value="√"> ลูกค้าต้องการ APPROVE ในวันที่<a href="javascript:displayDatePicker('wantDate')"><input name="wantDate" id="wantDate" disabled="disabled" placeholder="วัน/เดือน/ปี" size="10"></a> และแจ้งให้ฝ่ายวิศวกรรมภายใน <input name="TellDate" id="TellDate" type="text" disabled="disabled" size="5"> วัน หลังจากได้รับแบบ <br>
					3.<input type="checkbox" name="approve3" value="√"> ไม่เคยส่ง PRELIMINARY ให้ลูกค้า <br>
					4.<input type="checkbox" name="approve4" id="approve4" value="√"> เคยส่งแบบ PREMINARY เสนอลูกค้า และแนบมาด้วย (เลขที่ <input name="present" id="present" type="text" disabled="disabled" size="20">) <br>
					5.<input type="checkbox" name="approve5" value="√"> OVER ALL DIMENSION (มีผลต่อการออกแบบ ต้องสรุปก่อน) <br>
					6.<input type="checkbox" name="approve6" value="√"> ฐาน ,ขนาดฐาน ,ระยะฐานหม้อแปลง <br>
					7.<input type="checkbox" name="approve7" value="√"> ระยะ BOX และ BUSDUCT <br>
					8.<input type="checkbox" name="approve8" id="approve8" value="√"> ตำแหน่ง ,จุดติดตั้งอุปกรณ์ได้แก่ <input name="position" id="position" type="text" disabled="disabled" size="20"> (มีผลต่อการออกแบบต้องสรุปก่อน) <br>
					9.<input type="checkbox" name="approve9" value="√"> วงจร CONTROL <br>
				</td>
			</tr>

<!row12 forcost>
			<tr>
				<td><center><b>สำหรับสอบถามการผลิต</td>
				<td>
					<table border="1">
						<tr>
							<td>
								<p><b>สำหรับสอบถามการผลิต<br />
								</b>
								ITEM CODE 
								<input type="text" name="itemcode" id="itemcode" />
								<br />
                                <input type="radio" name="design" value="มีแบบแล้ว" />มีแบบแล้ว &nbsp&nbsp&nbsp&nbsp
                        <input type="radio" name="design" value="ออกแบบใหม่/ปรับปรุงแบบก่อนการผลิต" />ออกแบบใหม่/ปรับปรุงแบบก่อนการผลิต <br />
                        ลักษณะการออกแบบ &nbsp&nbsp
                        <input type="radio" name="percent" value="25%" />25% &nbsp&nbsp
                        <input type="radio" name="percent" value="50%" />50% &nbsp&nbsp
                        <input type="radio" name="percent" value="75%" />75% &nbsp&nbsp
                        <input type="radio" name="percent" value="100%" />100% &nbsp&nbsp <br />
                        ผส.วิศวกรรม &nbsp
                        <input type="text" name="engineer" size="10" />
                        <input type="text" name="day0" placeholder="วัน/เดือน/ปี"/>
                        <br />
                        <input type="checkbox" name="time1" value="√" />ใช้เวลาในการออกแบบใหม่ / ปรับปรุงแบบ
                        <input type="text" name="day1" size="2" />วัน &nbsp &nbsp (ไม่รวมวันหยุด) เวลาคอย
                        <input type="text" name="day2" size="2" />วัน <br />
                        <input type="checkbox" name="time2" value="√" />ใช้เวลาทำแบบ และลูกค้า APPROVE แบบ
                        <input type="text" name="day3" size="2" />วัน <br />
                        หมายเหตุ <br />
                        <textarea name="comment7" cols="50" rows="4"></textarea>
                        <br />
                        ลงชื่อ
                        <input type="text" name="designer" size="15" />
                        <input type="text" name="designerdate" placeholder="วัน/เดือน/ปี"/>
                        <br />
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp(ผส.ออกแบบ) <br />
                        ลงชื่อ
                        <input type="text" name="eng3" size="15" />
                        <input type="text" name="engdate3" placeholder="วัน/เดือน/ปี"/>
                        <br />
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp(ผส.วิศวกรรม) <br>
                                                      </p></td>
                                                    <td><b>สำหรับฝ่ายวางแผนการผลิต</b><br />
                        1.ใช้เวลาในการสั่งซื้อวัตถุดิบลวด ,เหล็กซิลิคอน
                          <input type="text" name="orderTime" size="2" />วัน <br />
                        2.ใช้เวลาผลิต
                        <input type="text" name="produce1" size="2" />วัน <br />
                        3.ใช้เวลาในการทดสอบพิเศษ
                        <input type="text" name="spetest" size="2" />วัน <br />
                        4.ใช้เวลาสั่งซื้อวัตถุดิบพิเศษ (อุปกรณ์ต่างประเทศ)
                        <input type="text" name="forOrder" size="2" />วัน <br />
                        5.จากการตรวจสอบ CAPACITY และเงื่อนไขต่างๆสามารถผลิตได้ในระยะเวลา
                        <input type="text" name="produce2" size="2" />วัน (นับจากได้รับ S/O รวมวันหยุด) <br />
                        หมายเหตุ <br />
                        <textarea name="comment8" cols="50" rows="4"></textarea>
                        <br />
                        ลงชื่อ
                        <input type="text" name="designer2" size="15" />
                        <input type="text" name="designerdate2" placeholder="วัน/เดือน/ปี"/>
                        <br />
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp(ผู้เตรียม) <br />
                        ลงชื่อ
                        <input type="text" name="eng4" size="15" />
                        <input type="text" name="engdate4" placeholder="วัน/เดือน/ปี"/>
                        <br />
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp(หผ.วางแผนการผลิต) </td>
						</tr>
					</table>
				</td>
			</tr>
            
			<input type="hidden" name="MM_insert" value="costform" />

</form>
	</table>
	<br>
	<br>
	<input class="button button5" type="submit" style="width: 200px" name="submit" value="Submit" onKeyPress="return keyPressed(event)">
	<input class="button button5" type="reset" style="width: 200px" name="reset" value="Reset">

</body>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="https://www.goragod.com/ajax/gajax.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript">
// ฟังก์ชั่นเมื่อทำการเลือก select
var doSelChanged = function(event){
  // ค่าที่ได้จากการเลือก select (เจ้าของ event)
  var val = GEvent.element(event).value;
  // alert(val); // ดูค่าที่เลือก
  // disabled input ที่ไม่ต้องการ
  if(val  ==  "DRY TYPE (CLASS H)"){
    $E('OIL1').disabled = true;
	$E('OIL2').disabled = true;
	$E('OIL3').disabled = true;
	$E('OIL4').disabled = true;
	$E('OIL').disabled = true;
	$E('fin').disabled = true;
  }else if(val == "CAST RESIN"){
    $E('OIL1').disabled = true;
    $E('OIL2').disabled = true;
	$E('OIL3').disabled = true;
	$E('OIL4').disabled = true;
	$E('OIL').disabled = true;
	$E('fin').disabled = true;
  }
  else if(val == "FULLY WITH OIL"){
    $E('OIL1').disabled = false;
    $E('OIL2').disabled = false;
	$E('OIL3').disabled = false;
	$E('OIL4').disabled = false;
	$E('OIL').disabled = false;
	$E('fin').disabled = false;
  }
  else if(val == "CONSERVATOR"){
    $E('OIL1').disabled = false;
    $E('OIL2').disabled = false;
	$E('OIL3').disabled = false;
	$E('OIL4').disabled = false;
	$E('OIL').disabled = false;
	$E('fin').disabled = false;
  }
  else if(val == "N2 GAS SEALED"){
    $E('OIL1').disabled = false;
    $E('OIL2').disabled = false;
	$E('OIL3').disabled = false;
	$E('OIL4').disabled = false;
	$E('OIL').disabled = false;
	$E('fin').disabled = false;
  }
  else if(val == "PAD MOUNTED"){
    $E('OIL1').disabled = false;
    $E('OIL2').disabled = false;
	$E('OIL3').disabled = false;
	$E('OIL4').disabled = false;
	$E('OIL').disabled = false;
	$E('fin').disabled = false;
  }
};
// กำหนด event ให้กับ select
$G('typeTransfrom').addEvent('change', doSelChanged);
</script>
<script type="text/javascript">
$(document).ready(function(){

	$("#kva").change(function(){
			$.ajax({ 
				url: "standardaccess.php" ,
				type: "POST",
				data: {kva:$("#kva").val(),typeTransfrom:$("select#typeTransfrom").val()}
			})
			.success(function(result) { 

				var obj = jQuery.parseJSON(result);
				
						  $.each(obj, function(key, inval) {

							   $("#akstandard").val(inval["standardaccess"]);
						  });
					
			});
		});
	});
</script>
<script type="text/javascript">
$(document).ready(function(){

	$("select#typeTransfrom").change(function(){
			$.ajax({ 
				url: "standardaccess.php" ,
				type: "POST",
				data: {kva:$("#kva").val(),typeTransfrom:$("select#typeTransfrom").val()}
			})
			.success(function(result) { 

				var obj = jQuery.parseJSON(result);
				
						  $.each(obj, function(key, inval) {

							   $("#akstandard").val(inval["standardaccess"]);
						  });
					
			});
		});
	});
</script>
    
<script type="text/javascript">
    $(function () {
        $("#STANDARD2").click(function () {
            if ($("#STANDARD2").is(":checked")) {
                $("#accessories1").removeAttr("disabled");
				$("#value1").removeAttr("disabled");
				$("#comment1").removeAttr("disabled");
				$("#accessories2").removeAttr("disabled");
				$("#value2").removeAttr("disabled");
				$("#comment2").removeAttr("disabled");
				$("#accessories3").removeAttr("disabled");
				$("#value3").removeAttr("disabled");
				$("#comment3").removeAttr("disabled");
				$("#accessories4").removeAttr("disabled");
				$("#value4").removeAttr("disabled");
				$("#comment4").removeAttr("disabled");
				$("#accessories5").removeAttr("disabled");
				$("#value5").removeAttr("disabled");
				$("#comment5").removeAttr("disabled");
				$("#accessories6").removeAttr("disabled");
				$("#value6").removeAttr("disabled");
				$("#comment6").removeAttr("disabled");
				$("#otherAcc").removeAttr("disabled");
                
            } else {
                $("#accessories1").attr("disabled", "disabled");
				$("#value1").attr("disabled", "disabled");
				$("#comment1").attr("disabled", "disabled");
				$("#accessories2").attr("disabled", "disabled");
				$("#value2").attr("disabled", "disabled");
				$("#comment2").attr("disabled", "disabled");
				$("#accessories3").attr("disabled", "disabled");
				$("#value3").attr("disabled", "disabled");
				$("#comment3").attr("disabled", "disabled");
				$("#accessories4").attr("disabled", "disabled");
				$("#value4").attr("disabled", "disabled");
				$("#comment4").attr("disabled", "disabled");
				$("#accessories5").attr("disabled", "disabled");
				$("#value5").attr("disabled", "disabled");
				$("#comment5").attr("disabled", "disabled");
				$("#accessories6").attr("disabled", "disabled");
				$("#value6").attr("disabled", "disabled");
				$("#comment6").attr("disabled", "disabled");
				$("#otherAcc").attr("disabled", "disabled");
            }
        });
    });
</script>
<script type="text/javascript">
	$(function () {
        $("#REFFERENCE1").click(function () {
            if ($("#REFFERENCE1").is(":checked")) {
                $("#so").removeAttr("disabled");
				
                
            } else {
                $("#so").attr("disabled", "disabled");
				
            }
        });
    });
	$(function () {
        $("#REFFERENCE2").click(function () {
            if ($("#REFFERENCE2").is(":checked")) {
                $("#refno").removeAttr("disabled");
				
                
            } else {
                $("#refno").attr("disabled", "disabled");
				
            }
        });
    });
    
	$(function () {
        $("#en").click(function () {
            if ($("#en").is(":checked")) {
                $("#otheren").removeAttr("disabled");
				
                
            } else {
                $("#otheren").attr("disabled", "disabled");
				
            }

        });
    });

	$(function () {
        $("#typetest1").click(function () {
            if ($("#typetest1").is(":checked")) {
                $("#HV7").removeAttr("disabled");
				$("#LV7").removeAttr("disabled");
                
            } else {
                $("#HV7").attr("disabled", "disabled");
				$("#LV7").attr("disabled", "disabled");
				
            }
        });
    });

	$(function () {
        $("#approve2").click(function () {
            if ($("#approve2").is(":checked")) {
                $("#wantDate").removeAttr("disabled");
                $("#TellDate").removeAttr("disabled");
            } else {
                $("#wantDate").attr("disabled", "disabled");
				$("#TellDate").attr("disabled", "disabled");
            }
        });
    });
	$(function () {
        $("#approve4").click(function () {
            if ($("#approve4").is(":checked")) {
                $("#present").removeAttr("disabled");
                
            } else {
                $("#present").attr("disabled", "disabled");
				
            }
        });
    });
	$(function () {
        $("#approve8").click(function () {
            if ($("#approve8").is(":checked")) {
                $("#position").removeAttr("disabled");
                
            } else {
                $("#position").attr("disabled", "disabled");
				
            }
        });
    });
</script>
<script language='javascript'>
 function CheckTOLERANCE()
 {
  if(document.getElementById('TOLERANCE').checked )
 {
        document.getElementById('otherTolerance1').disabled=false; 
   }else{
                    document.getElementById('otherTolerance1').disabled = true;
                }
 }
  function Checkt()
 {
  if(document.getElementById('t').checked )
 {
        document.getElementById('otherTolerance2').disabled=false; 
   }else{
                    document.getElementById('otherTolerance2').disabled = true;
                }
 }
   function CheckOIL()
 {
  if(document.getElementById('OIL').checked )
 {
        document.getElementById('otherOIL').disabled=false; 
   }else{
                    document.getElementById('otherOIL').disabled = true;
                }
 }
   function Checkcolor()
 {
  if(document.getElementById('color').checked )
 {
        document.getElementById('color1').disabled=false; 
		document.getElementById('shade').disabled=false;
		document.getElementById('otherColor').disabled=false;
   }else{
        document.getElementById('color1').disabled=true; 
		document.getElementById('shade').disabled=true;
		document.getElementById('otherColor').disabled=true;
                }
 }
    function CheckROUTINE()
 {
  if(document.getElementById('ROUTINE').checked )
 {
        document.getElementById('otherROUTINE').disabled=false; 
   }else{
                    document.getElementById('otherROUTINE').disabled = true;
                }
 }
    function Checkset8()
 {
  if(document.getElementById('set8').checked )
 {
        document.getElementById('set8_1').disabled=false; 
		document.getElementById('set8_2').disabled=false; 
   }else{
        document.getElementById('set8_1').disabled=true; 
		document.getElementById('set8_2').disabled=true;
                }
 }
  function Checktransport1()
 {
  if(document.getElementById('transport1').checked )
 {
        document.getElementById('transportin').disabled=false;
		document.getElementById('transportout').disabled = true; 
   }else if(document.getElementById('transport2').checked ){
                    document.getElementById('transportin').disabled = true;
					document.getElementById('transportout').disabled = false;
                }
 }
   function Checkcar()
 {
  if(document.getElementById('car').checked )
 {

        document.getElementById('road').disabled=false; 
   }else{
                    document.getElementById('road').disabled = true;
                }
 }
 function Checkmat()
 {
  if(document.getElementById('mat2').checked )
 {

        document.getElementById('othermat').disabled=false; 
   }else{
                    document.getElementById('othermat').disabled = true;
                }
 }
</script>
<script type="text/javascript">
$(function(){
     
    
     $("select#accessories1").change(function(){  
             $.post("listbox1.php",{
             acc1:"acc1",
             accessories1:$("#accessories1").val()
  
         },function(data){ 
                $("select#accessories2").html(data);  
				$("select#accessories2").trigger("change"); 
         });
         
    });
    });
$(function(){

     $("select#accessories2").change(function(){
         $.post("listbox1.php",{
             acc2:"acc2",
             accessories1:$("#accessories1").val(),
             accessories2:$("#accessories2").val()

         },function(data){ 
                $("select#accessories3").html(data);  
				$("select#accessories3").trigger("change"); 
         });
         
    });
});
$(function(){
     $("select#accessories3").change(function(){  
         $.post("listbox1.php",{
             acc3:"acc3",
             accessories1:$("#accessories1").val(),
             accessories2:$("#accessories2").val(),
             accessories3:$("#accessories3").val()
         },function(data){ 
                $("select#accessories4").html(data);  
				$("select#accessories4").trigger("change"); 
         });
         
    });
	});
$(function(){
     $("select#accessories4").change(function(){  
         $.post("listbox1.php",{
             acc4:"acc4",
             accessories1:$("#accessories1").val(),
             accessories2:$("#accessories2").val(),
             accessories3:$("#accessories3").val(),
             accessories4:$("#accessories4").val()
         },function(data){ 
                $("select#accessories5").html(data);  
				$("select#accessories5").trigger("change"); 
         });
         
    });
	});
$(function(){
     $("select#accessories5").change(function(){  
         $.post("listbox1.php",{
             acc5:"acc5",
             accessories1:$("#accessories1").val(),
             accessories2:$("#accessories2").val(),
             accessories3:$("#accessories3").val(),
             accessories4:$("#accessories4").val(),
             accessories5:$("#accessories5").val()
         },function(data){
                $("select#accessories6").html(data); 
				$("select#accessories6").trigger("change"); 
         });

    });    
     
});
</script>

</html>
<?php
mysql_free_result($accessory);

mysql_free_result($leader);

mysql_free_result($loadingtype);

mysql_free_result($fishtale);

mysql_free_result($talefish);

mysql_free_result($onload);

mysql_free_result($otheronload);

mysql_free_result($specolor);

mysql_free_result($road);

mysql_free_result($typetransform);

mysql_free_result($technicial);

mysql_free_result($loadtap);

?>