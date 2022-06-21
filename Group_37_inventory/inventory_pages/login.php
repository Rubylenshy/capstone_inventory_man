<?php
session_start();
	include("../includes/connection.php");
	include("../includes/functions.php");


	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(empty($user_name)&& empty($password)){
			$error['empty'] = 'Please provide valid information';
		}

		if (!empty($user_name) && !empty($password)) {
			// save to database
			$query = "select * from admin_table where user_name = '$user_name' limit 1";
			$result = mysqli_query($connect, $query);
			if ($result) {
				if ($result&&mysqli_num_rows($result) > 0) {
					$user_data = mysqli_fetch_assoc($result);
					
					if ($user_data['password'] === $password) {
						$_SESSION['user_id'] = $user_data['user_id'];
							
						// re-direction
						header("Location: index.php");
					}
					// if ($user_data['user_name'] != $user_name || $user_data['password'] != $password){
					// 	$error['empty'] = 'Wrong Username or Password';
					// }
				}
			}
		}
	}


?>


<head>
	<meta charset="utf-8">
	<title>Login</title>
	
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
	<style type="text/css">
		body, html {
			height: 100%;
			margin: 0;
		}

		.bg {
			background-image: url("../img/bg_cheffings.png");
			height: 100%; 
			background-repeat: no-repeat;
			background-size: cover;
		}
		.padding{
			padding: 40px;
			font-family: 'Parisienne', cursive;
			text-align: center;
			text-shadow: 10px;
		}
		#button{
			padding: 10px;
			width: 100px;
			color: white;
			border-radius: 6px;
			border: none;
			width: 100%; 
			align-self: center; 
			background-color: gray;
		}
		#box{
			background-color: white;
			margin: auto;
			width: 500px;
			padding: 50px;
			top:50px;
		}
		@import url('https://fonts.googleapis.com/css2?family=Parisienne&display=swap');

	</style>
	<div class="bg">
		<div class="padding text-light">
			<h3>Cheffings</h3>
		</div>
	<div class="container col-lg-5 shadow-lg" id="box">
		<form method="post">
			<div style="font-size: 30px; text-align: center;color: black;">LOGIN NOW</div><br>
			<div class="form-group">
						<label class=" form-label" style="font-weight:500;">Username:</label>
                        <input class="form-control form-control-user" placeholder="Enter your username" name="user_name" type="text" autofocus>
                    </div>
                    <div class="form-group">
					<label class="form-label" style="font-weight:500;">Password:</label>
                        <input minlength="6" class="form-control form-control-user" placeholder="Enter your password" name="password" type="password" value="">
                    </div><br>
			<button id="button">Login</button><br><br>
			<h5 style="text-align: center; color: black;">don't have an account? <a href="signup.php" style="color: orangered; text-decoration: none;">Register now!</a></h5>
			<small style="color:red;" class="text-center"><?php if(isset($error['empty'])) echo $error['empty'];?></small>
	</div>
	</div>
</body>
<?php
	include("../includes/footer.php");
?>

