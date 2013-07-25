<?xml version="1.0"?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    
    <!-- Fig. 5.3: form.html   -->
    <!-- Form Design Example 1 -->
    
    <html xmlns="http://www.w3.org/1999/xhtml">
<!--<html>
<head></head>
<body>
<h1>Please Login:</h1>
		  <p></p>
		  <form method="post" action="user_login.php">
		  <p><label>User Name:
                  <input name="user_name" type="text" size="40"
                     maxlength="40" />
               </label></p>
			<p><label>Password:
                  <input name="user_password" type="text" size="10"
                     maxlength="10" />
               </label></p>
			   <input name="submitted" type="hidden" value="true" />
			
			<p>
			<input type="submit" value="Go" />
               <input type="reset" value="Clear" />
			</p>


		  </form>-->
		  <?php
		  session_start();
		  $_SESSION['v_c']=0;
		  $_SESSION['u_p']=0;
		  $_SESSION['U_N_F']=0;
		  $_SESSION['ad_in']=0;
		  $_SESSION['ed_in']=0;
		  $_SESSION['image_del']=0;
		  $_SESSION['image_in']=0;
		  if(isset($_POST['submitted'])){
		  include('connection.php');
		  $u_n=$_POST['user_name'];
		  $pw=md5($_POST['user_password']);		  
		  $sql = "select * from user_registration where user_name='" . $_POST['user_name'] . "' and user_password='" . $pw . "'";
		  $res=mysql_query($sql);
		  $row=mysql_fetch_array($res);
		  //echo $row['user_name'];
		  if($row){
				//echo $row['account_verified'];
				if(($row['user_name']==$u_n) and ($row['user_password']==$pw) and $row['account_verified']==1){
				$_SESSION['user_name'] = "$u_n";
				$_SESSION['user_password']="$pw";
				header('Location: advertisers_page.php');
				}
				else if(($row['user_name']==$u_n) and ($row['user_password']==$pw) and $row['account_verified']==0){
				$_SESSION['v_c']=1;
				header('Location: user_verification_form.php');
				}
		  }else{
			  
			  $_SESSION['U_N_F']=1;
			  header('Location: user_login_form.php');
			  }		  
		  }
		  
		  //mysql_close();
		  
		 

		  ?>
<!--
</body>
</html>
-->