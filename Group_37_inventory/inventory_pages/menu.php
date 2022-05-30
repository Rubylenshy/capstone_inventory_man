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
<style>
	table thead{
		background-color: #293462;
	}
	table thead th{
		color: white;
	}
</style>
</head>
<body>
<div class="card">
			<div class="card-header text-primary">
				<h2>Menu Costs <a href="" style="float:right;"><i class="bi bi-plus-circle-fill"></i></a></h2>
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
						<th>Duration</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php   
						$query = "SELECT * FROM appetizers_bev";
						$appetizer = mysqli_query($connect, $query);
						
						if (!$query) {
							die;
						}
						while ($row = $appetizer->fetch_assoc()) {
							echo "<tr>
								<td> ".$row["dish"]." </td>
								<td> ".$row["cost"]." </td>
								<td> ".$row["duration"]." </td>
								<td> 
									<button class='btn btn-primary' data-bs-target='#update-modal' data-bs-toggle='modal'>Update</button>
									<button class='btn btn-danger' data-bs-target='#delete-modal' data-bs-toggle='modal'>Delete</button>
								</td>
							</tr>";
						}
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
					<th>Duration</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php   
					$query = "SELECT * FROM main_dish";
					$main = mysqli_query($connect, $query);
					
					if (!$query) {
						die;
					}
					while ($row = $main->fetch_assoc()) {
						echo "<tr>
							<td> ".$row["dish"]." </td>
							<td> ".$row["cost"]." </td>
							<td> ".$row["duration"]." </td>
							<td> 
								<button class='btn btn-primary' data-bs-target='#update-modal' data-bs-toggle='modal'>Update</button>
								<button class='btn btn-danger' data-bs-target='#delete-modal' data-bs-toggle='modal'>Delete</button>
							</td>
						</tr>";
					}
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
					<th>Duration</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php   
					$query = "SELECT * FROM side_dish";
					$side = mysqli_query($connect, $query);
					
					if (!$query) {
						die;
					}
					while ($row = $side->fetch_assoc()) {
						echo "<tr>
							<td> ".$row["dish"]." </td>
							<td> ".$row["cost"]." </td>
							<td> ".$row["duration"]." </td>
							<td> 
								<button class='btn btn-primary' data-bs-target='#update-modal' data-bs-toggle='modal'>Update</button>
								<button class='btn btn-danger' data-bs-target='#delete-modal' data-bs-toggle='modal'>Delete</button>
							</td>
						</tr>";
					}			
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
					<th>Duration</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php   
					$query = "SELECT * FROM desserts";
					$desserts = mysqli_query($connect, $query);
					
					if (!$query) {
						die;
					}
					while ($row = $desserts->fetch_assoc()) {
						echo "<tr>
							<td> ".$row["dish"]." </td>
							<td> ".$row["cost"]." </td>
							<td> ".$row["duration"]." </td>
							<td> 
								<button class='btn btn-primary' data-bs-target='#update-modal' data-bs-toggle='modal'>Update</button>
								<button class='btn btn-danger' data-bs-target='#delete-modal' data-bs-toggle='modal'>Delete</button>
							</td>
						</tr>";
					}			
				?>
			</tbody>
		</table>
	</div>

	</div>
</div>
</body>
</html>

<?php
	include("../includes/footer.php");
?>