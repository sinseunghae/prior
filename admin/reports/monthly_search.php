<head>
	<!--FOR ICONS-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!--SALES SEARCH STYLE-->
	<link rel="stylesheet" type="text/css" href="sales_search.css">

	<title>Monthly Sales</title>
</head>

<body>
	<!--DATABASE CONNECTION-->
	<?php include "config.php"; ?>

	<!--ADMIN SIDEBAR-->
	<?php include "sidebar.php"; ?>

    <!--SEARCH SALES-->
    <div class="content" id="content">
		<?php 
	      	$month = $_POST['month'];
	      	$year = $_POST['year'];
	        $branch = $_POST['branch'];
	    ?>

	    <table id="salesinfo">
    		<thead>
    			<tr class="center">
    				<th colspan="12">DIAMOND COLOURS DRY GOODS</th>
    			</tr>

    			<tr class="center">
    				<th colspan="12">
    					<?php $newMonth = date('F', mktime(0, 0, 0, $month)); ?>
		    			<p>
		    				Sales Report for the Month of <?php echo $newMonth; ?>  <?php echo $year; ?>
		    			</p>
    				</th>
    			</tr>

    			<tr id="left">
    				<th colspan="6"> <p>Employee: </p> </th>

    				<th colspan="6"> 
    					<p>Branch: 
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
    					</p> 
    				</th>
    			</tr>
    		</thead>
    	</table>

		<table class="table-striped" id="salesreport">
	      <thead>
	        <tr>
		          <th colspan="2">PRODUCT ID</th>
		          <th colspan="4">DESCRIPTION</th>
		          <th colspan="2">PRICE</th>
		          <th colspan="2">QUANTITY</th>
		          <th colspan="2">TOTAL</th>
		    </tr>
	      </thead>

	      <tbody>
	        <?php

	        	$result = mysqli_query($con, "SELECT product.product_id, product.product_name, product.product_price, sum(sales_transac.quantity) as quantity, sum(sales_transac.amount) as total FROM sales_activity INNER JOIN sales_transac ON sales_activity.invoice = sales_transac.invoice INNER JOIN product ON sales_transac.barcode = product.barcode WHERE (month(sales_activity.sales_date)='$month' and year(sales_activity.sales_date)='$year') and (sales_activity.Branch_ID like '%$branch%') GROUP BY product.barcode");

	          	$count = 1;
	            while ($row = mysqli_fetch_assoc($result)) {
	        ?>

	        <tr>
		          	<td scope='row' colspan="2" id="left_align"><?= $row["product_id"] ?></td>
		            <td scope='row' colspan="4" id="left_align"><?= $row["product_name"] ?></td>
		            <td scope='row' colspan="2">₱ <?= $row["product_price"] ?></td>
		            <td scope='row' colspan="2"><?= $row["quantity"] ?></td>
		            <td scope='row' colspan="2" id="right_align">₱ <?= $row["total"] ?></td>
		    </tr>
	            <?php
	              $count++;
	            }
	            ?>
	        </tbody>
	    </table>

	    <div class="row" id="row-foot">
	    	<?php 
	    		$result = mysqli_query($con, "SELECT sum(amount) as total FROM sales_activity WHERE (month(sales_date)='$month' and year(sales_date)='$year') and (Branch_ID like '%$branch%')");

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
		<a href="monthly_sales.php" style="text-decoration:none;">
			<button type="submit">Back</button>
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

    <!--FOR CSV DOWNLOAD-->
	<?php include "csv.php"; ?> 

	<!--FOR PDF DOWNLOAD-->
	<?php include "pdf.php"; ?>

	<!--FOR EXCEL DOWNLOAD-->
	<?php include "excel.php"; ?> 
</body>