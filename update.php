<?php
include_once "config/database.php";

$userid = $_POST['user_id'];
$username = $_POST['name'];
$useremail = $_POST['email'];
$password = $_POST['password'];
$sql = "UPDATE user_tbl SET user_name = '$username', user_email = '$useremail', user_password = '$password' WHERE user_id = '$userid'";

if (mysqli_query($conn, $sql)) {
	echo "successfully Updated";
} else {
	echo "cannot update" . $sql . "<br>" . $conn->error;
}

?>