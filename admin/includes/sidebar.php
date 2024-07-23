<?php
	require_once('auth.php');
?>
<head>
	<link rel="shortcut icon" href="../images/dcdg.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<!--Boxicons CDN Link-->
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<style>
		body {
			margin: 0;
			font-family: "Lato", sans-serif;
		}

		div.content {
			margin-left: 300px;
			padding: 1px 16px;
			height: 1000px;
		}

		.sidebar {
			margin: 0;
			padding: 0;
			width: 285px;
			background: #053742;
			position: fixed;
			height: 100%;
			overflow: hidden;
			font-family: "Arial", sans-serif;
			z-index:10;
		}

		.sidebar a {
			display: block;
			color: white;
			padding: 12px;
			text-decoration: none;
			transition:all 0.3s ease;
		}

		.sidebar .nav_list{
			padding: 5px;
			border-radius: 12px;
		}

		.sidebar .nav_list a:hover {
			color:#053742;
			background: #fff;
			border-radius: 8px;

		}

		.sidebar .logo_content .logo {
			color: #fff;
			display: flex;
			height: 50px;
			width: 90%;
			align-items: center;
			opacity: 1;
			pointer-events: none;
			transition:all 0.5s ease;
		}

		.sidebar .logo_content .logo img{
			height: 50px;
		}

		.logo_content .logo .logo_name {
			font-size: :108px;
			font-weight: 400;
		}

		.sidebar .profile_content {
			position: absolute;
			color: #fff;
			bottom: 0;
			left:0;
			width: 100%;
			height: 50px;
		}

		.sidebar .profile_content .profile{
			position: relative;
			padding: 15px 20px;
			height: 50px;
			background: #39A2DB;
			transition: all 0.4s ease;
		}

		.profile_content .profile .profile_details{
			display: flex;
			align-items: center;
			opacity: 1;
			pointer-events: none;
			white-space: nowrap;
			font-family: "Arial", sans-serif;
		}

		.profile .profile_details .job{
			font-size: 15px;
			font-weight: 400;
		}

		.profile a #log_out{
			position: absolute;
			transform:translateX(-30%);
			left: 200px;
			bottom: 9px;
			padding: 0px 3%;
			min-width: 70px;
			line-height: 30px;
			font-size: 15px;
			border-radius:8px;
			text-align: center;
			transition: all 0.4s ease;
			background: #39A2DB;
			text-decoration: none;
			color:white;
			
		}

		.profile a #log_out span{
			font-family: "Lato", sans-serif;
		}
		.profile a #log_out:hover{
			background: #2E82AF;
		}

		@media screen and (max-width: 700px) {
			.sidebar {
				width: 100%;
				/*				height: auto;*/
				position: relative;
				height: 40%;
			}
			.sidebar a {float: left;}
			div.content {margin-left: 0;}
		}

		@media screen and (max-width: 400px) {
			.sidebar a {
				text-align: center;
				float: none;
			}
		}
	</style>
</head>

<body>
	<div class="sidebar">
		<div class="logo_content" style="background-color: #39A2DB;">
			<div class="logo">
				<img src="../images/DCDG.png" alt="DCDG">
				<div class="logo_name">Diamond Colours Dry Goods</div>
			</div>
		</div><br>
		<div class= "nav_list">
			<a href="admin_dashboard.php">
				<i class='bx bx-grid-alt'></i>
				<span class="links_name">Dashboard</span>
			</a>
			<a href="employee_accounts.php">
				<i class='bx bx-user'></i>
				<span class="links_name">User</span>
			</a>
			<a href="branch_inventory.php">
				<i class='bx bx-box'></i>
				<span class="links_name">Inventory</span>
			</a>
			<a href="products.php">
				<i class='bx bx-box'></i>
				<span class="links_name">Products</span>
			</a>
			<a href="damage_list.php">
				<i class='bx bx-x-circle'></i>				
				<span class="links_name">Damage/Missing</span>
			</a>
			<a href="purchase_order.php">
				<i class='bx bx-cart'></i>
				<span class="links_name">Purchase Order</span>
			</a>
			<a href="sales_order.php">
				<i class='bx bx-notepad'></i>
				<span class="links_name">Sales Order</span>
			</a>
			<a href="sales_activity.php">
				<i class='bx bx-notepad'></i>
				<span class="links_name">Sales Actvity</span>
			</a>
			<a href="suppliers.php">
				<i class='bx bxs-store'></i>
				<span class="links_name">Supplier</span>
			</a>	
			<a href="barcode.php">
				<i class='bx bx-barcode' ></i>
				<span class="links_name">Barcode</span>
			</a>
			<a href="reports.php">
				<i class='bx bxs-report' ></i>
				<span class="links_name">Report</span>
			</a>
			<a href="admin_settings.php">
				<i class='bx bx-cog'></i>
				<span class="links_name">Settings</span>
			</a>
		</div>
		<div class="profile_content">
			<div class="profile">
				<div class="profile_details">
					<i class='bx bx-user'></i>
					<div class="job">
						<div class="job_position">&nbsp;<?php echo $_SESSION['Name']; ?></div>
					</div>
				</div>
				<a href="includes/logout.php"><i class='bx bx-log-out' id="log_out"><span>&nbsp;Logout</span></i></a>
			</div>
		</div>
	</div>
</body>