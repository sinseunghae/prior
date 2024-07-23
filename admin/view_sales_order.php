<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>View Sales Order</title>
	<link rel="stylesheet" href="css/view_sales_order.css">
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


	<!-- Content -->
	<div class="content"><br>
		<div class="container">
			<h1 class="display-6 font-weight-bold" style="color: #053742;">SALES ORDER</h1><br>


			<form class="row g-3">
			<div class="col-md-6 mt-3">
				<label for="sales_order_date" class="form-label"><b>Date</b></label>
				<div class="card p-2 bg-light">--/--/--</div>
			</div>
			<div class="col-md-6 mt-3">
				<label for="sales_order_ID" class="form-label"><b>Sales of Branch</b></label>
				<div class="card p-2 bg-light">-</div>
			</div>
			<div class="col-md-6 mt-3">
				<label for="guest_name" class="form-label"><b>Customer Name</b></label>
				<div class="card p-2 bg-light">Leenard Javier</div>
			</div>
			<div class="col-md-6 mt-3">
				<label for="sales_order_shipping_address" class="form-label"><b>Branch</b></label>
				<div class="card p-2 bg-light">Upper Mabini</div>
			</div>
		</form><br>


		<!-- Items (table) -->
		<div class="table-responsive-lg">       
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Qty.</th>
						<th>Item</th>
						<th>Price</th>
						<th>Total Amount</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td data-label="sales_order_quantity">56</td>
						<td data-label="product_name">Carpet</td>
						<td data-label="product_price">₱ </td>
						<td data-label="total_amount">₱ </td>
						<td data-label="status"></td>
					</tr>
				</tbody>
			</table>
		</div>

  		<!-- Buttons -->
		<div align="right">
		    <button class="add-btn" type="submit"><a href="#">Print</a></button>
		    <button class="add-btn"><a href="sales_order.php">Back</a></button>
		</div>
	</div>
</body>	
</html>