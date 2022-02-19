<!DOCTYPE html>
<html>
<head>
	<title>Create Form</title>
	<link rel="stylesheet" type="text/css" href="libs/css/bootstrap.min.css">
</head>
<body>
<form id="create-user-form" action="#" method="post" border="0">
	<table class="table table-hover table-bordered">
		<tr>
			<td>User Name</td>
			<td><input type="text" name="name" class="form-control" required /></td>
		</tr>
		<tr>
			<td>Email </td>
			<td><input type="email" name="email" class="form-control" required /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" class="form-control" required /></td>
		</tr>
		<tr>
		<td></td>
		<td>
		<button type="submit" class="btn btn-primary float-right">
		<span class="glyphicon glyphicon-plus"></span> Save User
		</button>
		</td>
		</tr>
	</table>
</form>
<script type="text/javascript" src="libs/js/jquery.min.js"></script>
<script type="text/javascript" src="libs/js/jquery.min.js"></script>
<!-- <script type="text/javascript" src="process.js"></script> -->
</body>
</html>