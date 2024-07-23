<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>View Sales Order</title>
	<link rel="stylesheet" href="css/print_purchase.css">
	<!--Boxicons CDN Link-->
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="shortcut icon" href="../images/dcdg.png" type="image/x-icon">
	<style>

	</style>
</head>
<body>
	<!-- Sidebar -->
	<?php include 'includes/sidebar.php'; ?>

	<!-- Database Connection -->
	<?php include "config2.php"; ?>


	<!-- Content -->
	<div class="content"><br>
		<div class="container" id="content">
			<form class="">
				<fieldset>

					<?php
					if (isset($_GET['purchase_id']))
					{
						$hostName = "localhost";
						$userName = "root";
						$password = "";
						$dbName = "dcdg";

						$connection = mysqli_connect($hostName, $userName, $password, $dbName);

						if (!$connection) 
						{
							die("Connection failed: " . mysqli_connect_error());
						}

						$sql = "SELECT * FROM sales_order WHERE purchase_ID = " . $_GET['purchase_id'];
						$result = mysqli_query($connection, $sql);

						if (!$result || mysqli_num_rows($result) == 0)
						{ 
							echo "<h1>Record not found!</h1>";
						} 
						else 
						{
							while ($row = mysqli_fetch_assoc($result)) 
							{
								?>

								<table id="salesinfo">
									<thead>
										<tr class="center">
											<th colspan="12"><h1 class="font-weight-bold" style="color: #053742; text-align: center;">DIAMOND COLOURS DRY GOODS</h1></th>
										</tr>

										<tr class="center">
											<th colspan="12">
												<p><h4 class="font-weight-bold" style="color: #053742; text-align: center;">SALES ORDER</h4></p>
											</th>
										</tr>

										<tr id="left">
											<th colspan="4"><p><b>Sales Order #: </b> SO-<?php echo $row['purchase_id']; ?></p> </th>
											<th colspan="4"><p><b>Purchase Date: </b>&nbsp; <?php echo $row['purchase_date']; ?></p></th>
										</tr>

										<tr id="left">
											<th colspan="4"> <p><b>Supplier: </b>&nbsp; <?php echo $row['supplier_name']; ?></p></th>
											<th colspan="4"> <p><b>Branch: &nbsp;</b>
												<?php 
												if($row['branch_id'] == 1) {
													echo "Mabini";
												} elseif ($row['branch_id'] == 2) {
													echo "Abanao";
												} elseif ($row['branch_id'] == 3) {
													echo "Magsaysay";
												} elseif ($row['branch_id'] == 4) {
													echo "Market";
												}
												?>
											</p> </th>
										</tr>	
									</thead>


								</table>

								<table class="table-striped" id="salesreport">
									<thead>
										<tr>
											<!--<th>PRODUCT ID</th>-->
											<th colspan="3">ITEM</th>
											<th colspan="3">QUANTITY</th>
											<th colspan="3">TOTAL</th>
										</tr>
									</thead>

									<tbody>
										<?php 
										$result = mysqli_query($connection, $sql);

										$count = 1;
										while ($row = mysqli_fetch_assoc($result)) {
											?>

											<tr>
												<!--<td scope='row' class='text-center'><?= $row["product_id"] ?></td>-->

												<td scope='row' colspan="3" id="right"><?= $row["barcode"] ?></td>
												<td scope='row' colspan="3" id="right"><?= $row["purchase_quantity"] ?></td>

												<td scope='row' colspan="3" id="right"><?= $row['product_price'] * $row['purchase_quantity'] ?></td>
											</tr>
											<?php
											$count++;
										}
										?>
									</tbody>
								</table>
								<?php

							} 
						}
						mysqli_close($connection);
					}
					?>
				</fieldset>
			</form><br>
		</div>
		<!-- Buttons -->
		<div align="right">
			<button class="add-btn" onclick="createPDF()">Print</button>
			<button class="add-btn"><a href="sales_order.php">Back</a></button>
		</div>
	</div>
</body>	
</html>

<!--FOR PDF DOWNLOAD-->
<?php include "includes/pdf.php"; ?>