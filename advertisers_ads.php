<?php
session_start();
include 'topMenu.php';
 
if (!isset($_SESSION['user_name'])&&!isset($_SESSION['user_password'])){ 
 header('Location: logout.php');
 }
?>
<html>
<title>
Add/Edit items:
</title>
<body>
<?php
include('connection.php');
$item_name=$_POST['item'];
$op_name=$_POST['operations'];
//echo $op_name;
if(strcmp($op_name, "add")==0){
	echo '<p><';
	echo '<h4> Enter '.$item_name.' details:</h4>';
	echo '</p>';
	echo '<p>';
	echo '<h4>';
	echo '<form method="post" action="insert_property_details.php" enctype="multipart/form-data">';
	echo '<input type="hidden" name="submitted" value=true />';
	echo '<label> Entter Property ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input name="p_id" type="text" size="40" maxlength="100"></text>(e.g:hotel n15 6pe,flat n17 6pe)</label><br/><br/>';
	echo '   <label> Entter Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input name="p_loc" type="text" size="40" maxlength="100"></text></label><br/><br/>';
	echo '  <label> Enter Contact Email:<input name="p_con" type="email" size="40"
                     maxlength="40" /></label><br/><br/>';
	echo '  <label> Rent(Per Night) £:&nbsp;&nbsp;&nbsp;&nbsp;<input name="p_rp" type="text" size="10"
                     maxlength="10" /></label><br/><br/>';
	echo '     <label > Description:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="p_des" rows="4" cols="40"></Textarea></label><br/><br/>';
	echo '  <label> Image1:&nbsp;&nbsp;&nbsp;&nbsp;<input name="p_image1" type="file"/></label><br/><br/>';
	echo '  <label> Image2:&nbsp;&nbsp;&nbsp;&nbsp;<input name="p_image2" type="file"/></label><br/><br/>';
	echo '   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="submit" value="Submit" />';
	echo '  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="reset" value="Clear" />';
	echo '</form>';
	echo'</h4></p>';
	
	
}else if(strcmp($op_name, "change")==0){
	echo '<p><h4> Edit '.$item_name.' details:';
	echo '<form method="post" action="edit_property_form.php">';
	echo '<input type="hidden" name="submitted_ed" value=true />';
	echo '<label> Enter Property ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input name="p_id" type="text" size="40" maxlength="100"></text>(e.g:hotel n15 6pe,flat n17 6pe)</label><br/><br/>';
	echo '   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="submit" value="Edit" />';
	echo '  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="reset" value="Clear" />';
	echo '</form>';
	echo '</h4></p>';
}
?>

</body>
</html>
<?php include 'bottom_cont.php';?>