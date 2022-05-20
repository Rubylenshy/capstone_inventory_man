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
</head>
<div class="card">
			<div class="card-header text-primary">
				<h2>Ingredient Stock Level</h2>
			</div>
			<div class="card-body" id="order-table">
		<div class="table-responsive">	
			<table class="table table-bordered table-stripped">
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