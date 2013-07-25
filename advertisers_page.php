<?php
session_start();
include 'topMenu.php';
 
if (!isset($_SESSION['user_name'])&&!isset($_SESSION['user_password'])){ 
 header('Location: logout.php');
 }
?>

<html>
<title>
Advertisers Page
</title>
<body>
<p><br/>
<h4>
<?php
if($_SESSION['ad_in']==1){
echo '<h3> Your property details is added. Add/Change another property:</h3>';$_SESSION['ad_in']=0;
}else if($_SESSION['ed_in']==1){
echo '<h3> Your property details is Changed. Add/Change another property:</h3>';$_SESSION['ed_in']=0;
}
	else{
		echo '<h3>Welcome '.$_SESSION['user_name'].'.You can Add and Change your ads:</h3>';
}
?>
</h4></p>
<p><br/>
<h4>Choose your Options:<br/>
<form method="post" action="advertisers_ads.php">


<label>Chosse Item:
<select name="item">
<option  value="Hotel">Hotel</option>
<option  value="B&B">B&B</option>
<option  value="House">House</option>
<option  value="Flat">Flat</option>
<option  value="Restaurant">Restaurant</option>
</select>
</label>

<label>&nbsp;&nbsp;&nbsp;&nbsp;Chosse Operation:
<select name="operations">
<option  value="add">Add</option>
<option  value="change">Change</option>
</select>
</label>
<br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Perform" />

</form>
<a href="image_op.php">Upload, Change or Delete Image for a property</a> 
</h4></p>
</body>
</html>

<?php include 'bottom_cont.php';?>