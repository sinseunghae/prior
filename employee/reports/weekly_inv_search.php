<head>
	<!--FOR ICONS-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!--SALES SEARCH STYLE-->
	<link rel="stylesheet" type="text/css" href="sales_search.css">

	<title>Weekly Inventory</title>
</head>

<body>
	<!--DATABASE CONNECTION-->
	<?php include "config.php"; ?>

	<!-- Sidebar -->
	<?php include 'sidebar_employee.php'; ?>

    <!--SEARCH SALES-->
    <div class="content">
    	<div id="content">
    		<?php 
	    		$employee = $_SESSION['employee_name'];
		      	$date_from = $_POST['date_from'];
		      	$date_to = date('Y-m-d', strtotime('+6 days', strtotime($date_from)));
	    		$branch = $_SESSION['Branch_ID'];
	    	?>

	    	<table id="salesinfo">
	    		<thead>
	    			<tr class="center">
	    				<th colspan="12">DIAMOND COLOURS DRY GOODS</th>
	    			</tr>

	    			<tr class="center">
	    				<th colspan="12">
			    			<p> Weekly Inventory Report </p>
	    				</th>
	    			</tr>

	    			<tr id="left">
	    				<th colspan="6"> <p> Employee: <?php echo $employee; ?></p> </th>
	    			</tr>

	    			<tr id="left">
	    				<th colspan="6"> Date: <?php echo $date_from; ?> to <?php echo $date_to; ?>  </th>

	    				<th colspan="6"> <p>Branch:
	    				<?php 
			      			if($branch == 1) {
			      				echo "Mabini";
			      			} elseif ($branch == 2) {
			      				echo "Abanao";
			      			} elseif ($branch == 3) {
			      				echo "Magsaysay";
			      			} elseif ($branch == 4) {
			      				echo "Market";
			      			}
			      		?>
			      		</p> </th>
	    			</tr>
	    		</thead>
	    	</table>

			<table class="table-striped" id="salesreport">
			    <thead>
			        <tr>
			          <th colspan="2">PRODUCT ID</th>
			          <th colspan="2">DESCRIPTION</th>
			          <th colspan="1">PRICE</th>
			          <th colspan="2">ON-HAND QTY</th>
			          <th colspan="2">QTY SOLD</th>
			          <th colspan="2">ACTUAL ITEM COUNT</th>
			          <th colspan="1">TOTAL</th>
			        </tr>
			    </thead>

			    <tbody>
			        <?php 
			        	if($branch == 1) {
			      			$result = mysqli_query($con, "SELECT branch1.pro_id, branch1.product_name, branch1.quantity, branch1.price, sum(sales_transac.quantity) as quantity2, sum(sales_transac.amount) as total FROM branch1 INNER JOIN sales_transac ON branch1.barcode = sales_transac.barcode INNER JOIN sales_activity ON sales_transac.invoice = sales_activity.invoice WHERE (sales_transac.sales_date between '$date_from' and '$date_to') and (sales_activity.Branch_ID like '%$branch%') GROUP BY branch1.barcode");
						
						} elseif ($branch == 2) {
			      			$result = mysqli_query($con, "SELECT branch1.pro_id, branch2.product_name, branch2.quantity, branch1.price, sum(sales_transac.quantity) as quantity2, sum(sales_transac.amount) as total FROM branch2 INNER JOIN sales_transac ON branch2.barcode = sales_transac.barcode INNER JOIN sales_activity ON sales_transac.invoice = sales_activity.invoice  WHERE (sales_transac.sales_date between '$date_from' and '$date_to') and (sales_activity.Branch_ID like '%$branch%') GROUP BY branch2.barcode");

			      		} elseif ($branch == 3) {
			      			$result = mysqli_query($con, "SELECT branch1.pro_id, branch2.product_name, branch2.quantity, branch1.price, sum(sales_transac.quantity) as quantity2, sum(sales_transac.amount) as total FROM branch2 INNER JOIN sales_transac ON branch2.barcode = sales_transac.barcode INNER JOIN sales_activity ON sales_transac.invoice = sales_activity.invoice  WHERE (sales_transac.sales_date between '$date_from' and '$date_to') and (sales_activity.Branch_ID like '%$branch%') GROUP BY branch2.barcode");

			      		} elseif ($branch == 4) {
			      			$result = mysqli_query($con, "SELECT branch1.pro_id, branch2.product_name, branch2.quantity, branch1.price, sum(sales_transac.quantity) as quantity2, sum(sales_transac.amount) as total FROM branch2 INNER JOIN sales_transac ON branch2.barcode = sales_transac.barcode INNER JOIN sales_activity ON sales_transac.invoice = sales_activity.invoice  WHERE (sales_transac.sales_date between '$date_from' and '$date_to') and (sales_activity.Branch_ID like '%$branch%') GROUP BY branch2.barcode");
			      		}

			          	$count = 1;
			              while ($row = mysqli_fetch_assoc($result)) {
			              	$product_id = $row['pro_id'];
			              	$product_name = $row['product_name'];
			              	$product_price = $row['price'];
			              	$start_qty = $row['quantity'] + $row['quantity2'];
			              	$qty_sold = $row['quantity2'];
			              	$end_qty = $row['quantity'];
			              	$total = $row['total'];
			        ?>

			        <tr>
			          	<td scope='row' colspan="2" id="left_align"><?= $product_id ?></td>
			            <td scope='row' colspan="2" id="left_align"><?= $product_name ?></td>
			            <td scope='row' colspan="1">₱ <?= $product_price ?></td>
			            <td scope='row' colspan="2"><?= $start_qty ?></td>
			            <td scope='row' colspan="2"><?= $qty_sold ?></td>
			            <td scope='row' colspan="2"><?= $end_qty ?></td>
			            <td scope='row' colspan="1" id="right_align">₱ <?= $total ?></td>
			        </tr>
			            <?php
			              $count++;
			            }
			            ?>
			    </tbody>
			</table>

			<div class="row" id="row-foot">
		    	<?php 
		    		$result = mysqli_query($con, "SELECT sum(amount) as total FROM sales_activity WHERE (sales_date between '$date_from' and '$date_to') and (Branch_ID like '%$branch%')");
		            $total_sales = mysqli_fetch_assoc($result);
		        ?>
		    	<div class="col col-12">
		    		<p>
		    			Total Sales: ₱ <?= $total_sales["total"] ?>
		    		</p>
		    	</div>
		    </div>
    	</div>

    	<!--BUTTONS-->
	    <div class="btn-options">
			<a href="inventory_report.php" style="text-decoration:none;">
				<button type="submit">
					<i class="material-icons">arrow_back</i> Back
				</button>
			</a>

			<button id="download-button">
				<i class="material-icons">print</i> CSV
			</button>

			<button id="export" onclick="createPDF()">
				<i class="material-icons">print</i> PDF
			</button>

			<button id="export" onclick="exportTableToExcel('content')">
				<i class="material-icons">print</i> Excel
			</button>
		</div>
    </div>

    <!--FOR CSV DOWNLOAD-->
	<?php include "csv.php"; ?> 

	<!--FOR PDF DOWNLOAD-->
	<?php include "pdf.php"; ?> 

	<!--FOR EXCEL DOWNLOAD-->
	<?php include "excel.php"; ?> 
</body>