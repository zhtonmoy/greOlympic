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

<html>
 <head>
  <title> Account verification Form </title>
  
 </head>

 <body>
          <h4><p>Please Verify your account before login:</br>
		  <p></p>
		  <form method="post" action="user_verification.php">

		  <p><label>
		  <?php 
		  if(isset($_SESSION['v_c'])){
		  $_SESSION['v_c']=0 ;
		  echo 'Your account is not verified yet. Type right verification code:';
		  } else{
		  echo 'Please type or paste the verification code in the text box:';
		  
		  }
		  ?>
                  <input name="ver_code" type="text" size="6"
                     maxlength="6" />
               </label></p>
			
			<p>
			<input type="submit" value="Go" />
               <input type="reset" value="Clear" />
			</p>


		  </form>

</h4></p>

  
 </body>
</html>
<?php include 'bottom_cont.php';?>
