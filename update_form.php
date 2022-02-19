<?php
//include to get database connection
include "config/database.php";

	// get user id
$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : die('ERROR: User ID not found.');
$sql = "SELECT user_id, user_name, user_email, user_password FROM user_tbl WHERE user_id = '$user_id' LIMIT 0,1";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
	//var_dump($row);
if($row){
	$user_id = $row['user_id'];
	$user_name = $row['user_name'];
	$user_email = $row['user_email'];
	$user_password = $row['user_password'];
}else{
	echo "Unable to read record.";
}
?>

<!--we have our html form here where new product information will be entered--> 
<form id="update-user-form" action="update.php" method="post" border="0">
	<table class="table table-bordered table-hover">
		<tr>
			<td>User Name</td>
			<td><input type="text" name="name" class="form-control" value='<?php echo $user_name; ?>' required /></td>
		</tr>
		<tr>
			<td>User Email</td>
			<td>
			<input type="email" name="email" class="form-control" value='<?php echo $user_email; ?>' required /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" class="form-control" value='<?php echo $user_password; ?>' required /></td>
		</tr>
		<tr>
			<td>
			<!-- hidden ID field so that we could identify what record is to be updated-->
			<input type="hidden" name="user_id" value='<?php echo $user_id ?>' />
			</td>
			<td>
			<button type="submit" class="btn btn-primary float-right">Update User</button>
			</td>
		</tr>
	</table>
</form>
