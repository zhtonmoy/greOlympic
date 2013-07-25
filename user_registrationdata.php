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
 
 define('DB_NAME','mdb_bm340');
 define('DB_USER','bm340');
 define('DB_PASSWORD','reardp9F');
 define('DB_HOST','mysql.cms.gre.ac.uk');
 $link =mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
 if(!$link){
 die('Couldn\'t connect' .mysql_error());
 }

 $db_selected=mysql_select_db(DB_NAME,$link);
 if(!$db_selected){
 die('Can\'t use' .DB_NAME. ':' .mysql_error());
 }
 $user_name=$_POST['user_name'];
 $password=$_POST['user_password'];
 //$password = 'my password';

 $email=$_POST['user_email'];
 $post_code=$_POST['user_post_code'];
 if(($user_name=="")||($password=="")||($email=="")||($post_code=="")){
	
	echo 'Data input error!!!  Please input data for all of the fields..';
 }else{
	
//$key = 'SuperSecretKey';
//To Encrypt:
$encrypted = md5($_POST['user_password']);//mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $password, MCRYPT_MODE_ECB);
//$decrypted = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $encrypted, MCRYPT_MODE_ECB);
$account_verified=false;
 $ver_code=$random = substr(number_format(time() * rand(),0,'',''),0,6);
 $sql="INSERT INTO user_registration (user_name,user_password,user_email,user_post_code,account_verified,ver_code) values ('$user_name','$encrypted','$email','$post_code','$account_verified','$ver_code')";

 if(!mysql_query($sql)){
	 echo 'Error inserting data into table'.mysql_error();
 }else{
		echo 'Data saved';
		//ini_set("SMTP", "smtp.wlink.com.np");
		//ini_set("sendmail_from", "zhtonmoy@yahoo.com");
		//ini_set("smtp_port", "25");
		
		$to = $email;
		$subject = "Please verify your account";
		$message = "To get access please click on the following link:\r\n \n htttp://www.stuweb.cms.gre.ac.uk/~bm340/user_verification.html and type this code ".$ver_code;
		$from = "zhtonmoy@yahoo.com";
		$headers = "From:" . $from;
		mail($to,$subject,$message,$headers);
		
		header('Location: user_verification_form.php');
	  }
 }
 //header('Location: ' . $_SERVER['HTTP_REFERER']);
 mysql_close();
?>
<br />
<button type="button" onclick="history.back();">Back</button>

</body>
</html>