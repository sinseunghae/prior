<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Invoice</title>
	<link rel="stylesheet" href="css/invoice.css">
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

	<!-- Inventory -->
	<div class="content"><br>
		<div class="container">
			<h1 class="display-5 font-weight-bold text-center" style="color: #053742;">Invoice</h1>
		</div><br><br>


		<!-- Search -->
		<div align="left">
		    <form>
				<div class="input-group mb-2 w-50">
					<div class="input-group-prepend">
						<span class="input-group-text">Search</span>
					</div>
					<input type="text" class="form-control" placeholder="Type here..." style="font-style:italic">
				</div>
			</form>
		</div><br>
 

		<!-- Table -->
		<div class="table-responsive-lg">       
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Date</th>
						<th>Invoice #</th>
						<th>P.O. #</th>
						<th>S.O. #</th>
						<th>Customer Name</th>
						<th>Due Date</th>
						<th>Amount</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td data-label="invoice_date">10/20/21</td>
						<td data-label="invoice_ID">INV-001</td>
						<td data-label="purchase_ID">PO-01</td>
						<td data-label="sales_order_ID">SO-01 </td>
						<td data-label="guest_name">Leenard Troy Javier</td>
						<td data-label="invoice_due_date">10/25/21</td>
						<td data-label="total_amount">₱ 10,000</td>
						<td data-label="invoice_status">Pending</td>
						<td data-label="Operation">
							<a href="view_guest_invoice.php" style = "text-decoration:none; color:black;"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</body>	
	</html>