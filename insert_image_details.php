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
$p_id=$_SESSION['pr_id'];
//$op_name=$_POST['operations'];
if($_POST['submitted_in']==true){
	/*$file1=$_FILES['p_image1']['tmp_name'];
	$file2=$_FILES['p_image2']['tmp_name'];
	if(!isset($file1) or !isset($file2))
	 {
		echo 'Please select images';
	 }else{
			$image1=addslashes(file_get_contents($_FILES['p_image1']['tmp_name']));
			$image2=addslashes(file_get_contents($_FILES['p_image2']['tmp_name']));
			$sql="UPDATE customers_ads set p_image1='" . $image1 . "',p_image2='" . $image2 . "' where p_id='" . $_SESSION['pr_id'] . "'";
				if(!mysql_query($sql)){
										echo 'Error inserting data into table'.mysql_error();
									  }else{
											echo 'Data saved';
											$_SESSION['image_in']=1;
											header('Location: image_op.php');
					
		  }
	 }*/
	 move_uploaded_file($_FILES['p_image1']['tmp_name'],"/home/bm340/public_html/".$p_id."a.png");
	 move_uploaded_file($_FILES['p_image2']['tmp_name'],"/home/bm340/public_html/".$p_id."b.png");
}
?>
 </body>
</html>
