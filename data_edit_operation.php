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
 mysql_query("UPDATE customers_ads SET p_id='" . $_POST['p_id'] . "',p_loc='" . $_POST['p_loc'] . "',p_con='" . $_POST['p_con'] . "',p_rp='" . $_POST['p_rp'] . "', p_des='" . $_POST['p_des'] . "'
				WHERE p_id='" . $_POST['p_id'] . "'");
				$_SESSION['ed_in']=1;
				header('Location: advertisers_page.php');
 mysql_close();
?>
<br />
<button type="button" onclick="history.back();">Back</button>

</body>
</html>