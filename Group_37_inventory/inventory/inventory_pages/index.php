<?php
session_start();
	include("../includes/connection.php");
	include("../includes/functions.php");

	$user_data = check_login($connect);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Restaurant | Login</title>
</head>
<body>
	<a href="logout.php">Logout</a>
	<h1>Welcome to your Inventory</h1>
	<br/>
	Hello, <?php echo $user_data['user_name'];?>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
        Voluptatibus, non. Velit, aut voluptatibus at, 
        sed perspiciatis blanditiis quisquam enim iste <br>
        voluptate molestias voluptatum veniam sequi excepturi 
        doloremque ratione. Assumenda, soluta.</p>
</body>
</html>

<?php
	include("../includes/footer.php");
?>