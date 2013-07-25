<html><body>
<?php
include 'topMenu.php';

?>
<p><br/>
<h4>What are you looking for?Click below..<br/>
<input type="button" value="Hotel" onclick="location.href='search_hotel.php'"><br/>
<input type="button" value="B&B" onclick="location.href='search_bb.php'"><br/>
<input type="button" value="House" onclick="location.href='search_house.php'"><br/>
<input type="button" value="Flat" onclick="location.href='search_flat.php'"><br/>
<input type="button" value="Restaurant" onclick="location.href='search_restaurant.php'">
</h4></p>
<h4>Or Type:
<form method="post" action="search.php">
<input type="text" name="sitem" size="25"><br/>
<input type="submit" value="Search" />
               <input type="reset" value="Clear" />
</form></h4>


</body></html>
<?php include 'bottom_cont.php';?>
