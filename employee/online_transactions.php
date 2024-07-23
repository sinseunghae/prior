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
	
	<style type="text/css">
	.bootstrap-tagsinput .tag {
		margin-right: 2px;
		color: white;
		border-radius: 5px;
		background-color: #1687A7;
		padding: 0.2rem;
	}

	a{

		font-size:1em;
		color: white; 
		text-decoration: none;
	}

	#am{

		font-size:1em;
		color: white; 
		text-decoration: none;
	}

	#am:hover{
		color: white;
	}

	#a1{
		color: white;
		font-size:1.125em;    
	}

	#a1:hover{
		color: white; 
	}

	select {
		padding:  1px 45px;
		color:  black;
		background-color: white;
		cursor: pointer;
		border-color: white;
		border-radius: 5px;
		height: 45px;
		width: 100%;
		text-align: left;
	}

	select: focus, select; hover: {
		outline: none;
		border-color: #276678;
	}

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
			<div class='container table-responsive-lg'>
				<table border='1'  class="table table-bordered">
					<thead>
						<tr>
							<th>ID</th>
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
						$query = "SELECT * FROM ";
						$result = mysqli_query($con, $query);

						$count = 1;
						while ($row = mysqli_fetch_assoc($result)) {
							$ = $row[""];
							$ = $row[""];
							$ = $row[""];
							$ = $row[""];
							$ = $row[""];
							$ = $row[""];
							$ = $row[""];
							$ = $row[""];

							?>
							<tr>
								<td scope='row' class=' text-center'></td>
								<td scope='row' class=' text-center'></td>
								<td scope='row' class=' text-center'></td>
								<td scope='row' class=' text-center'></td>
								<td scope='row' class=' text-center'></td>
								<td scope='row' class=' text-center'><div class="input-box">
						        <span class="details">Status</span>
						        <select name ="size">
						          <option>Pending</option>
						          <option>Order Accepted</option>
						          <option>Preparing</option>
						          <option>Ready to ship</option>
						      </select>
						    </div></td>


							</tr>
							<?php
							$count++;
						}
						?>
					</tbody> 
				</table>



				<div class="form-group" align="center">
					<div><br>
						<button type="button" class="btn btn-info"><a id="am" href = ".php"><b>Back</b></button></a>
					</div>
				</div>

			</div>

		</div>

	</div>
</div>

</body>
</html>
