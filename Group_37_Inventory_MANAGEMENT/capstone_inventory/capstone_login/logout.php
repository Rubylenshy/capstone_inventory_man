<?php
session_start();

if (isset($user_data['user_id'])) {
	unset($user_data['user_id']);
}

// re-direction
header("Location: Login.php");
die;
?>