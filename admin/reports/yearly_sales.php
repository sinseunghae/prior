<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

	<title>Yearly Sales</title>

	<style type="text/css">
		#report-title { 
			margin: 30px 0px 50px 0px; 
			font-family: 'Poppins', sans-serif;
		}

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
		  border: 1px solid #053742;
		  background-color: #053742;
		  margin-top: 50px;
		  font-family: 'Poppins', sans-serif;
		}

		.tab button {
		  background-color: #053742;
		  color: #fff;
		  float: left;
		  border: none;
		  outline: none;
		  cursor: pointer;
		  padding: 14px 16px;
		  transition: 0.3s;
		}

		.tab button:hover {
		  background-color: #ddd;
		  color: #000;
		}

		.tab button.active {
		  background-color: #A2DBFA;
		  color: #000;
		}

		.tabcontent {
		  display: none;
		  padding: 6px 12px;
		  border: 1px solid #053742;
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
    		<button class="tablinks" onclick="openBranch(event, 'Branch')" id="defaultOpen">Branch</button>
  			<button class="tablinks" onclick="openBranch(event, 'All')">All Branches</button>
    	</div>

    	<div id="Branch" class="tabcontent">
    		<h3 id="report-title">Yearly Sales Reports</h3>

	    	<?php 
	    		$branch_num = mysqli_query($con, "SELECT Branch_ID FROM sales_activity GROUP BY Branch_ID");
	    	?>

			<form method="post" action="yearly_search.php" class="form-inline">
				<div class="form-group">
					<label for="year" class="search-lbl">Year: </label>
					<select name="year" class="form-control">
						<?php
			                for($n=2022;$n<=2050;$n++){
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

						<option value="<?= $row["Branch_ID"] ?>">
							<?php 
								if($row["Branch_ID"] == 1) {
				      				echo "Mabini";
				      			} elseif ($row["Branch_ID"] == 2) {
				      				echo "Abanao";
				      			} elseif ($row["Branch_ID"] == 3) {
				      				echo "Magsaysay";
				      			} elseif ($row["Branch_ID"] == 4) {
				      				echo "Market";
				      			}
							?>
						</option>
						<?php
			              $count++;
			            }
			            ?>
					</select>
				</div>
				<button type="submit" name="search" class="btn btn-primary">Search</button>
			</form>
    	</div>

    	<div id="All" class="tabcontent">
    		<h3 id="report-title">Yearly Sales Reports</h3>

			<form method="post" action="yearly_search_all.php" class="form-inline">
				<div class="form-group">
					<label for="year" class="search-lbl">Year: </label>
					<select name="year" class="form-control">
						<?php
			                for($n=2022;$n<=2050;$n++){
			                    ?>
			                    <option value="<?php echo $n; ?>"><?php echo $n; ?></option>
			                    <?php
			                }
			            ?>
					</select>
				</div>
				<button type="submit" name="search" class="btn btn-primary">Search</button>
			</form>
    	</div>
    </div>

    <script type="text/javascript">
		document.getElementById("defaultOpen").click();

		function openBranch(evt, branchName) {
		  var i, tabcontent, tablinks;

		  tabcontent = document.getElementsByClassName("tabcontent");
		  for (i = 0; i < tabcontent.length; i++) {
		    tabcontent[i].style.display = "none";
		  }

		  tablinks = document.getElementsByClassName("tablinks");
		  for (i = 0; i < tablinks.length; i++) {
		    tablinks[i].className = tablinks[i].className.replace(" active", "");
		  }

		  document.getElementById(branchName).style.display = "block";
		  evt.currentTarget.className += " active";
		}
	</script>
</body>