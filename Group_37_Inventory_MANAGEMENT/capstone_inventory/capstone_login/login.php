<?php
session_start();
	include("connection.php");
	include("functions.php");

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if (!empty($user_name) && !empty($password)) {
			// save to database
			$query = "select * from admin_table where user_name = '$user_name' limit 1";
			$result = mysqli_query($connect, $query);
			if ($result) {
				if ($result&&mysqli_num_rows($result) > 0) {
					$user_data = mysqli_fetch_assoc($result);
					if ($user_data['password']=== $password) {
						$_SESSION['user_id'] = $user_data['user_id'];

						// re-direction
						header("Location: index.php");
						die;
					}elseif(empty($user_name)&& empty($password)){
							$error['empty'] = 'Please provide valid information';
						}
				}
			}
		}
	}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap');
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
		}

		#box{
			background-color: darkgray;
			margin: auto;
			width: 500px;
			padding: 50px;
			border-radius: 10px;
			font-family: 'Railway',sans-serif;
		}


	</style>

	<div id="box">
		<form method="post">
			<div style="font-size: 30px; font-weight: bold; text-align: center;color: black;">LOGIN NOW</div><br>
			<input id="text" type="text" name="user_name" placeholder="Enter your username"><br><br>
			<input id="text" type="password" name="password" placeholder="Enter your password"><br><br>
			<p style="color: red;"><?php if(isset($error['user_name'])) echo $error['user_name'];?></p>
			<button id="button" style="width: 100%; align-self: center; background-color: slateblue;">Login</button><br><br>
			<h4 style="color: black;">don't have an account? <a href="signup.php" style="color: orangered; text-decoration: none;">Register now!</a>
			<p style="color; red;"><?php if(isset($error['empty'])) echo $error['empty'];?></p>
	</div>
</body>
</html>