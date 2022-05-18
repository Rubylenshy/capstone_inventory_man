<?php
session_start();
	include("../includes/connection.php");
	include("../includes/functions.php");

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		$select = " SELECT * FROM admin_table WHERE password = '$password' && cpassword = '$cpassword' && user_name = '$user_name'";

		$result = mysqli_query($connect, $select);
		if(mysqli_num_rows($result) > 0){

			$error['u']="Username already exist!";

		}

		elseif($password != $cpassword){
				$error['cp']= "password does not match!";
			}elseif (!empty($user_name) && !empty($password) && !empty($cpassword)) {
			// save to database
			$user_id = random_num(6);
			$query = "insert into admin_table (user_id, user_name, password, cpassword) values ('$user_id', '$user_name', '$password', '$cpassword')";
			mysqli_query($connect, $query);
			if(!mysqli_num_rows($result)){	
			// re-direction
			header("Location: Login.php");
			die;	
			}

		}else{
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
		<form method="post" class="form-group">
			<div style="font-size: 30px; font-weight:bold;text-align: center;color: black;">SIGN UP</div><br>
			<div class="form-group">
                        <input class="form-control form-control-user" placeholder="Username" name="user" type="text" autofocus>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-user" placeholder="Password" name="password" type="password" value="">
                    </div>
					<div class="form-group">
                        <input class="form-control form-control-user" placeholder="Password" name="cpassword" type="password" value="">
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