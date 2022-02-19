<html>
<head>
	<title>User App</title>
	<link rel="stylesheet" type="text/css" href="libs/css/bootstrap.min.css">
</head>
<body>
<?php
include_once("config/database.php");

$sql = "SELECT user_id,user_name,user_email,user_password FROM user_tbl ORDER BY user_id DESC";
//var_dump($sql);
$result = $conn->query($sql);
$num = $result->num_rows;

if($num>0){
	echo "<table class='table table-bordered table-hover'>";
	echo "<tr>";
	echo "<th class='width-30-pct'>User Name</th>";
	echo "<th class='width-30-pct'>User Email</th>";
	echo "<th>Password</th>";
	echo "<th style='text-align:center;'>Action</th>";
	echo "</tr>";

	while ($row = $result->fetch_assoc()){
		extract($row);
		echo "<tr>";
		echo "<input type='hidden' class='user_id' name='user_id' value='{$user_id}'>";
		echo "<td>{$user_name}</td>";
		echo "<td>{$user_email}</td>";
		echo "<td>{$user_password}</td>";
		echo "<td style='text-align:center;' class='btn btn-primary edit-btn'>";
		echo "";
		echo "";
		echo "Edit</td>";
		echo "";
		echo "";
		echo "<td style='text-align:center;' class='btn btn-danger delete-btn'>Delete";
		echo "";
		echo "</td>";
		echo "</tr>";
	}
	echo "</table>";

}else{
	echo "No records found.";
}

?>
</body>
</html>