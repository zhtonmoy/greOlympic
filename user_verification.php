<?xml version="1.0"?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    
    <!-- Fig. 5.3: form.html   -->
    <!-- Form Design Example 1 -->
    
    <html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head></head>
<body>
<?php
 session_start(); 
 
if (!isset($_SESSION['user_name'])&&!isset($_SESSION['user_password'])){ 
 header('Location: logout.php');
 
}
 include('connection.php');
 $ver_code=$_POST['ver_code'];
  //$sql="SELECT * FROM user_registration"; 
  $sql = "select * from user_registration where ver_code='" . $_POST['ver_code'] . "'";
 $result = mysql_query($sql);
 if(!$result){
	 echo 'Error reading data from  table'.mysql_error();
 }else{
		$info = mysql_fetch_array( $result );
		 
		    if(!$info){echo 'No Account Exist!!!';}
			if($info['ver_code']==$ver_code){
				mysql_query("UPDATE user_registration SET account_verified=1
				WHERE ver_code=$ver_code");
				header('Location: user_login_form.php');
				break;
			}else {echo 'Wrong Verification Code..';}
		//header('Location: user_verification.html');
		}
 
 //header('Location: ' . $_SERVER['HTTP_REFERER']);
 mysql_close();
?>
<br />
<button type="button" onclick="history.back();">Back</button>

</body>
</html>