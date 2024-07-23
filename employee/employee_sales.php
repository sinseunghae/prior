<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Sales</title>
	<link rel="stylesheet" href="css/employee_dashboard_style.css">
	<!--Boxicons CDN Link-->
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="shortcut icon" href="../images/dcdg.png" type="image/x-icon">
	<style>
		body { overflow-y: hidden; }
	</style>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="css/employee_sales_style.css">

	<!-- Sidebar -->
	<?php include 'includes/sidebar_employee.php'; ?>

	<!-- Sales -->
	<div class="content"><br>
		<div class="container">
			<h1 class="display-5 font-weight-bold" style="color: #053742;">Sales</h1>

			<div class="sales-head-info">
				<div>
					<span><b>Salesperson: </b></span>
					<span>Juan Dela Cruz</span>
				</div>

				<div>
					<span><b>Location/Branch: </b></span>
					<span>Upper Mabini St.</span>
				</div>
			</div>

			<br>

			<!-- Main Content -->
			<div class="sales-form-center">
		      <div class="tab">
		        <button class="tablinks" onclick="openProgress(event, 'Daily')" id="defaultOpen">Daily Sales</button>
		        <!--<button class="tablinks" onclick="openProgress(event, 'Weekly')">Weekly Sales</button>-->
		      </div>

		      <!-- Tab content -->
		      <div id="Daily" class="tabcontent">
		        <form action="/action_page.php" method="post">
		          <table class="table-striped" id="sales-info">
		            <thead>
		              <tr>
		              	<td colspan="2">Date</td>
		                <td colspan="2">Product ID</td>
		                <td colspan="2">Description</td>
		                <td colspan="2">Sales Amount</td>
		                <td colspan="2">Sales Tax</td>
		                <td colspan="2">Total</td>
		              </tr>
		            </thead>

		            <tbody>
		              <tr>
		                <td colspan="2" id="prod">04/30/2022</td>
		                <td colspan="2">123456789012</td>
		                <td colspan="2">Product Name</td>
		                <td colspan="2">₱ 0.00</td>
		                <td colspan="2">₱ 0.00</td>
		                <td colspan="2">₱ 0.00</td>
		              </tr>

		              <tr>
		                <td colspan="2" id="prod">04/30/2022</td>
		                <td colspan="2">123456789012</td>
		                <td colspan="2">Product Name</td>
		                <td colspan="2">₱ 0.00</td>
		                <td colspan="2">₱ 0.00</td>
		                <td colspan="2">₱ 0.00</td>
		              </tr>

		              <tr>
		                <td colspan="2" id="prod">04/30/2022</td>
		                <td colspan="2">123456789012</td>
		                <td colspan="2">Product Name</td>
		                <td colspan="2">₱ 0.00</td>
		                <td colspan="2">₱ 0.00</td>
		                <td colspan="2">₱ 0.00</td>
		              </tr>

		              <tr>
		                <td colspan="2" id="prod">04/30/2022</td>
		                <td colspan="2">123456789012</td>
		                <td colspan="2">Product Name</td>
		                <td colspan="2">₱ 0.00</td>
		                <td colspan="2">₱ 0.00</td>
		                <td colspan="2">₱ 0.00</td>
		              </tr>

		              <tr>
		                <td colspan="2" id="prod">04/30/2022</td>
		                <td colspan="2">123456789012</td>
		                <td colspan="2">Product Name</td>
		                <td colspan="2">₱ 0.00</td>
		                <td colspan="2">₱ 0.00</td>
		                <td colspan="2">₱ 0.00</td>
		              </tr>

		              <tr>
		                <td colspan="2" id="prod">04/30/2022</td>
		                <td colspan="2">123456789012</td>
		                <td colspan="2">Product Name</td>
		                <td colspan="2">₱ 0.00</td>
		                <td colspan="2">₱ 0.00</td>
		                <td colspan="2">₱ 0.00</td>
		              </tr>

		              <tr>
		                <td colspan="2" id="prod">04/30/2022</td>
		                <td colspan="2">123456789012</td>
		                <td colspan="2">Product Name</td>
		                <td colspan="2">₱ 0.00</td>
		                <td colspan="2">₱ 0.00</td>
		                <td colspan="2">₱ 0.00</td>
		              </tr>


		              <tr>
		                <td colspan="2" id="prod">04/30/2022</td>
		                <td colspan="2">123456789012</td>
		                <td colspan="2">Product Name</td>
		                <td colspan="2">₱ 0.00</td>
		                <td colspan="2">₱ 0.00</td>
		                <td colspan="2">₱ 0.00</td>
		              </tr>

		              <tr>
		                <td colspan="2" id="prod">04/30/2022</td>
		                <td colspan="2">123456789012</td>
		                <td colspan="2">Product Name</td>
		                <td colspan="2">₱ 0.00</td>
		                <td colspan="2">₱ 0.00</td>
		                <td colspan="2">₱ 0.00</td>
		              </tr>

		              <tr>
		                <td colspan="2" id="prod">04/30/2022</td>
		                <td colspan="2">123456789012</td>
		                <td colspan="2">Product Name</td>
		                <td colspan="2">₱ 0.00</td>
		                <td colspan="2">₱ 0.00</td>
		                <td colspan="2">₱ 0.00</td>
		              </tr>


		              <tr>
		                <td colspan="2" id="prod">04/30/2022</td>
		                <td colspan="2">123456789012</td>
		                <td colspan="2">Product Name</td>
		                <td colspan="2">₱ 0.00</td>
		                <td colspan="2">₱ 0.00</td>
		                <td colspan="2">₱ 0.00</td>
		              </tr>

		              <tr>
		                <td colspan="2" id="prod">04/30/2022</td>
		                <td colspan="2">123456789012</td>
		                <td colspan="2">Product Name</td>
		                <td colspan="2">₱ 0.00</td>
		                <td colspan="2">₱ 0.00</td>
		                <td colspan="2">₱ 0.00</td>
		              </tr>
		            </tbody>
		          </table>

		          <div align="right">
		          	<button class="generate-btn">Print</button>
		          	<button class="generate-btn">Save as PDF</button>
		          </div>
		        </form>
		      </div>

		      <!--
		      <div id="Weekly" class="tabcontent">
		        <form action="/action_page.php" method="post">
		          <table>
		            		            <thead>
		              <tr>
		              	<td colspan="2">Date</td>
		                <td colspan="2">Product ID</td>
		                <td colspan="2">Description</td>
		                <td colspan="2">Sales Amount</td>
		                <td colspan="2">Sales Tax</td>
		                <td colspan="2">Total</td>
		              </tr>
		            </thead>

		            <tbody>
		              <tr>
		                <td colspan="2" id="prod">04/30/2022</td>
		                <td colspan="2">₱ 230.00</td>
		                <td colspan="2">x1</td>
		                <td colspan="2">₱ 280.00</td>
		                <td colspan="2">Ready to Ship</td>
		                <td colspan="2"></td>
		              </tr>
		            </tbody>
		          </table>
		        </form>
		      </div>-->
		    </div>
		</div>
	</div>

	<script type="text/javascript">
      document.getElementById("defaultOpen").click();

      function openProgress(evt, openProgress) {
        var i, tabcontent, tablinks;

        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }

        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        document.getElementById(openProgress).style.display = "block";
        evt.currentTarget.className += " active";
      }
    </script>
</body>	
</html>