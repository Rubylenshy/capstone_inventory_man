<?php
session_start();
	include("../includes/connection.php");
	include("../includes/functions.php");


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
			width: 100%;
		}

		#button{
			padding: 10px;
			width: 100px;
			color: white;
			border: none;
		}
		#box{
			background-color: darkgrey;
			margin: auto;
			width: 700px;
			padding: 50px;
			top: 50px;
			border-radius: 15px;
		}


	</style>

	<div class="container col-lg-5" id="box">
		<form method="post">
			<div style="font-size: 30px; font-weight: bold; text-align: center;color: black;">LOGIN NOW</div><br>
			<input class="form-control"  id="text" type="text" autocomplete="off" name="user_name" placeholder="Enter your username"><br><br>
			<input class="form-control" id="text" type="password" name="password" placeholder="Enter your password">
			<span style="color: red;"><?php if(isset($error['user_name'])) echo $error['user_name'];?></span>
			<button id="button" style="width: 100%; align-self: center; background-color: green;">Login</button><br><br>
			<h5 style="color: black;">don't have an account? <a href="signup.php" style="color: orangered; text-decoration: none;">Register now!</a></h5>
			<p style="color; red;"><?php if(isset($error['empty'])) echo $error['empty'];?></p>
	</div>
</body>

<?php
	include("../includes/footer.php");
?>