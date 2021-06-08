<?php

/*
session_start();

	include("connection.php");
	include("functions.php");
	
	$user_data = check_login($con);
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Template</title>
	<!--Bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!--Custom CSS-->
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header class="container text-center">
		<h1>Welcome to Blog creating site</h1>
	</header>
	
	<main class="container">
		<div class="row">
			<nav class="col-sm-3 sidebar">
				<ul class="nav nav-sidebar">
					<li><a href="#">Home</a></li>
					<li><a href="login.php">Login</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">contact</a></li>
				</ul>
			</nav>
			<section class="col-sm-9">
				<h1 class="blue">BLOG CONTENTS</h1>
		
				<p>This site is very interesting to create new and very fascinating blogs</p>
				
				<p>Enjoy this page by creating blogs </p>
			</section>
		</div>
	</main>
	<footer class="container text-center">
		<p>Copyright &copy; Venkatesh</p>
	</footer>

	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>