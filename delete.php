<?php
// include to get database connection
	include_once "config/database.php";

	$sql = "DELETE FROM user_tbl WHERE user_id = " . $_POST['user_id'];
	if (mysqli_query($conn, $sql)) {
		echo "Deleted one record";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>