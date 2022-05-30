<?php
session_start();
	include("../includes/connection.php");
	include("../includes/functions.php");

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		$select_p = " SELECT * FROM admin_table WHERE password = '$password'";
		$select_cp = " SELECT * FROM admin_table WHERE cpassword = '$cpassword'";
		$select_u = " SELECT * FROM admin_table WHERE user_name = '$user_name'";
		
		$result_u = mysqli_query($connect, $select_u);
		if(mysqli_num_rows($result_u) > 0){

			$error['u']="Username already exist!";

		}

		elseif($password != $cpassword){
				$error['cp']= "password does not match!";
			}elseif (!empty($user_name) && !empty($password) && !empty($cpassword)) {
			// save to database
			$user_id = random_num(6);
			$query = "INSERT INTO admin_table (user_id, user_name, password, cpassword) VALUES ('$user_id', '$user_name', '$password', '$cpassword')";
			$result=mysqli_query($connect, $query);
			// re-direction
			header("Location: Login.php");
			die;	
			}

		else{
			$error['empty_entry']="Please enter some valid information!";
		}

	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign Up</title>
</head>

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
	}
	#button{
		padding: 10px;
		width: 100px;
		color: white;
		border-radius: 6px;
		border: none;
		width: 100%; 
		background-color: gray;
	}

	#box{
		background-color: white;
		margin: auto;
		width: 500px;
		padding: 30px;
	}
	
	@import url('https://fonts.googleapis.com/css2?family=Parisienne&display=swap');
	</style>
	<div class="bg">
		<div class="text-center text-light padding">
			<h3>Cheffings</h3>
		</div>
	<div class="container col-lg-5 shadow " id="box">
		<form method="post">
			<div style="font-size: 30px; text-align: center;color: black;">SIGN UP</div>
					<div class="form-group">
						<label class="form-label" style="font-weight:500;">Username:</label>
                        <input  class="form-control" placeholder="Enter your username" name="user_name" type="text">
                    </div>
                    <small style = "color: red;"><?php if (isset($error['u'])) echo $error['u']; ?></small>
					<div class="form-group">
						<label class="form-label" style="font-weight:500;">Password:</label>
                        <input minlength="6" class="form-control" placeholder="Enter your password" name="password" type="password" value="">
                    </div>
					<p></p>
					<div class="form-group">
						<label class="form-label" style="font-weight:500;">Confirm Password:</label>
                        <input minlength="6" class="form-control" placeholder="Re-enter your password" name="cpassword" type="password" value="">
                    </div><br>
					<small style = "color: red;"><?php if (isset($error['cp'])) echo $error['cp']; ?></small>
			<button id="button" type="submit">Sign Up</button><br><br>
			<h5 style="text-align: center; color: black; font-style: normal;">do you have an account? <a href="Login.php" style="text-decoration: none; color: orangered;">Click to Login!</a></h5>
			<small style="color: red;"><?php if (isset($error['empty_entry'])) echo $error['empty_entry']; ?></small>
		</form>
	</div>
	</div>
<?php
	include("../includes/footer.php");
?>
</body>
</html>

