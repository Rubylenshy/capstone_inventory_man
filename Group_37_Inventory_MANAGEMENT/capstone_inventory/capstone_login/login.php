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
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($connect, $query);
			if ($result) {
				if ($result&&mysqli_num_rows($result) > 0) {
					$user_data = mysqli_fetch_assoc($result);
					if ($user_data['password']=== $password) {
						$_SESSION['user_id'] = $user_data['user_id'];

						// re-direction
						header("Location: index.php");
						die;
					}else{
							echo "Wrong username or password!";
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
			<div style="font-size: 30px;text-align: center;color: white;">Login</div><br>
			<input id="text" type="text" name="user_name" placeholder="Username"><br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>
			<button id="button">Login</button><br><br>
			<h4 style="color: white;">A new customer?</h4>
			<a href="signup.php">Click to Sign Up</a>

		</form>
	</div>
</body>
</html>