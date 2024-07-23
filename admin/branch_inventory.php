<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Branch Inventory</title>
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


	<!-- Branch Inventory -->
	<div class="content"><br>
		<div class="container">
			<h1 class="display-5 font-weight-bold text-center" style="color: #053742;">BRANCH INVENTORY</h1>
		</div><br><br>

	<!-- Database Connection -->
		<?php include "config2.php"; ?>


	<!-- Select Branch -->
	<form method="post" action="" class="form-inline">
		  	<div class="form-group sm-3 mb-2">
		    	<label for="inputState"><b>Branch:</b></label>
		      		<select name="inputState"id="inputState" class="form-control mx-3" style="width:auto;">
		        		<option selected>Choose branch...</option>
		        		<option value="1">Mabini Branch (Main)</option>
						<option value="2">Abanao Branch</option>
						<option value="3">Magsaysay Branch</option>
						<option value="4">Market Branch</option>
		      		</select>

		    <!-- Submit -->
	  		<button type="submit" class="add-btn">Submit</button>
		  	</div>
	</form>


		<!-- Database Connection -->
        <?php include "config.php"; ?>


		<!-- Product List Table -->
		<div class='container table-responsive-lg'>
			<table border='1'  class="table table-bordered">
				<thead>
					<tr>
						<th>Barcode</th>
						<th>Item</th>
						<th>Category</th>
						<th>Price</th>
						<th>Qty.</th>
						<th>Variation</th>
						<th>Size</th>
						<th>Branch</th>
					</tr>
				</thead>

				<tbody id="myTable">
					<?php
					if(isset($_POST['inputState'])){
						$branch = $_POST['inputState'];
						switch ($branch) {
							case '1':
								$query = "SELECT * FROM branch1";
								break;
							case '2':
								$query = "SELECT * FROM branch2";
								break;
							case '3':
								$query = "SELECT * FROM branch3";
								break;
							case '4':
								$query = "SELECT * FROM branch4";
								break;
							default:
								$query = "SELECT * FROM branch1";
								break;
						}
						$result = mysqli_query($con, $query);

						$count = 1;
						while ($row = mysqli_fetch_assoc($result)) {
							$product_id = $row["pro_id"];
							$product_name = $row["product_name"];
							$product_category = $row["category"];
							$product_price = $row["price"];
							$product_quantity = $row["quantity"];
							$product_variations = $row["variations"];
							$product_size = $row["sizes"];
							$barcode = $row["barcode"];
							$branch = $row["branch_id"];

							?>
							<tr>
								<td scope='row' class=' text-center'><?= $barcode ?></td>
								<td scope='row' class=' text-center'><?= $product_name ?></td>
								<td scope='row' class=' text-center'><?= $product_category ?></td>
								<td scope='row' class=' text-center'><?= $product_price ?></td>
								<td scope='row' class=' text-center'><?= $product_quantity ?></td>
								<td scope='row' class=' text-center'><?= $product_variations ?></td>
								<td scope='row' class=' text-center'><?= $product_size ?></td>
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
							</tr>

							<?php
							$count++;
						}
					}

					?>
				</tbody> 
			</table>
			<div align="left">
			<button class="add-btn"><a href="add_item.php">Add Item</a></button>
		</div>
			
		</div><br>

		
	</body>	
	</html>
