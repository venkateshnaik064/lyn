<?php
session_start();

	include("connection.php");
	include("function.php");
	if($_SERVER['REQUEST_METHOD'] =="POST")
	{ 
		$id = $_POST['id'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		if(!empty($id) && !empty($password))
		{
			$query = "insert into login(id,email,password) values('$id','$email','$password')";
			mysqli_query($con, $query);
			header("Location: login.php");
			die;
		}
		else
		{
			echo "please enter valid information!";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="main">
	<div class="register">
		<h2>Register Here</h2>
		<br><br>
		<form id="register" method="post">
		<label>Id:</label>
		<input type="text" name="id" id="name" placeholder="id">
		<br><br>
		<label>Email:</label>
		<input type="email" name="email" id="name" placeholder="email">
		<br><br>
		<label>Password:</label>
		<input type="password" name="password" id="name" placeholder="password">
		<br><br>
		<input type="submit" value="Submit" name="submit" id="submit">	
		<a href="login.php">Login now</a>
		</form>
	</div>
</div>
</body>
</html>