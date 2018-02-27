<?php require_once('Connections/dbconnect.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>standard</title>
</head>

<body>
<?php
$kva = $_POST["key"];
$q="SELECT standardaccess FROM standardaccessories WHERE transformerrate = '$kva'";
$qr=mysql_query($q);
?>
</body>
</html>