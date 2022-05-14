<?php
session_start();
	include("connection.php");
	include("functions.php");

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		//$cpassword = $_POST['cpassword'];

		if (!empty($user_name) && !empty($password) /*&& !empty($cpassword)*/) {
			// save to database
			$user_id = random_num(6);
			$query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";
			mysqli_query($connect, $query);
			// re-direction
			header("Location: Login.php");
			die;

		}else{
			echo "Please enter some valid information!";
		}

	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign Up</title>
</head>
<body>
	<style type="text/css">
		#text{
			height: 25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aliceblue;
			width: 100%;
		}

		#button{
			padding: 10px;
			width: 100px;
			color: white;
			background-color: darkblue;
			border: none;
		}

		#box{
			background-color: grey;
			margin: auto;
			width: 500px;
			padding: 50px;
		}
	</style>

	<div id="box">
		<form method="post">
			<div style="font-size: 30px;text-align: center;color: white;">Sign Up</div><br>
			<input id="text" type="text" name="user_name" placeholder="Username"><br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>
			<input id="text" type="password" name="password" placeholder="Confirm password"><br><br>
			<button id="button">Sign Up</button><br><br>
			<h4 style="color: white;">Do you have an account?</h4>
			<a href="Login.php">Click to Login</a>

		</form>
	</div>
</body>
</html>