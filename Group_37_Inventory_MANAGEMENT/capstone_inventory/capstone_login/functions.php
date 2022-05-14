<?php

function check_login($connect)
{
	if (isset($_SESSION['user_id'])) {
		$id = $_SESSION['user_id'];
		$query = "select * from users where user_id = '$id' limit 1";
		$result = mysqli_query($connect, $query);

		if ($result&&mysqli_num_rows($result) > 0) {
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}
	// redirecting to Login
	header("Location: Login.php");
	die;
}

function random_num($length){
	$text = "";
	if ($length < 5) {
		$length = 5;
	}
	for ($i=0; $i < $length ; $i++) { 
		$text .= rand(0,9);
	}
	return($text);
}