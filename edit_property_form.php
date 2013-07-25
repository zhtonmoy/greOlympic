<html>
<body>
<?php
session_start();
include 'topMenu.php';
 if (!isset($_SESSION['user_name'])&&!isset($_SESSION['user_password'])){ 
 header('Location: logout.php');
 }
 include('connection.php');
 if($_POST['submitted_ed']==true){
		$sql = "select * from customers_ads where p_id='" . $_POST['p_id'] . "'";
		$result = mysql_query($sql);
		if(!$result){
					echo 'Error reading data from  table'.mysql_error();
					}else{
						  $info = mysql_fetch_array( $result );
						  if(!$info){
									echo '<h4>';
									echo 'No Property Exists!!!';
									echo '</h4>';
									}else{
										  
										  $id=$info['p_id'];
										  echo '<p><br/>';
										  echo '<h4>';
										  echo '<form method="post" action="data_edit_operation.php">';
										  echo '<input type="hidden" name="submitted" value=true />';
										  echo '     <label > Edit ID: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="p_id" rows="1" cols="40">'.$info['p_id'].'</Textarea>(e.g:hotel n15 6pe,flat n17 6pe)</label><br/><br/>';
										  //echo '<label> Edit Property ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input name="p_id" type="Textarea" rows="4" cols="40" value='.$info['p_id'].'>'.$info['p_id'].'</Textarea>(e.g:hotel n15 6pe,flat n17 6pe)</label><br/><br/>';
										  //echo '   <label> Edit Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input name="p_loc" type="text" size="40" maxlength="100" value='.$info['p_loc'].'></text></label><br/><br/>';
										  //echo "<Input type='text' name = 'p_loc' value=".$info['p_loc'].">";
										  echo '     <label > Edit Address: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="p_loc" rows="1" cols="40">'.$info['p_loc'].'</Textarea></label><br/><br/>';
										  echo '  <label> Edit Contact Email:<input name="p_con" type="email" size="40"
										  maxlength="40" value='.$info['p_con'].'></email></label><br/><br/>';
										  echo '  <label> Edit Rent(Per Night) £:&nbsp;&nbsp;&nbsp;&nbsp;<input name="p_rp" type="text" size="10"
										  maxlength="10" value='.$info['p_rp'].'></text></label><br/><br/>';
										  echo '     <label > Edit Description: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="p_des" rows="4" cols="40">'.$info['p_des'].'</Textarea></label><br/><br/>';
										  echo '   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="submit" value="Submit" />';
										  echo '  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="reset" value="Clear" />';
										  echo '</form>';

										  echo '</h4>';
										 }

						 }
		
	}
	?>
	</body>
	</html>
	<?php include 'bottom_cont.php';?>