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
			$query = "insert into admin_table (user_id, user_name, password, cpassword) values ('$user_id', '$user_name', '$password', '$cpassword')";
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

		#button{
			padding: 10px;
			width: 100px;
			color: white;
			border-radius: 6px;
			border: none;
		}

		#box{
			background-color: darkgrey;
			margin: auto;
			width: 500px;
			padding: 50px;
			top: 50px;
			border-radius: 15px;
		}
	</style>

	<div class="container col-lg-5" id="box">
		<form method="post" class="form-group">
			<div style="font-size: 30px; font-weight:bold;text-align: center;color: black;">SIGN UP</div><br>
					<div class="form-group">
                        <input  class="form-control form-control-user" placeholder="Enter your username" name="user_name" type="text"  autofocus>
                    </div>
                    <p style = "color: red;"><?php if (isset($error['u'])) echo $error['u']; ?></p>
					<div class="form-group">
                        <input minlength="6" class="form-control form-control-user" placeholder="Enter your password" name="password" type="password" value="">
                    </div>
					<p></p>
					<div class="form-group">
                        <input minlength="6" class="form-control form-control-user" placeholder="Re-enter your password" name="cpassword" type="password" value="">
                    </div>
					<p style = "color: red;"><?php if (isset($error['cp'])) echo $error['cp']; ?></p>
			<button id="button"  style="width: 100%; background-color: green;">Sign Up</button><br><br>
			<h5 style="color: black; font-style: normal;">do you have an account? <a href="Login.php" style="text-decoration: none; color: orangered;">Click to Login!</a></h5>
			<p style="color: red;"><?php if (isset($error['empty_entry'])) echo $error['empty_entry']; ?></p>
		</form>
	</div>
</body>
</html>

<?php
	include("../includes/footer.php");
?>