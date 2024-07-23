<head>
	<title>Monthly Sales</title>

	<style type="text/css">
		#report-title { margin: 30px 0px 50px 0px; }

		.search-lbl {
			padding-right: 15px;
			font-weight: bold;
		}

		table{
			width: 100%;
		}

		table thead {
			background-color: #39A2DB;
		}

		table tbody {
			background-color: #D3E0EA;
			text-align: center;
			font-size: 16px;
		}
		table thead tr th{
			font-size: 16px;
			font-weight: medium;
			color: black;
			opacity: 2;
			vertical-align: top;
			border: 1px solid #dee2e685;
			text-align: center;
		}

		table.table-bordered > thead > tr > th{
			border: 1px solid;
			border-color:white;
			padding: 10px;
		}
		table.table-bordered > tbody > tr > td{
			border: 1px solid;
			border-color:white;
			padding: 10px;
		}

		/*TAB STYLE START*/
		.tab {
		  overflow: hidden;
		  border: 1px solid #ccc;
		  background-color: #f1f1f1;
		}

		.tab button {
		  background-color: inherit;
		  float: left;
		  border: none;
		  outline: none;
		  cursor: pointer;
		  padding: 14px 16px;
		  transition: 0.3s;
		}

		.tab button:hover {
		  background-color: #ddd;
		}

		.tab button.active {
		  background-color: #ccc;
		}

		.tabcontent {
		  display: none;
		  padding: 6px 12px;
		  border: 1px solid #ccc;
		  border-top: none;
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
    	<div class="tab">
    		<button class="tablinks" onclick="openCity(event, 'Branch')" id="defaultOpen">Branch</button>
  			<button class="tablinks" onclick="openCity(event, 'All')">All</button>
    	</div>

    	<div id="Branch" class="tabcontent">
    		<h1 id="report-title">Monthly Sales Reports</h1>

	    	<?php 
	    		$branch_num = mysqli_query($con, "SELECT branch_id FROM sales GROUP BY branch_id");
	    	?>

			<form method="post" action="monthly_search.php" class="form-inline">
				<div class="form-group">
					<label for="month" class="search-lbl">Month: </label>
					<select name="month" class="form-control">
						<?php
			                for ($i = 1; $i <= 12; $i++)
			                {
			                    $month = date('F', mktime(0, 0, 0, $i, 1, 2010));
			                    ?>
			                    <option value="<?php echo $i; ?>"><?php echo $month; ?></option>
			                    <?php
			                }
			            ?>
					</select>

					<label for="year" class="search-lbl">Year: </label>
					<select name="year" class="form-control">
						<?php
			                for($n=2010;$n<=2050;$n++){
			                    ?>
			                    <option value="<?php echo $n; ?>"><?php echo $n; ?></option>
			                    <?php
			                }
			            ?>
					</select>
					
					<label for="branch" class="search-lbl">Branch</label>
					<select name="branch" class="form-control">
						<?php 
							$count = 1;
		              		while ($row = mysqli_fetch_assoc($branch_num)) {
						?>

						<option value="<?= $row["branch_id"] ?>">
							<?php echo $row["branch_id"] ?>
						</option>
						<?php
			              $count++;
			            }
			            ?>
					</select>
				</div>
				<button type="submit" name="search" class="btn btn-primary">Search</button>
			</form>
					
			<br />

			<table class="table-bordered" id="reports-tbl">
		      <thead>
		        <tr>
		          <th>PRODUCT ID</th>
		          <th>PRODUCT NAME</th>
		          <th>PRICE</th>
		          <th>QUANTITY</th>
		          <th>TOTAL</th>
		        </tr>
		      </thead>

		      <tbody>
		        <?php 
		          $result = mysqli_query($con, "SELECT products.product_id, products.prod_name, products.prod_price, sum(sales.quantity) as quantity, sum(sales.total_amount) as total  FROM products, sales WHERE products.product_id=sales.product_id GROUP BY product_id");

		          $count = 1;
		              while ($row = mysqli_fetch_assoc($result)) {
		        ?>

		        <tr>
		          <td scope='row' class='text-center'><?= $row["product_id"] ?></td>
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
		    </table>
    	</div>

    	<div id="All" class="tabcontent">
    		<h1 id="report-title">Monthly Sales Reports</h1>

	    	<?php 
	    		$branch_num = mysqli_query($con, "SELECT branch_id FROM sales GROUP BY branch_id");
	    	?>

			<form method="post" action="monthly_search_all.php" class="form-inline">
				<div class="form-group">
					<label for="month" class="search-lbl">Month: </label>
					<select name="month" class="form-control">
						<?php
			                for ($i = 1; $i <= 12; $i++)
			                {
			                    $month = date('F', mktime(0, 0, 0, $i, 1, 2010));
			                    ?>
			                    <option value="<?php echo $i; ?>"><?php echo $month; ?></option>
			                    <?php
			                }
			            ?>
					</select>

					<label for="year" class="search-lbl">Year: </label>
					<select name="year" class="form-control">
						<?php
			                for($n=2010;$n<=2050;$n++){
			                    ?>
			                    <option value="<?php echo $n; ?>"><?php echo $n; ?></option>
			                    <?php
			                }
			            ?>
					</select>
				</div>
				<button type="submit" name="search" class="btn btn-primary">Search</button>
			</form>
					
			<br />

			<table class="table-bordered" id="reports-tbl">
		      <thead>
		        <tr>
		          <th>PRODUCT ID</th>
		          <th>PRODUCT NAME</th>
		          <th>PRICE</th>
		          <th>QUANTITY</th>
		          <th>TOTAL</th>
		        </tr>
		      </thead>

		      <tbody>
		        <?php 
		          $result = mysqli_query($con, "SELECT products.product_id, products.prod_name, products.prod_price, sum(sales.quantity) as quantity, sum(sales.total_amount) as total  FROM products, sales WHERE products.product_id=sales.product_id GROUP BY product_id");

		          $count = 1;
		              while ($row = mysqli_fetch_assoc($result)) {
		        ?>

		        <tr>
		          <td scope='row' class='text-center'><?= $row["product_id"] ?></td>
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
		    </table>
    	</div>
    </div>

    <script type="text/javascript">
		document.getElementById("defaultOpen").click();

		function openCity(evt, cityName) {
		  var i, tabcontent, tablinks;

		  tabcontent = document.getElementsByClassName("tabcontent");
		  for (i = 0; i < tabcontent.length; i++) {
		    tabcontent[i].style.display = "none";
		  }

		  tablinks = document.getElementsByClassName("tablinks");
		  for (i = 0; i < tablinks.length; i++) {
		    tablinks[i].className = tablinks[i].className.replace(" active", "");
		  }

		  document.getElementById(cityName).style.display = "block";
		  evt.currentTarget.className += " active";
		}
	</script>
</body>