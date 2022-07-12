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
<<<<<<< HEAD
=======
	body a{
		text-decoration: none;
	}
	body a:hover{
		text-decoration: none;
	}
>>>>>>> aa0c9eb8af9088c003c986b6ac61a5e4268f0bc6
</style>
</head>
<body>
<div class="card">
			<div class="card-header text-primary">
				<h2>Menu Costs <a href="" style="float:right;"><i class="bi bi-plus-circle-fill"></i></a></h2>
			</div>
	<div class="card-body" id="order-table">
		<div>
			<h4 class="card-header">Appetizers & Beverages <a href="new_appetizers.php" style="float:right;">add</a></h4>
		</div>
		<div class="table-responsive">	
			<table class="table table-bordered table-hover">
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
<<<<<<< HEAD
							echo "<tr>
								<td> ".$row["dish"]." </td>
								<td> ".$row["cost"]." </td>
								<td> ".$row["duration"]." </td>
								<td> 
									<button class='btn btn-primary' data-bs-target='#update-modal' data-bs-toggle='modal'>Update</button>
									<button class='btn btn-danger' data-bs-target='#delete-modal' data-bs-toggle='modal'>Delete</button>
=======
							$id=$row['id'];
							$dish=$row['dish'];
							$cost=$row['cost'];
							$duration=$row['duration'];

							echo "<tr>
								<td>$dish</td>
								<td>$cost</td>
								<td>$duration</td>
								<td> 
									<button class='btn btn-primary'>
										<a class='text-light' href='update_appetizers.php?up_appetizers_id=".$id."'>Update</a>
									</button>
									<button class='btn btn-danger'>
										<a class='text-light' href='delete_appetizers.php?del_appetizers_id=".$id."'>Delete</a>
									</button>
>>>>>>> aa0c9eb8af9088c003c986b6ac61a5e4268f0bc6
								</td>
							</tr>";
						}
					?>
				</tbody>
			</table>
		</div>
	<div>
		<h4 class="card-header">Main Dish <a href="new_maindish.php" style="float:right;">add</a></h4>
	</div>
	<div class="table-responsive">	
		<table class="table table-bordered table-hover">
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
<<<<<<< HEAD
						echo "<tr>
							<td> ".$row["dish"]." </td>
							<td> ".$row["cost"]." </td>
							<td> ".$row["duration"]." </td>
							<td> 
								<button class='btn btn-primary' data-bs-target='#update-modal' data-bs-toggle='modal'>Update</button>
								<button class='btn btn-danger' data-bs-target='#delete-modal' data-bs-toggle='modal'>Delete</button>
=======
						$id=$row['id'];
						$dish=$row['dish'];
						$cost=$row['cost'];
						$duration=$row['duration'];
						echo "<tr>
							<td>$dish</td>
							<td>$cost</td>
							<td>$duration</td>
							<td> 
								<button class='btn btn-primary'>
									<a class='text-light' href='update_maindish.php?up_maindish_id=".$id."'>Update</a>
								</button>
								<button class='btn btn-danger'>
									<a class='text-light' href='delete_maindish.php?del_maindish_id=".$id."'>Delete</a>
								</button>
>>>>>>> aa0c9eb8af9088c003c986b6ac61a5e4268f0bc6
							</td>
						</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
	<div>
		<h4 class="card-header">Side Dish <a href="new_sidedish.php" style="float:right;">add</a></h4>
	</div>
	<div class="table-responsive">	
		<table class="table table-bordered table-hover">
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
<<<<<<< HEAD
						echo "<tr>
							<td> ".$row["dish"]." </td>
							<td> ".$row["cost"]." </td>
							<td> ".$row["duration"]." </td>
							<td> 
								<button class='btn btn-primary' data-bs-target='#update-modal' data-bs-toggle='modal'>Update</button>
								<button class='btn btn-danger' data-bs-target='#delete-modal' data-bs-toggle='modal'>Delete</button>
=======
						$id=$row['id'];
						$dish=$row['dish'];
						$cost=$row['cost'];
						$duration=$row['duration'];
						echo "<tr>
							<td>$dish</td>
							<td>$cost</td>
							<td>$duration</td>
							<td> 
								<button class='btn btn-primary'>
									<a class='text-light' href='update_sidedish.php?up_sidedish_id=".$id."'>Update</a>
								</button>
								<button class='btn btn-danger'>
									<a class='text-light' href='delete_sidedish.php?del_sidedish_id=".$id."'>Delete</a>
								</button>
>>>>>>> aa0c9eb8af9088c003c986b6ac61a5e4268f0bc6
							</td>
						</tr>";
					}			
				?>
			</tbody>
		</table>
	</div>
	<div>
		<h4 class="card-header">Desserts <a href="new_desserts.php" style="float:right;">add</a></h4>
	</div>
	<div class="table-responsive">	
		<table class="table table-bordered table-hover">
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
<<<<<<< HEAD
=======
						$id=$row['id'];
						$dish=$row['dish'];
						$cost=$row['cost'];
						$duration=$row['duration'];
						
>>>>>>> aa0c9eb8af9088c003c986b6ac61a5e4268f0bc6
						echo "<tr>
							<td> ".$row["dish"]." </td>
							<td> ".$row["cost"]." </td>
							<td> ".$row["duration"]." </td>
							<td> 
<<<<<<< HEAD
								<button class='btn btn-primary' data-bs-target='#update-modal' data-bs-toggle='modal'>Update</button>
								<button class='btn btn-danger' data-bs-target='#delete-modal' data-bs-toggle='modal'>Delete</button>
=======
								<button class='btn btn-primary'>
									<a class='text-light' href='update_desserts.php?up_desserts_id=".$id."'>Update</a>
								</button>
								<button class='btn btn-danger'>
									<a class='text-light' href='delete_desserts.php?del_desserts_id=".$id."'>Delete</a>
								</button>
>>>>>>> aa0c9eb8af9088c003c986b6ac61a5e4268f0bc6
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