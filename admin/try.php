<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Employee Accounts</title>
	<link rel="stylesheet" href="css/employee_accounts.css">
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

		<!-- Cards -->
		<div class="card-deck mx-auto">
			<div class="card border-dark">
				<div class="card-body border-dark text-dark text-center p-3 ">
					<h3 class="card-title">1</h3>
				</div>
				<div class="card-footer border-dark text-white text-center p-2">EMPLOYEE</div>
			</div>
			<div class="card border-dark"><a href="guest_accounts.php">
				<div class="card-body border-dark text-dark text-center p-3 ">
					<h3 class="card-title">1</h3>
				</div>
				<div class="card-footer border-dark text-white text-center p-2">GUEST</div>
			</div></a>
		</div><br><br>


		<div class="container">
			<h1 class="display-5 font-weight-bold text-center" style="color: #053742;">Employee Accounts</h1>
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
        </div></div></div><br>




		<!-- Table -->
		<div class="search-list">
		<div class="table-responsive-lg">       
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Employee ID</th>
						<th>Name</th>
						<th>Username</th>
						<th>Contact Number</th>
						<th>Email</th>
						<th>Branch</th>
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

                    $sql = "SELECT * FROM employee";
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
                            echo "<td scope='row' class='p-3 text-center'>", $row["employee_ID"], "</td>";
                            echo "<td scope='row' class='p-3 text-center'>", $row["employee_name"], "</td>";
                            echo "<td scope='row' class='p-3 text-center'>", $row["contact_Number"], "</td>";
                            echo "<td scope='row' class='p-3 text-center'>", $row["employee_username"], "</td>";
                            echo "<td scope='row' class='p-3 text-center'>", $row["email"], "</td>";
                            echo "<td scope='row' class='p-3 text-center'>", $row["Branch_ID"], "</td>";
                           
                            $counter = $counter == 0 ? 1 : 0;
                        }

                    }
                    mysqli_close($conn);

                    ?>
						
					</tbody>
				</table>
			</div><br>
		</div>


			<!-- Add -->
			<div align="left">
				<button class="add-btn"><a href="add_employee.php">Add Account</a></button>
			</div>
		</body>	
		</html>