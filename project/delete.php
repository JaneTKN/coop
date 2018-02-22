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

if ((isset($_GET['accname'])) && ($_GET['accname'] != "")) {
  $deleteSQL = sprintf("DELETE FROM accessorytool WHERE accname=%s",
                       GetSQLValueString($_GET['accname'], "text"));

  mysql_select_db($database_dbconnect, $dbconnect);
  $Result1 = mysql_query($deleteSQL, $dbconnect) or die(mysql_error());

  $deleteGoTo = "addAccess.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

if ((isset($_GET['typetransformname'])) && ($_GET['typetransformname'] != "")) {
  $deleteSQL = sprintf("DELETE FROM typetransform WHERE typetransformname=%s",
                       GetSQLValueString($_GET['typetransformname'], "text"));

  mysql_select_db($database_dbconnect, $dbconnect);
  $Result1 = mysql_query($deleteSQL, $dbconnect) or die(mysql_error());

  $deleteGoTo = "addTypetransform.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

if ((isset($_GET['specolorname'])) && ($_GET['specolorname'] != "")) {
  $deleteSQL = sprintf("DELETE FROM specolor WHERE specolorname=%s",
                       GetSQLValueString($_GET['specolorname'], "text"));

  mysql_select_db($database_dbconnect, $dbconnect);
  $Result1 = mysql_query($deleteSQL, $dbconnect) or die(mysql_error());

  $deleteGoTo = "addColor.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

if ((isset($_GET['technicialname'])) && ($_GET['technicialname'] != "")) {
  $deleteSQL = sprintf("DELETE FROM technicial WHERE technicialname=%s",
                       GetSQLValueString($_GET['technicialname'], "text"));

  mysql_select_db($database_dbconnect, $dbconnect);
  $Result1 = mysql_query($deleteSQL, $dbconnect) or die(mysql_error());

  $deleteGoTo = "addTechnical.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

if ((isset($_GET['loadtapname'])) && ($_GET['loadtapname'] != "")) {
  $deleteSQL = sprintf("DELETE FROM loadtap WHERE loadtapname=%s",
                       GetSQLValueString($_GET['loadtapname'], "text"));

  mysql_select_db($database_dbconnect, $dbconnect);
  $Result1 = mysql_query($deleteSQL, $dbconnect) or die(mysql_error());

  $deleteGoTo = "addLoadtap.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

if ((isset($_GET['leadername'])) && ($_GET['leadername'] != "")) {
  $deleteSQL = sprintf("DELETE FROM leader WHERE leadername=%s",
                       GetSQLValueString($_GET['leadername'], "text"));

  mysql_select_db($database_dbconnect, $dbconnect);
  $Result1 = mysql_query($deleteSQL, $dbconnect) or die(mysql_error());

  $deleteGoTo = "addLeader.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

if ((isset($_GET['loadingtypename'])) && ($_GET['loadingtypename'] != "")) {
  $deleteSQL = sprintf("DELETE FROM loadingtype WHERE loadingtypename=%s",
                       GetSQLValueString($_GET['loadingtypename'], "text"));

  mysql_select_db($database_dbconnect, $dbconnect);
  $Result1 = mysql_query($deleteSQL, $dbconnect) or die(mysql_error());

  $deleteGoTo = "addLoadingtype.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

if ((isset($_GET['roadname'])) && ($_GET['roadname'] != "")) {
  $deleteSQL = sprintf("DELETE FROM road WHERE roadname=%s",
                       GetSQLValueString($_GET['roadname'], "text"));

  mysql_select_db($database_dbconnect, $dbconnect);
  $Result1 = mysql_query($deleteSQL, $dbconnect) or die(mysql_error());

  $deleteGoTo = "addRoad.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

if ((isset($_GET['onloadname'])) && ($_GET['onloadname'] != "")) {
  $deleteSQL = sprintf("DELETE FROM onload WHERE onloadname=%s",
                       GetSQLValueString($_GET['onloadname'], "text"));

  mysql_select_db($database_dbconnect, $dbconnect);
  $Result1 = mysql_query($deleteSQL, $dbconnect) or die(mysql_error());

  $deleteGoTo = "addOnload.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

if ((isset($_GET['otheronloadname'])) && ($_GET['otheronloadname'] != "")) {
  $deleteSQL = sprintf("DELETE FROM otheronload WHERE otheronloadname=%s",
                       GetSQLValueString($_GET['otheronloadname'], "text"));

  mysql_select_db($database_dbconnect, $dbconnect);
  $Result1 = mysql_query($deleteSQL, $dbconnect) or die(mysql_error());

  $deleteGoTo = "addOther.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

if ((isset($_GET['fishtalename'])) && ($_GET['fishtalename'] != "")) {
  $deleteSQL = sprintf("DELETE FROM fishtale WHERE fishtalename=%s",
                       GetSQLValueString($_GET['fishtalename'], "text"));

  mysql_select_db($database_dbconnect, $dbconnect);
  $Result1 = mysql_query($deleteSQL, $dbconnect) or die(mysql_error());

  $deleteGoTo = "addFishtail.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

if ((isset($_GET['talefishname'])) && ($_GET['talefishname'] != "")) {
  $deleteSQL = sprintf("DELETE FROM talefish WHERE talefishname=%s",
                       GetSQLValueString($_GET['talefishname'], "text"));

  mysql_select_db($database_dbconnect, $dbconnect);
  $Result1 = mysql_query($deleteSQL, $dbconnect) or die(mysql_error());

  $deleteGoTo = "addFishtail.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

if ((isset($_GET['NoidNo'])) && ($_GET['NoidNo'] != "")) {
  $deleteSQL = sprintf("DELETE FROM noid WHERE NoidNo=%s",
                       GetSQLValueString($_GET['NoidNo'], "text"));

  mysql_select_db($database_dbconnect, $dbconnect);
  $Result1 = mysql_query($deleteSQL, $dbconnect) or die(mysql_error());

  $deleteGoTo = "search.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DELETE</title>
</head>

<body>
</body>
</html>