<?php
	require_once('auth.php');
?>
<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Inventory</title>
	<link rel="stylesheet" href="css/inventory_table_style.css">
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
	<?php include 'includes/sidebar_employee.php'; ?>

	<!-- Inventory -->
	<div class="content"><br>
		<div class="container">
			<h1 class="display-5 font-weight-bold text-center" style="color: #053742;">Inventory</h1>
		</div><br>
		
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

			<div class= "search-list">
				<div class="table-responsive-lg">       
					<table class="table table-bordered" >
						<thead>
							<tr>
								<th>Barcode</th>
								<th>Product Name</th>
								<th>Variation</th>
								<th>Size</th>
								<th>Qty.</th>
								<th>Price</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody id="myTable">

							<?php
							$branch=$_SESSION['Branch_ID'];
							$hostName = "localhost";
							$userName = "root";
							$password = "";
							$dbName = "dcdg";

							$conn = mysqli_connect($hostName, $userName, $password, $dbName);

							if (!$conn) 
							{
								die("Connection failed: " . mysqli_connect_error());
							}

							switch($branch){
								case '1':
								$sql = "SELECT * FROM branch1";
								break;
								case '2':
								$sql = "SELECT * FROM branch2";
								break;
								case '3':
								$sql = "SELECT * FROM branch3";
								break;
								case '4':
								$sql = "SELECT * FROM branch4";
								break;
							}

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
                            		echo "<td scope='row' class='p-3 text-center'>", $row["barcode"], "</td>";
                            		echo "<td scope='row' class='p-3 text-center'>", $row["product_name"], "</td>";
                            		echo "<td scope='row' class='p-3 text-center'>", $row["variations"], "</td>";
                           			echo "<td scope='row' class='p-3 text-center'>", $row["sizes"], "</td>";
                            		echo "<td scope='row' class='p-3 text-center'>", $row["quantity"], "</td>";
                            		echo "<td scope='row' class='p-3 text-center'>", $row["price"], "</td>";
                            		echo "<td scope='row' class='p-3 text-center'>", $row["status"], "</td>";


									$counter = $counter == 0 ? 1 : 0;
								}

							}
							mysqli_close($conn);

							?>
						</tbody>
					</table>
				</div>
			</div>
		</body>	
		</html>