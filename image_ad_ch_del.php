<?xml version="1.0"?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    
    <!-- Fig. 5.3: form.html   -->
    <!-- Form Design Example 1 -->
    
    <html xmlns="http://www.w3.org/1999/xhtml">
<?php include 'topMenu.php';?>
<html>
<head></head>
<body>

<?php
session_start(); 
 if (!isset($_SESSION['user_name'])&&!isset($_SESSION['user_password'])){ 
 header('Location: logout.php');
 }

 include('connection.php');
$p_id=$_POST['p_id'];
$_SESSION['pr_id']=$p_id;

$op_name=$_POST['operations'];
if(strcmp($op_name, "add")==0){
echo '<h4> Upload images for property ID: '.$p_id.'<br/>';
echo '<form method="post" action="insert_image_details.php" enctype="multipart/form-data">';
echo '<input type="hidden" name="submitted_in" value=true />';
echo '  <label> Image1:&nbsp;&nbsp;&nbsp;&nbsp;<input name="p_image1" type="file"/></label><br/><br/>';
echo '  <label> Image2:&nbsp;&nbsp;&nbsp;&nbsp;<input name="p_image2" type="file"/></label><br/><br/>';
echo '   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="submit" value="Submit" />';
echo '  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="reset" value="Clear" />';
echo '</form>';
}else if(strcmp($op_name, "delete")==0){
$sql="UPDATE customers_ads set p_image1=null,p_image2=null where p_id='" . $_SESSION['pr_id'] . "'";
				if(!mysql_query($sql)){
										echo 'Error inserting data into table'.mysql_error();
									  }else{
											echo 'Data saved';
											$_SESSION['image_del']=1;
											header('Location: image_op.php');
					
		  }
}

echo '</h4>';
?>
 </body>
</html>
<?php include 'bottom_cont.php';?>