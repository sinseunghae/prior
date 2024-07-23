<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>View Invoice</title>
	<link rel="stylesheet" href="css/view_guest_invoice.css">
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
			<h1 class="display-6 font-weight-bold" style="color: #053742;">INVOICE</h1><br>
			<form class="row g-3">
			<div class="col-md-4 mt-3">
				<label for="invoice_date" class="form-label"><b>Date</b></label>
				<div class="card p-2 bg-light">--/--/--</div>
			</div>
			<div class="col-md-4 mt-3">
				<label for="invoice_ID" class="form-label"><b>Invoice No.</b></label>
				<div class="card p-2 bg-light">INV-001</div>
			</div>
			<div class="col-md-4 mt-3">
				<label for="invoice_due_date" class="form-label"><b>Due Date</b></label>
				<div class="card p-2 bg-light">--/--/--</div>
			</div>
			<div class="col-md-6 mt-3">
				<label for="purchase_ID" class="form-label"><b>Purchase Order No.</b></label>
				<div class="card p-2 bg-light">PO-01</div>
			</div>
			<div class="col-md-6 mt-3">
				<label for="sales_order_ID" class="form-label"><b>Sales Order No.</b></label>
				<div class="card p-2 bg-light">SO-01</div>
			</div>
			<div class="col-md-8 mt-3">
				<label for="guest_name" class="form-label"><b>Customer Name</b></label>
				<div class="card p-2 bg-light">Leenard Javier</div>
			</div>
			<div class="col-md-4 mt-3">
				<label for="total_amount" class="form-label"><b>Total Amount</b></label>
				<div class="card p-2 bg-light">₱ 10,000</div>
				<!-- <input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly> -->
			</div>
		</form><br>


		<!-- Items (table) -->
		<div class="table-responsive-lg">       
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Qty.</th>
						<th>Item/s</th>
						<th>Price</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td data-label="invoice_quantity_sold">56</td>
						<td data-label="invoice_item_sold">Carpet</td>
						<td data-label="product_price">₱ 178.60</td>
					</tr>
				</tbody>
			</table>
		</div>

		<!-- Status -->
		 <div class="mb-3 row">
		    <label for="staticEmail" class="col-sm-2 col-form-label"><b>Status:</b></label>
		    <div class="col-sm-10">
		      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Pending">
		    </div>
  		</div>


  		<!-- Buttons -->
		<div align="right">
		    <button class="add-btn" type="submit"><a href="create_purchase.php">Print</a></button>
		    <button class="add-btn"><a href="invoice.php">Back</a></button>
		</div>
	</div>
</body>	
</html>