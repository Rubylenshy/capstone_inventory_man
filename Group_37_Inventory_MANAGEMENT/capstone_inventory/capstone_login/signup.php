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
<style>
	@import url('https://fonts.googleapis.com/css2?family=Jost:wght@300&family=Raleway:wght@500&display=swap');
	</style>
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
			border: none;
			font-family:'Railway',sans-serif;
		}

		#box{
			background-color: darkgrey;
			margin: auto;
			width: 500px;
			padding: 50px;
			border-radius: 10px;
			font-family: 'Railway', sans-serif;
		}
	</style>

	<div id="box">
		<form method="post">
			<div style="font-size: 30px;text-align: center;color: black;">SIGN UP</div><br>
			<input id="text" type="text" name="user_name" placeholder="Enter your username"><br><br>
			<input id="text" type="password" name="password" placeholder="Enter your password"><br><br>
			<input id="text" type="password" name="password" placeholder="Confirm password"><br><br>
			<button id="button"  style="width: 100%; background-color: slateblue;">Sign Up</button><br><br>
			<h4 style="color: white; font-style: normal;">do you have an account? <a href="Login.php" style="text-decoration: none; color: orangered;">Click to Login!</a></h4>
		</form>
	</div>
</body>
</html>