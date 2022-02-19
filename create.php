<?php
	include_once "config/database.php";

	$username = $_POST["name"];
	$useremail = $_POST["email"];
	$password = $_POST["password"];
	//var_dump($username);
	$sql = "INSERT INTO user_tbl (user_name, user_email, user_password)
	VALUES ('$username', '$useremail', '$password')";
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>