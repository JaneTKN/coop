<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {  
  session_start();
}

if($_SESSION['username']!=''){} 

$loginFormAction = $_SERVER['PHP_SELF'];
require_once('Connections/dbconnect.php');  

if (isset($_POST['username'])) {
		
  $loginUsername=$_POST['username']; 
  $password=$_POST['password'];  
  mysql_select_db($database_dbconnect, $dbconnect);  
  $LoginRS__query="SELECT * FROM member WHERE member_user='$loginUsername' AND member_pass='$password' "; 
  $LoginRS = mysql_query($LoginRS__query, $dbconnect) or die(mysql_error());
  $loginrows = mysql_fetch_array($LoginRS);	
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
 
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}		
		
		$_SESSION['member_user'] = $loginrows['member_user']; // ตั้งค่า username ให้เป็นตัวแปร session
		$_SESSION['member_status'] = $loginrows['member_status'];        // สิทธิ์ในการเข้าถึงข้อมูลว่าจะให้เข้าถึงในระดับไหน
		
		      if($_SESSION['member_status'] == admin){ echo "<script> location='menu_admin.php' </script>" ;}
              elseif($_SESSION['member_status'] == user){echo "<script> location='menu_user.php' </script>";}
 	   }
 	else {
    	 }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LOGIN</title>
<style type="text/css">
body {
	background-color: #FFA07A;
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
input[type=password] {
    
    padding: 7px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid #d35256;
    border-radius: 4px;
}
</style>
</head>

<body>
<br />
<br />
<br />
<form id="form1" name="form1"  method="POST" onSubmit="return check();" action="<?php echo $loginFormAction; ?>">
    <table  width="262" height="157" border="1"  align="center">
      <tr>
        <td align="center"  bgcolor="#FFA07A"><h3><strong>เข้าสู่ระบบ</strong></h3></td>
      </tr>
      <tr>
        <td><label>
          <div align="center">User  name<br />
            <input  type="text" name="username" id="username" />
          </div>
        </label></td>
      </tr>
      <tr>
        <td  height="29"><label>
          <div align="center">Password<br />
            <input  type="password" name="password" id="password"  />
          </div>
        </label></td>
      </tr>
      <tr>
        <td  height="29"><label>
          <div align="center">
            <input  type="submit" name="btLogin" class="button button5" id="btLogin"  value="Login!" />
          </div>
        </label></td>
      </tr>
    </table>
</form>
<script language="JavaScript">
function check() {
if(document.form1.username.value=="") {
alert("กรุณากรอกชื่อที่ใช้ในการล็อกอินด้วยครับ") ;
document.form1.username.focus() ;
return false ;
}
else if(document.form1.password.value=="") {
alert("กรุณากรอกรหัสผ่านด้วยครับ") ;
document.form1.password.focus() ;
return false ;
}
else
return true ;

}
   </script>
</body>
</html>