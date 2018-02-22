
<?php
	$objConnect = mysql_connect("localhost","root","12345678") or die(mysql_error());
	$objDB = mysql_select_db("dbform");
	$typeTransfrom = $_POST['typeTransfrom'];
	$kva = $_POST["kva"];
	$strSQL = "SELECT standardaccess FROM standardaccessories WHERE transformerrate = '$kva' AND transformertype = '$typeTransfrom' ";
	$objQuery = mysql_query($strSQL) or die (mysql_error());
	$intNumField = mysql_num_fields($objQuery);
	$resultArray = array();
	while($obResult = mysql_fetch_array($objQuery))
	{
		$arrCol = array();
		for($i=0;$i<$intNumField;$i++)
		{
			$arrCol[mysql_field_name($objQuery,$i)] = $obResult[$i];
		}
		array_push($resultArray,$arrCol);
	}
	
	mysql_close($objConnect);
	
	echo json_encode($resultArray);
?>