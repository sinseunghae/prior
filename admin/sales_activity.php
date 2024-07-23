<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Sales Order</title>
	<link rel="stylesheet" href="css/sales_order_style.css">
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
			<h1 class="display-5 font-weight-bold text-center" style="color: #053742;">SALES ORDER</h1>
		</div><br><br>


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
		<div class="table-responsive-lg">       
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Date</th>
						<th>Customer Name</th>
						<th>Branch</th>
						<th>Qty.</th>
						<th>Item</th>
						<th>Amount</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td data-label="sales_order_date">10/20/21</td>
						<td data-label="sales_order_ID"></td>
						<td data-label="guest_name">Leenard Troy Javier</td>
						<td data-label="branch">Upper Mabini</td>
						<td data-label="sales_order_quantity">56</td>
						<td data-label="product_name">Carpet</td>
						<td data-label="total_amount">₱ </td>
						<td data-label="sales_order_status"></td>
						<td data-label="Operation" class=' text-center'>

						<!-- Button -->
						<a href='view_sales_order.php'>
						<button class='add-btn'> View</button></a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</body>	
	</html>