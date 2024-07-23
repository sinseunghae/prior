<head>
	<title>Yearly Sales</title>
	
	<style type="text/css">
		table{
			width: 100%;
			margin-top: 50px;
		}

		table thead {
			background-color: #CFDAC8; 
		}

		table tbody {
			background-color: #fff;
			text-align: center;
			font-size: 16px;
		}
		table thead tr th{
			font-size: 16px;
			font-weight: medium;
			color: black;
			opacity: 2;
			vertical-align: top;
			text-align: center;
		}

		table thead tr th h4 { font-weight: bolder; }

		table.table-bordered > thead > tr > th{
			border: 1px solid;
			border-color:black;
			padding: 10px;
		}
		table.table-bordered > tbody > tr > td{
			border: 1px solid;
			border-color:black;
			padding: 10px;
		}

		table.table-bordered > tfoot > tr > td{
			border: 1px solid;
			border-color:white;
			padding: 10px;
			text-align: right;
			font-weight: bolder;
		}

		#left-align { 
			text-align: left; 
			background-color: #F8EDE3;
			font-size: 18px;
		}

		.bg-gray { background-color: #E8EAE6; }
		}
	</style>
</head>

<body>
	<!--DATABASE CONNECTION-->
	<?php include "config.php"; ?>

	<!--ADMIN SIDEBAR-->
	<?php include "sidebar.php"; ?>

    <!--SEARCH SALES-->
    <div class="content">
		<?php 
	      	$year = $_POST['year'];
	        $branch = $_POST['branch'];
	    ?>
		<table class="table-bordered">
	      <thead>
	      	<tr>
	      		<th colspan="4"><h4>DIAMOND COLOURS DRY GOODS</h4></th>
	      	</tr>

	      	<tr>
	      		<th colspan="4">Sales Report for Year <?php echo $year; ?></th>
	      	</tr>

	      	<tr>
	      		<th colspan="2" id="left-align">Employee: </th>
	      		<th colspan="2" id="left-align">Branch: <?php echo $branch; ?></th>
	      	</tr>

	        <tr>
	          <!--<th>PRODUCT ID</th>-->
	          <th class="bg-gray">PRODUCT NAME</th>
	          <th class="bg-gray">PRICE</th>
	          <th class="bg-gray">QUANTITY</th>
	          <th class="bg-gray">TOTAL</th>
	        </tr>
	      </thead>

	      <tbody>
	        <?php 
	          	$result = mysqli_query($con, "SELECT products.product_id, products.prod_name, products.prod_price, sum(sales.quantity) as quantity, sum(sales.total_amount) as total  FROM products, sales WHERE (products.product_id=sales.product_id) and (year(sales.sales_date)='$year') and (sales.branch_id like '%$branch%') GROUP BY product_id");

	          	$count = 1;
	              while ($row = mysqli_fetch_assoc($result)) {
	        ?>

	        <tr>
	          	<!--<td scope='row' class='text-center'><?= $row["product_id"] ?></td>-->
	            <td scope='row' class='text-center'><?= $row["prod_name"] ?></td>
	            <td scope='row' class='text-center'><?= $row["prod_price"] ?></td>
	            <td scope='row' class='text-center'><?= $row["quantity"] ?></td>
	            <td scope='row' class='text-center'><?= $row["total"] ?></td>
	        </tr>
	            <?php
	              $count++;
	            }
	            ?>
	        </tbody>

	        <tfoot>
	            <?php 
	              $result2 = mysqli_query($con, "SELECT sum(total_amount) as total FROM sales WHERE (year(sales.sales_date)='$year') and (branch_id like '%$branch%')");
	              $total_sales = mysqli_fetch_assoc($result2);
	            ?>

	            <tr>
	              <td colspan="12">
	                <h5>Total Sales: <?= $total_sales["total"] ?></h5>
	              </td>
	            </tr>
	    	</tfoot>
	    </table>

	    <br />
		<a href="yearly_sales.php" style="text-decoration:none;">
			<button type="submit" class="btn btn-info">Back</button>
		</a>

		<button id="download-button" class="btn btn-info">Download CSV</button>
    </div>

    <script type="text/javascript">
    	function downloadCSVFile(csv, filename) {
		    var csv_file, download_link;

		    csv_file = new Blob([csv], {type: "text/csv"});

		    download_link = document.createElement("a");

		    download_link.download = filename;

		    download_link.href = window.URL.createObjectURL(csv_file);

		    download_link.style.display = "none";

		    document.body.appendChild(download_link);

		    download_link.click();
		}

		document.getElementById("download-button").addEventListener("click", function () {
			    var html = document.querySelector("table").outerHTML;
				htmlToCSV(html, "sales_report.csv");
			});


		function htmlToCSV(html, filename) {
			var data = [];
			var rows = document.querySelectorAll("table tr");
						
			for (var i = 0; i < rows.length; i++) {
				var row = [], cols = rows[i].querySelectorAll("td, th");
							
				for (var j = 0; j < cols.length; j++) {
					row.push(cols[j].innerText);
			    }
					        
				data.push(row.join(","));		
			}

			//to remove table heading
			//data.shift()
			downloadCSVFile(data.join("\n"), filename);
		}
    </script>         
</body>