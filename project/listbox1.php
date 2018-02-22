<?php require_once('Connections/dbconnect.php'); 
header("Content-type:text/html; charset=UTF-8");              
header("Cache-Control: no-store, no-cache, must-revalidate");             
header("Cache-Control: post-check=0, pre-check=0", false); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LISTBOX</title>
</head>

<body>
<?php
if ($_POST['acc1']=="acc1") {
  access1();
} elseif ($_POST['acc2']=="acc2") {
  access2();
}  elseif ($_POST['acc3']=="acc3") {
  access3();
}  elseif ($_POST['acc4']=="acc4") {
  access4();
}  elseif ($_POST['acc5']=="acc5") {
  access5();
} else{}

?>
<!เลือก1 ส่งค่าไป access2>
<?php 
function access1(){
if(isset($_POST['accessories1']) && $_POST['accessories1']!=""){?>
  <option value="">กรุณาเลือก</option>
<?php
$accessories1 = $_POST['accessories1'];
  $q="SELECT * FROM accessorytool WHERE accname !='$accessories1' ";
  $qr=mysql_query($q);
  while($rs=mysql_fetch_array($qr)){
  ?>
<option value="<?php echo $rs['accname']; ?>"> <?php echo $rs['accname']; ?></option>
  <?php } ?>
<?php }else{ ?>
<?php }} ?>


<!เลือก2 ส่งค่าไป access3>
<?php 
function access2(){
if(isset($_POST['accessories2']) && $_POST['accessories2']!=""){?>
  <option value="">กรุณาเลือก</option>
<?php
$accessories1 = $_POST['accessories1'];
$accessories2 = $_POST['accessories2'];
  $q="SELECT * FROM accessorytool WHERE accname != '$accessories1' AND accname != '$accessories2'";
  $qr=mysql_query($q);
  while($rs=mysql_fetch_array($qr)){
  ?>
<option value="<?php echo $rs['accname']; ?>"> <?php echo $rs['accname']; ?></option>
  <?php } ?>
<?php }else{ ?>
<?php } }?>


<!เลือก3 ส่งค่าไป access4>
<?php 
function access3(){
if(isset($_POST['accessories3']) && $_POST['accessories3']!=""){?>
  <option value="">กรุณาเลือก</option>
<?php
$accessories1 = $_POST['accessories1'];
$accessories2 = $_POST['accessories2'];
$accessories3 = $_POST['accessories3'];
  $q="SELECT * FROM accessorytool WHERE accname != '$accessories1' AND accname != '$accessories2' AND accname != '$accessories3' ";
  $qr=mysql_query($q);
  while($rs=mysql_fetch_array($qr)){
  ?>
<option value="<?php echo $rs['accname']; ?>"> <?php echo $rs['accname']; ?></option>
  <?php } ?>
<?php }else{ ?>
<?php } }?>


<!เลือก4 ส่งค่าไป access5>
<?php 
function access4(){
if(isset($_POST['accessories4']) && $_POST['accessories4']!=""){?>
  <option value="">กรุณาเลือก</option>
<?php
$accessories1 = $_POST['accessories1'];
$accessories2 = $_POST['accessories2'];
$accessories3 = $_POST['accessories3'];
$accessories4 = $_POST['accessories4'];
  $q="SELECT * FROM accessorytool WHERE accname != '$accessories1' AND accname != '$accessories2' AND accname != '$accessories3' AND accname != '$accessories4' ";
  $qr=mysql_query($q);
  while($rs=mysql_fetch_array($qr)){
  ?>
<option value="<?php echo $rs['accname']; ?>"> <?php echo $rs['accname']; ?></option>
  <?php } ?>
<?php }else{ ?>
<?php } }?>


<!เลือก5 ส่งค่าไป access6>
<?php 
function access5(){
if(isset($_POST['accessories5']) && $_POST['accessories5']!=""){?>
  <option value="">กรุณาเลือก</option>
<?php
$accessories1 = $_POST['accessories1'];
$accessories2 = $_POST['accessories2'];
$accessories3 = $_POST['accessories3'];
$accessories4 = $_POST['accessories4'];
$accessories5 = $_POST['accessories5'];
  $q="SELECT * FROM accessorytool WHERE accname != '$accessories1' AND accname != '$accessories2' AND accname != '$accessories3' AND accname != '$accessories4' AND accname != '$accessories5' ";
  $qr=mysql_query($q);
  while($rs=mysql_fetch_array($qr)){
  ?>
<option value="<?php echo $rs['accname']; ?>"> <?php echo $rs['accname']; ?></option>
  <?php } ?>
<?php }else{ ?>
  
<?php } }?>

</body>
</html>