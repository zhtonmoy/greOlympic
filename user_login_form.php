<?php
include 'topMenu.php';
session_start( );
?>

<?xml version="1.0"?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    
    <!-- Fig. 5.3: form.html   -->
    <!-- Form Design Example 1 -->
    
    <html xmlns="http://www.w3.org/1999/xhtml">
<?php 
if(!isset($_SESSION['U_N_F']) and !isset($_SESSION['v_c'])  ){
echo 'Please Login:';
}//else if(isset($_SESSION['U_N_F'] )){
//echo 'Invalid password or user name!!!  Please input a valid user name and password';
//}
?>
		  <html>
		  <head></head>
          <body>

		  <p><br/>
<h4>Please input your Username and Password:<br/>
		  <form method="post" action="user_login.php">
		  <p><label>User Name:
                  <input name="user_name" type="text" size="40"
                     maxlength="40" />
               </label></p>
			<p><label>Password:
                  <input name="user_password" type="password" size="10"
                     maxlength="10" />
               </label></p>
			   <input name="submitted" type="hidden" value="true" />
			
			<p>
			<input type="submit" value="Go" />
               <input type="reset" value="Clear" />
			</p>


		  </form>
</h4></p>
  
 </body>
</html>
<?php include 'bottom_cont.php';?>