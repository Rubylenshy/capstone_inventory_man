<?php
session_start();
	include("../includes/connection.php");
	include("../includes/topbar.php");
	include("../includes/sidebar.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cheffings | Home</title>
</head>
<style>
	.home{
  		height: 100%;
		background-position: center;
		background-size: cover;
		font-size: 20px;
	}
</style>
<div class="home">
			<div class="card-header text-primary">
				<h1>Home</h1>
			</div>
	<br/>
	Hello, Welcome to Cheffings Inventory.
	<div>
		<p>
			
		</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
			Voluptatibus, non. Velit, aut voluptatibus at, 
			sed perspiciatis blanditiis quisquam enim iste <br>
			voluptate molestias voluptatum veniam sequi excepturi 
			doloremque ratione. Assumenda, soluta.</p>
	</div>	
</div>
</html>

<?php
	include("../includes/footer.php");
?>