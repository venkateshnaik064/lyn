<?php
	//code
	// Create token head
function generateJWT($user_id)
{
	// Create token header as a JSON string
	$header = json_encode(['typ' => 'JWT', 'alg' => 'HS256']);

	// Create token payload as a JSON string
	$payload = json_encode(['user_id' => $user_id]);

	// Encode Header to Base64Url String
	$base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));

	// Encode Payload to Base64Url String
	$base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($payload));

	// Create Signature Hash
	$signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, 'abC123!', true);

	// Encode Signature to Base64Url String
	$base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));

	// Create JWT
	$jwt = $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;
	return '$jwt';
}

session_start();

	include("connection.php");
	include("function.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{// Create token header as a JSON string
$header = json_encode(['typ' => 'JWT', 'alg' => 'HS256']);

// Create token payload as a JSON string
$payload = json_encode(['user_id' => 123]);

// Encode Header to Base64Url String
$base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));

// Encode Payload to Base64Url String
$base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($payload));

// Create Signature Hash
$signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, 'abC123!', true);

// Encode Signature to Base64Url String
$base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));

// Create JWT
$jwt = $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;

echo $jwt;
		$id = $_POST['id'];
		$password = $_POST['password'];
		
		if(!empty($id) && !empty($password))
		{
			$query = "select * from login where id = '$id'";
			$result = mysqli_query($con, $query);
			
			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
			{
				$user_data = mysqli_fetch_assoc($result);
				if($user_data['password'] === $password)
				{
					// creat JWT token using ID and sceret key and return it back in response
					
					
					// in client (html sidee) you store it locally in localstorage
					$_SESSION['id'] = $user_data['id'];
					header("Location: index1.php");
					die;
				}
			}
		}
		echo "wrong id or password";
		}
		else
		{
			echo "please enter valid information!";
		}
		}
		generateJWT(123);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="main">
	<div class="register">
		<h2>Login Here</h2>
		<br><br>
		<form method ="post" id="register" method="post">
		<label>Id:</label>
		<input type="text" name="id" id="name" placeholder="id">
		<br><br>
		<label>Password:</label>
		<input type="password" name="password" id="name" placeholder="password">
		<br><br>
		<input type="submit" value="Login" name="submit" id="submit">		
		</form>
		<a href="signup.php">Register now here</a>
	</div>
</div>
</body>
</html>