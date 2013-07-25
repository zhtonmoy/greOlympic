<?php 
include 'topMenu.php';
?>
<?xml version="1.0"?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    
    <!-- Fig. 5.3: form.html   -->
    <!-- Form Design Example 1 -->
    
    <html xmlns="http://www.w3.org/1999/xhtml">
<html>
 <head>
  <title> New User Registration Form </title>
  
 </head>
 

 <body>
<p><br/>
<h4>Registration Form<br/>
		  <p>Please fill out this form to registered with Greenwich Olympic Accommodation Ltd.</p>
		  <form method="post" action="user_registrationdata.php">
		  <p><label>User Name:
                  <input name="user_name" type="text" size="25"
                     maxlength="40" />
               </label></p>
			<p><label>Password:&nbsp;&nbsp; 
                  <input name="user_password" type="password" size="10"
                     maxlength="10" />
               </label></p>
			<p><label>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input name="user_email" type="email" size="40"
                     maxlength="40" />
               </label></p>
			<p><label>Post Code:
                  <input name="user_post_code" type="text" size="10"
                     maxlength="10" />
               </label></p>
			<p>
			<input type="submit" value="Submit" />
               <input type="reset" value="Clear" />
			</p>


		  </form>
</h4></p>


  
 </body>
</html>
<?php
include 'bottom_cont.php';
?>