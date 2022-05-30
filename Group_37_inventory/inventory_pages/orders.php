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
	<title>Cheffings | Purchase Orders</title>
	
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<style>
	table thead{
		background-color: #293462;
	}
	table thead th{
		color: white;
	}
	tbody a{
		text-decoration: none;
		color: white;
	}
	tbody a:hover{
		color: white;
		text-decoration: none
	}
	#a{
		color: white;
		text-decoration: none;
	}
	@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css");
</style>
				
				
<!-- Table -->
<div class="card">
			<div class="card-header text-primary">
				<h2>Purchase Orders <a href="new_orders.php" style="float:right;">ADD</a></h2>
			</div>
	<div class="card-body" id="order-table">
		<div class="table-responsive">	
			<table class="table table-bordered table-stripped">
				<thead>
					<tr>
						<th>Order ID</th>
						<th>Customer Name</th>
						<th>Order</th>
						<th>Quantity</th>
						<th>Cost</th>
						<th>Contact</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
				
						$query = "SELECT * FROM `purchase_orders`";
						$result = mysqli_query($connect, $query);

						if (!$result) {
							die;
						}	
							//read data from each row
							while ($row=$result->fetch_assoc()) {
								$id=$row["id"];
								$cust_name= $row['cust_name'];	
								$orders= $row["orders"];
								$quantity=$row["quantity"];
								$cost=$row["cost"];
								$contact= $row["contact"];

								echo "<tr>
								<td>$id</td>
								<td>$cust_name</td>
								<td>$orders</td>
								<td>$quantity</td>
								<td>$cost</td>
								<td>$contact</td>
								<td>
									<button type='button' class='btn btn-primary'>
										<a href='update_orders.php?update_id=".$id."'>Update</a>
									</button>
									<button type='button' class='btn btn-danger' data-bs-target='#delete-modal' data-bs-toggle='modal'>
										<a href='delete_orders.php?delete_id=".$id."'>Delete</a>
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