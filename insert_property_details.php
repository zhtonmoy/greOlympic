<?php
session_start(); 
 if (!isset($_SESSION['user_name'])&&!isset($_SESSION['user_password'])){ 
 header('Location: logout.php');
 }

 include('connection.php');
 //echo $_POST['submitted']; 
 if($_POST['submitted']==true){
	$p_id=$_POST['p_id'];
	$p_loc=$_POST['p_loc'];
	$p_con=$_POST['p_con'];
	$p_rp=$_POST['p_rp'];
	$p_des=$_POST['p_des'];
	$file1=$_FILES['p_image1']['tmp_name'];
	$file2=$_FILES['p_image2']['tmp_name'];
	if(!isset($file1) or !isset($file2))
	 {
		echo 'Please select images';
	 }
	if(($p_id=="")||($p_loc=="")||($p_con=="")||($p_rp=="")||($p_des=="")){
	
	echo 'Data input error!!!  Please input data for all of the fields..';
	}else{
			$image1=addslashes(file_get_contents($_FILES['p_image1']['tmp_name']));
			$image2=addslashes(file_get_contents($_FILES['p_image2']['tmp_name']));
			$sql="INSERT INTO customers_ads (p_id,p_loc,p_con,p_rp,p_des,p_image1,p_image2) values ('$p_id','$p_loc','$p_con','$p_rp','$p_des','$image1','$image2')";
				if(!mysql_query($sql)){
										echo 'Error inserting data into table'.mysql_error();
									  }else{
											echo 'Data saved';
											$_SESSION['ad_in']=1;
											header('Location: advertisers_page.php');
											}//check whether inserting into table succeed
		 }//insrting data

	}
?>
