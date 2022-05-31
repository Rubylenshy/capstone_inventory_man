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
	<title>Cheffings | Recipes</title>
<style>
	table thead{
		background-color: #293462;
	}
	table thead th{
		color: white;
	}
	table tbody th a{
		text-decoration: none;
	}
	table tbody th a:hover{
		text-decoration: none;
		color: #16003B;
	}
</style>
</head>
<body>
<div class="card">
			<div class="card-header text-primary">
				<h2>Recipes <a href="" style="float:right;"><i class="bi bi-plus-circle-fill"></i></a></h2>
			</div>
	<div class="card-body" id="order-table">
		<div>
			<div class="card-header"><h4>Appetizers & Beverages</h4></div>
			<div class="table-responsive">	
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Food/Dish</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php
						$query ="SELECT * FROM `appetizers_bev`";
						$appetizer= mysqli_query($connect, $query);
						while ($row = $appetizer->fetch_assoc()) {
							$id=$row['id'];
							$dish=$row['dish'];
						}

						echo "<tr>
							<td>$dish</td>
							<th><a href='#' style='color: primary;'>View Recipe</a></th>
						</tr>";
						?>
					</tbody>
				</table>
			</div>
		</div>
		<div>
			<div class="card-header"><h4>Main Dish</h4></div>
			<div class="table-responsive">	
				<table class="table table-bordered table-stripped">
					<thead>
						<tr>
							<th>Food/Dish</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php
							$query ="SELECT * FROM main_dish";
							$main= mysqli_query($connect, $query);
							if (!$query) {
								die;
							}
							while ($row = $main->fetch_assoc()) {
								$id=$row['id'];
								$dish=$row['dish'];
							}

							echo "<tr>
								<td>$dish</td>
								<th><a href='#' style='color: primary;'>View Recipe</a></th>
							</tr>";
						?>
					</tbody>
				</table>
			</div>
		</div>
		<div>
			<div class="card-header"><h4>Side Dish</h4></div>
			<div class="table-responsive">	
				<table class="table table-bordered table-stripped">
					<thead>
						<tr>
							<th>Food/Dish</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Side Dish 1</td>
							<th><a href="#" style="color: primary;">View Recipe</a></th>
						</tr>
						<tr>
							<td>Side Dish 2</td>
							<th><a href="#" style="color: primary;">View Recipe</a></th>
						</tr>
						<tr>
							<td>Side Dish 3</td>
							<th><a href="#" style="color: primary;">View Recipe</a></th>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div>
			<div class="card-header"><h4>Desserts</h4></div>
			<div class="table-responsive">	
				<table class="table table-bordered table-stripped">
					<thead>
						<tr>
							<th>Food/Dish</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Desserts 1</td>
							<th><a href="#" style="color: primary;">View Recipe</a></th>
						</tr>
						<tr>
							<td>Desserts 2</td>
							<th><a href="#" style="color: primary;">View Recipe</a></th>
						</tr>
						<tr>
							<td>Desserts 3</td>
							<th><a href="#" style="color: primary;">View Recipe</a></th>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</body>
</html>

<?php
	include("../includes/footer.php");
?>