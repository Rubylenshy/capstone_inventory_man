<?php
session_start();
	
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
		font-size: 20px;
	}
</style>
<body>
<div>
	<?php
	include("../includes/connection.php");
	include("../includes/topbar.php");
	include("../includes/sidebar.php");
	?>

<div class="home card">
			<div class="card-header text-primary">
				<h1>Home</h1>
			</div>
	<br/>
	
	<div class="card-body">
	<span> Hello, Welcome to Cheffings Inventory.</span>
		<p>
			
		</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
			Voluptatibus, non. Velit, aut voluptatibus at, 
			sed perspiciatis blanditiis quisquam enim iste <br>
			voluptate molestias voluptatum veniam sequi excepturi 
			doloremque ratione. Assumenda, soluta.<br>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
			Voluptatibus, non. Velit, aut voluptatibus at, 
			sed perspiciatis blanditiis quisquam enim iste <br>
			voluptate molestias voluptatum veniam sequi excepturi 
			doloremque ratione. Assumenda, soluta.</p>
	</div>	
</div>
</div>
</body>
</html>

<?php
	include("../includes/footer.php");
?>