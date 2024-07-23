<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Supplier List</title>
	<link rel="stylesheet" href="css/supplier_list.css">
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
			<h1 class="display-5 font-weight-bold text-center" style="color: #053742;">Supplier List</h1>
		</div><br><br>

		<!-- Search -->
		<div class="container search-table"> 
			<div class="search-box">
				<div class="row">
					<div class="col-3">
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

			<br>

			<!-- Table -->
			<div class="table-responsive-lg">       
				<table class="table table-bordered">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Company</th>
								<th>Contact Name</th>
								<th>Contact Number</th>
								<th>Address</th>
								<th>Item</th>
								<th colspan="2">Action</th>
							</tr>
						</thead>
						<tbody id="myTable">
							<?php
							$hostName = "localhost";
							$userName = "root";
							$password = "";
							$dbName = "dcdg";

							$conn = mysqli_connect($hostName, $userName, $password, $dbName);

							if (!$conn) 
							{
								die("Connection failed: " . mysqli_connect_error());
							}

							$sql = "SELECT * FROM supplier	";
							$result = mysqli_query($conn, $sql);
							if (!$result || mysqli_num_rows($result) == 0)
							{
								echo "<tr>";
								echo "<td colspan='5'><center><h2>Record not found!...</center></h2></td>";
								echo "</tr>";
							} 
							else{
								$counter = 0;
								while ($row = mysqli_fetch_assoc($result)){
									echo "<tr class='" . ($counter == 1 ? "" : "success") . "'>";
									echo "<td scope='row' class='p-3 text-center'>", $row["comapny"], "</td>";
									echo "<td scope='row' class='p-3 text-center'>", $row["supplier_name"], "</td>";
									echo "<td scope='row' class='p-3 text-center'>", $row["supplier_contact_number"], "</td>";
									echo "<td scope='row' class='p-3 text-center'>", $row["address"], "</td>";
									echo "<td scope='row' class='p-3 text-center'>", $row["product_name"], "</td>";
									echo "<td class='p-3 text-center'>", "<a href='edit_supplier.php?supplier_ID=" . $row["supplier_ID"] . "'>", "<center><i class='bx bx-edit-alt'></center>","</a>","</td>";
									echo "<td class='p-3 text-center'>", file_get_contents("includes/delete_modal.php"); "</td>";

									$counter = $counter == 0 ? 1 : 0;
								}

							}
							mysqli_close($conn);

							?>

						</tbody>
					</table>



					
				</div><br>


				<!-- Add -->
				<div align="left">
					<button class="add-btn"><a href="add_supplier.php">Add Supplier</a></button>
				</div>
			</body>	
			</html>