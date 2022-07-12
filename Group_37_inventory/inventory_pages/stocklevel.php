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
	<title>Cheffings | Stock Level</title>
	
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
<style>
	table thead{
		background-color: #293462;
	}
	table thead th{
		color: white;
	}
<<<<<<< HEAD
=======
	tbody a{
		text-decoration: none;
		color: white;
	}
	tbody a:hover{
		text-decoration: none;
		color: white;
	}
>>>>>>> aa0c9eb8af9088c003c986b6ac61a5e4268f0bc6
</style>
</head>

<div class="card">
			<div class="card-header text-primary">
<<<<<<< HEAD
				<h2>Ingredient Stock Level <a href="" style="float:right;"><i class="bi bi-plus-circle-fill"></i></a></h2>
=======
				<h2>Ingredient Stock Level <a href="new_stocklevel.php" style="float:right;">ADD</a></h2>
>>>>>>> aa0c9eb8af9088c003c986b6ac61a5e4268f0bc6
			</div>
	<div class="card-body">
		<div class="table-responsive">	
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th>Ingredient ID</th>
						<th>Item</th>
						<th>Quantity</th>
						<th>Cost per Unit</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php   
						$query = "SELECT * FROM stock_level";
						$stock = mysqli_query($connect, $query);
						
						if (!$query) {
							die;
						}
						while ($row = $stock->fetch_assoc()) {
							$id=$row["id"];
							$item=$row["item"];
							$quantity=$row["quantity"];
							$cost_per_unit=$row["cost_per_unit"];

							echo "<tr>
								<td>$id</td>
								<td>$item</td>
								<td>$quantity</td>
								<td>$cost_per_unit</td>
								<td>
									<button type='button' class='btn btn-primary'>
										<a href='update_stocklevel.php?update_id=".$id."'>Update</a>
									</button>
<<<<<<< HEAD
									<button type='button' class='btn btn-danger' data-bs-target='#delete-modal' data-bs-toggle='modal'>
=======
									<button type='button' class='btn btn-danger'>
>>>>>>> aa0c9eb8af9088c003c986b6ac61a5e4268f0bc6
										<a href='delete_stocklevel.php?delete_id=".$id."'>Delete</a>
									</button>
								</td>
							</tr>";
						}
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