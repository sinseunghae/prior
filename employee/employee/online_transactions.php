<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Online Transactions</title>
	<link rel="stylesheet" href="css/ot_style.css">
	<link rel="shortcut icon" href="../images/dcdg.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<!--Boxicons CDN Link-->
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
		
	</style>
</head>
<body>
	<!-- Sidebar -->
	<?php include 'includes/sidebar_employee.php'; ?>
	
	<div class="content"><br>

		<div class="container"><br>
			<h1 class="display-5 font-weight-bold" style="text-align: center; color: #053742;">Online 
			Transactions</h1>

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
        </div></div></div><br>

        <!-- Table -->

			<div class="table-responsive-sm">       
				<table class="table table-bordered">

					<thead>
						<tr>
							<th>Order Date</th>
							<th>Name</th>
							<th>Contact Info</th>
							<th>Shipping Address</th>
							<th>Courier</th>
							<th>Orders</th>
							<th>Price</th>
							<th>Payment</th>
							<th>Status</th>
							<th>Action</th>
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

                    $sql = "SELECT * FROM order";
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
                            echo "<td scope='row' class='p-3 text-center'>", $row[""], "</td>";
                            echo "<td scope='row' class='p-3 text-center'>", $row[""], "</td>";
                            echo "<td scope='row' class='p-3 text-center'>", $row[""], "</td>";
                            echo "<td scope='row' class='p-3 text-center'>", $row[""], "</td>";
                            echo "<td scope='row' class='p-3 text-center'>", $row[""], "</td>";
                            echo "<td scope='row' class='p-3 text-center'>", $row[""], "</td>";
                           
                            $counter = $counter == 0 ? 1 : 0;
                        }

                    }
                    mysqli_close($conn);

                    ?>
						
					</tbody>
				</table>
			</div><br>
		</div>


						
						
					</tbody>
					
				</table>

			</div>

		</div>
	</div>

</body>
</html>
