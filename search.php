<html><body>
<?php
include 'topMenu.php';
?>
<p><br/>
<h4><br/>
<?php
include('connection.php');
$item=$_POST['sitem'];
//if(strcmp($item, "")==0)
$sql = "select * from customers_ads where p_id like '".$item."%' ";
$result = mysql_query($sql);

$c=1;
printf("Search Results:\n");echo '<br/>';

while ($row = mysql_fetch_array($result)) {
	echo 'Property  "'.$c.'" <br/>';
    printf("Property Location: %s  \n", $row[1]);
	echo '<br/>';
	printf("Contact: %s  \n", $row[2]);
	echo '<br/>';
	printf("Rate Per Night £: %s  \n", $row[3]);
	echo '<br/>';
	printf("Short Description: %s  \n", $row[4]);
	echo '<br/>';
	//header("content-type: image/jpeg");
	//echo $row['p_image1'];
	echo '<br/>';
	echo '<br/>';
	$c++;
}
if($c==1){echo 'No property found';}
?>
</h4></p>



</body></html>
<?php include 'bottom_cont.php';?>
