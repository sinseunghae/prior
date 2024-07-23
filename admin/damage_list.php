<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Damaged Items</title>
	<link rel="stylesheet" href="css/product.css">
	<!--Boxicons CDN Link-->
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="shortcut icon" href="../images/dcdg.png" type="image/x-icon">
	<script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style>

	</style>
</head>
<body>
	<!-- Sidebar -->
	<?php include 'includes/sidebar.php'; ?>

	<!-- Damage -->
	<div class="content"><br>
		<div class="container">
			<h1 class="display-5 font-weight-bold text-center" style="color: #053742;">DAMAGED ITEMS</h1>
		</div><br><br>

		<!-- Database Connection -->
		<?php include "config2.php"; ?>

		<!-- Search -->
		<div class="container search-table"> 
			<div class="search-box" style='width: 30%'>
				<div class="row">
					<div >
						<input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search here..." name="search">
						<script>
							$(document).ready(function () {
								$("#myInput").on("keyup", function () {
									var value = $(this).val().toLowerCase();
									$("#myTable tr").filter(function () {
										$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
									});
								});
							});
						</script>
					</div> 
				</div>
			</div>
		</div>

		<br>


		<!-- Database Connection -->
		<?php include "config2.php"; ?>


		<!-- Table -->
		<div class='container table-responsive-lg'>
			<table border='1'  class="table table-bordered">
				<thead>
					<tr>
						<th>Barcode</th>
						<th>Product</th>
						<th>Variation</th>
						<th>Size</th>
						<th>Quantity</th>
						<th>Branch</th>
						<th>Status</th>
					</tr>
				</thead>

				<tbody id="myTable">
					<?php
					$query = "SELECT * FROM damage";
					$result = mysqli_query($con, $query);

					$count = 1;
					while ($row = mysqli_fetch_assoc($result)) {
						$barcode = $row["barcode"];
						$product_name = $row["product_name"];
						$product_variations = $row["variation"];
						$product_size = $row["size"];
						$quantity = $row["quantity"];
						//$date = $row["date"];
						$branch = $row["branch_id"];
						$status = $row["status"];
						
						?>
						<tr>
							<td scope='row' class=' text-center'><?= $barcode ?></td>
							<td scope='row' class=' text-center'><?= $product_name ?></td>
							<td scope='row' class=' text-center'><?= $product_variations ?></td>
							<td scope='row' class=' text-center'><?= $product_size ?></td>
							<td scope='row' class=' text-center'><?= $quantity ?></td>
							<td scope='row' class=' text-center'><?php 
							if($branch == 1) {
								echo "Mabini";
							} elseif ($branch == 2) {
								echo "Abanao";
							} elseif ($branch == 3) {
								echo "Magsaysay";
							} elseif ($branch == 4) {
								echo "Market";
							}
							?></td>
							<!-- status -->
							<td scope='row' class=' text-center'>
								<?php 
								if($status == 1) {
									echo "Damaged";
								} elseif ($status == 2) {
									echo "Missing";
								} 
								?>
							</td>

						</tr>
						<?php
						$count++;
					}
					?>
				</tbody> 
			</table>
			<div align="left">
				<button class="add-btn"><a href="damaged.php">Add Damaged/Missing Products</a></button>
			</div>

		</div><br>
		
	</body>	
	</html>
