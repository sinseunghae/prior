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
			<h1 class="display-5 font-weight-bold" style="color: #053742;">Cashier Dashboard</h1><br><br>


			<!-- Cards -->
			<div class="card-deck mx-auto">
				<div class="card border-dark mb-2 ml-6">
					<div class="card-body border-dark bg-transparent text-dark text-center p-4 ">
						<h4 class="card-title">₱ 5,000.00</h4>
					</div>
					<div class="card-footer border-dark bg-info text-white text-right p-1">Today's Sales&nbsp;&nbsp;<i class='bx bx-coin-stack'></i></div>
				</div>
				<div class="card border-dark mb-2 ml-6">
					<div class="card-body border-dark bg-transparent text-dark text-center p-4 ">
						<h4 class="card-title">2,000</h4>
					</div>
					<div class="card-footer border-dark bg-info text-white text-right p-1">Total Inventory&nbsp;&nbsp;<i class='bx bx-package'></i></div>
				</div>
				<div class="card border-dark mb-2 ml-6">
					<div class="card-body border-dark bg-transparent text-dark text-center p-4 ">
						<h4 class="card-title">3</h4>
					</div>
					<div class="card-footer border-dark bg-info text-white text-right p-1">Zero Stock Product&nbsp;&nbsp;<i class='bx bx-box'></i>
					</div>
				</div>
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
						<th>Status</th>
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
                            echo "<td scope='row' class='p-3 text-center'>", $row["status"], "</td>";


                            $counter = $counter == 0 ? 1 : 0;
                        }

                    }
                    mysqli_close($conn);

                    ?>

				</tbody>
			</table>
		</div>
	</body>	
	</html>