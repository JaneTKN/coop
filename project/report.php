<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REPORT</title>
</head>

<body>
<?php
	$formtype = $_GET['formtype'];
	$noid = $_GET['noid'];
	switch ($formtype) {
		case 'แบบสอบถามราคาต้นทุน':?>
			<script>
				window.location = "costReport.php?formtype=<?php echo $formtype; ?>&noid=<?php echo $noid; ?>";
			</script>
			<?php break;
		case 'แบบสอบถามการผลิต':?>
			<script>
				window.location = "produceReport.php?formtype=<?php echo $formtype; ?>&noid=<?php echo $noid; ?>";
			</script>
			<?php break;
	}
?>
</body>
</html>