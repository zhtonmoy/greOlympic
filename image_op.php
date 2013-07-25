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
$sql="select p_id from customers_ads";
$res=mysql_query($sql);
if($_SESSION['image_in']==1)
{
	echo '<h4>Images has been added to the database.</h4><br/>';
	echo '<h4>Add/delete images for another record:</h4></br>';

	
}else if($_SESSION['image_del']==1){
	echo '<h4>Images has been deleted from the database.</h4><br/>';
	echo '<h4>Add/delete images for another record:</h4></br>';
}else{
	echo '<h4>You can add,or delete image from a particular property:';
}
echo '<form method="post" action="image_ad_ch_del.php">';
echo '<label>Property ID:<select name="p_id1">';
while($info=mysql_fetch_array($res)){

echo '<option  value='.$info['p_id'].'>'.$info['p_id'].'</option>';


}
echo '</select>';
echo'</label>';
echo'<label>&nbsp;&nbsp;&nbsp;&nbsp;Chosse Operation:
<select name="operations">
<option  value="add">Add Image</option>
<option  value="delete">Delete Image</option>
</select>
</label>';
echo'<br/><br/>';
echo '<p><label>Enter property Id from the above list:
                  <input name="p_id" type="text" size="40"
                     maxlength="40" />
               </label></p>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo'<input type="submit" value="Perform" />';

echo '</form>';
echo '</h4>';
?>
 </body>
</html>
<?php include 'bottom_cont.php';?>