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
	<title>Cheffings | Menu Cost</title>
</head>
<div class="card">
			<div class="card-header text-primary">
				<h2>Menu Costs</h2>
			</div>
	<div class="card-body" id="order-table">
		<div>
			<h4 class="card-header">Appetizers & Beverages</h4>
		</div>
		<div class="table-responsive">	
			<table class="table table-bordered table-stripped">
				<thead>
					<tr>
						<th>Food/Dish</th>
						<th>Cost</th>
						<th>Waiting Duration</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
<?php   
				
?>
				</tbody>
			</table>
		</div>
	<div>
		<h4 class="card-header">Main Dish</h4>
	</div>
	<div class="table-responsive">	
		<table class="table table-bordered table-stripped">
			<thead>
				<tr>
					<th>Food/Dish</th>
					<th>Cost</th>
					<th>Waiting Duration</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
<?php   
				
?>
			</tbody>
		</table>
	</div>
	<div>
		<h4 class="card-header">Side Dish</h4>
	</div>
	<div class="table-responsive">	
		<table class="table table-bordered table-stripped">
			<thead>
				<tr>
					<th>Food/Dish</th>
					<th>Cost</th>
					<th>Waiting Duration</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
<?php   
				
?>
			</tbody>
		</table>
	</div>
	<div>
		<h4 class="card-header">Desserts</h4>
	</div>
	<div class="table-responsive">	
		<table class="table table-bordered table-stripped">
			<thead>
				<tr>
					<th>Food/Dish</th>
					<th>Cost</th>
					<th>Waiting Duration</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
<?php   
				
?>
			</tbody>
		</table>
	</div>

	</div>
</div>
</html>

<?php
	include("../includes/footer.php");
?>