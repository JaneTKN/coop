<?php if (!isset($_SESSION)) {  session_start(); }  
		require_once('Connections/dbconnect.php'); 
 ?>
<?php
mysql_select_db($database_dbconnect, $dbconnect);

if($_SESSION['member_status']==user){  
	
    $query_select = "SELECT * FROM member WHERE member_user='".$_SESSION['member_user']."'";     
}
else{	
  } 
$select = mysql_query($query_select, $dbconnect) or die(mysql_error());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MENU</title>
<style type="text/css">
<!--
A:link { text-decoration: none}
A:active { text-decoration: none}
A:visited { text-decoration: none} 
A:hover {text-decoration: none; color: #00769D}
-->
</style>
<style>
.menulines{
border:1px solid #eda496;
}

.menulines a{
text-decoration:none;
color:#993300;
}
body,td,th {
	font-family: "Comic Sans MS", cursive;
}
body {
	background-image: url();
	background-color: #eda496;
}
</style>

<script language="JavaScript1.2">
function borderize(what,color){
what.style.borderColor=color
}

function borderize_on(e){
if (document.all)
source3=event.srcElement
else if (document.getElementById)
source3=e.target
if (source3.className=="menulines"){
borderize(source3,"#ff3333")
}
else{
while(source3.tagName!="TABLE"){
source3=document.getElementById? source3.parentNode : source3.parentElement
if (source3.className=="menulines")
borderize(source3,"#ff3333")
}
}
}

function borderize_off(e){
if (document.all)
source4=event.srcElement
else if (document.getElementById)
source4=e.target
if (source4.className=="menulines")
borderize(source4,"#eda496")
else{
while(source4.tagName!="TABLE"){
source4=document.getElementById? source4.parentNode : source4.parentElement
if (source4.className=="menulines")
borderize(source4,"#eda496")
}
}
}

</script>
</head>

<body>
<p>&nbsp;</p>
<?php $row_select = mysql_fetch_assoc($select) ?>
<p>WELCOME : <?php echo $row_select['member_name']; ?></p>
<table onMouseover="borderize_on(event)" onMouseout="borderize_off(event)" align=center width=100%>
<tr>
	<td class="menulines" width="16%"> <center>
        <div align="center"><a href="https://www.ekarat-transformer.com" target="fbody">HOME</a></div></td>
<tr>
	<td class="menulines" width="16%"> 
    <div align="center"><a href="costForm.php" target="_blank">แบบสอบถามราคาต้นทุน</a></div></td>
</tr>
<tr>
	<td class="menulines" width="16%"> 
    <div align="center"><a href="produceForm.php" target="_blank">แบบสอบถามการผลิต</a></div></td>
</tr>
<tr>
	<td class="menulines" width="16%"> 
    <div align="center"><a href="search_user.php" target="fbody">ค้นหาแบบสอบถาม</a></div></td>
</tr>

<tr>

	<td width="16%"> 
    
      <br />
      <li class="menulines"><a href="logout.php" target="_parent" >LOGOUT</a></li>
    </td>
</table>
    

</body>
</html>