<?php
require_once('auth.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Cashier Dashboard</title>
	<link rel="stylesheet" href="css/employee_dashboard_style.css">
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
			<h1 class="display-5 font-weight-bold" style="color: #053742;">CASHIER DASHBOARD</h1><br>
			<h3 class="" style="" ><b>Welcome, <?php echo $_SESSION['employee_name']; ?>!</b></h3>
			<div class="row">

				<!-- Branch -->
				<div class="col">
					<h5 class="" style="color: #053742;"><i class='bx bxs-map-pin'></i> <?php 
					$branch = $_SESSION['Branch_ID'];
					if($branch == 1) {
						echo "Mabini Branch";
					} elseif ($branch == 2) {
						echo "Abanao Branch";
					} elseif ($branch == 3) {
						echo "Magsaysay Branch";
					} elseif ($branch == 4) {
						echo "Market Branch";
					}
					?></h5>
				</div>

				<!-- Date -->
				<div class="col">
					<h5 class="text-right" style="color: #053742;">
						<?php
						echo "<b>Date: </b>" . date("m/ d/ Y") . "";

						?>
					</h5>
				</div>
			</div><br><br>


			<!-- Cards -->
			<div class="card-deck mx-auto">

				<!-- Today Sales -->
				<div class="card border-dark mb-2 ml-6">
					<div class="card-body border-dark bg-transparent text-dark text-center p-4 ">
						<h2 class="card-title text-center">₱ 

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

							$date = date("Y-m-d");
							switch($branch){
								case '1':
								$sql = "SELECT SUM(amount) AS total FROM sales_activity WHERE sales_date like '%$date%' AND Branch_ID like '%$branch%'";
								break;
								case '2':
								$sql = "SELECT SUM(amount) AS total FROM sales_activity WHERE sales_date like '%$date%' AND Branch_ID like '%$branch%'";
								break;
								case '3':
								$sql = "SELECT SUM(amount) AS total FROM sales_activity WHERE sales_date like '%$date%' AND Branch_ID like '%$branch%'";
								break;
								case '4':
								$sql = "SELECT SUM(amount) AS total FROM sales_activity WHERE sales_date like '%$date%' AND Branch_ID like '%$branch%'";
								break;
							}

							$result = mysqli_query($conn, $sql);

							$count = 1;
							while ($row = mysqli_fetch_assoc($result)) {
								$total = $row['total'];

								$count++;
							}

							//echo $total; 
							echo number_format($total)."";

							mysqli_close($conn);
							?></h2>
						</div>
						<div class="card-footer border-dark bg-info text-white text-right p-1">Today's Sales <i class='bx bx-coin-stack'></i></div>
					</div>

					<!-- Total Inventory -->
					<div class="card border-dark mb-2 ml-6">
						<div class="card-body border-dark bg-transparent text-dark text-center p-4 ">
							<h2 class="card-title">
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
									echo "No Records";
								} 
								else
								{
									$rowcount = mysqli_num_rows($result);

									echo  $rowcount;
								}
								mysqli_close($conn);
								?>
							</h2>
						</div>
						<div class="card-footer border-dark bg-info text-white text-right p-1">Products&nbsp;&nbsp;<i class='bx bx-package'></i></div>
					</div>
				</div><br><br>


				<!-- Table -->
				<div class="table-responsive-lg">       
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Barcode</th>
								<th>Product Name</th>
								<th>Variation</th>
								<th>Size</th>
								<th>Qty.</th>
								<th>Price</th>
							</tr>
						</thead>
						<tbody>
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