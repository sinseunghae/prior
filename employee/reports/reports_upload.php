<head>
	<link rel="shortcut icon" href="../../images/dcdg.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <title>Upload Report</title>

  <style type="text/css">
  </style>
</head>

<body>
	<link rel="stylesheet" href="reports_upload.css">

	<!--DATABASE CONNECTION-->
	<?php include "config.php"; ?>

	<!-- Sidebar -->
	<?php include 'sidebar_employee.php'; ?>

	<div class="content">
		<form action="reports_upload.php" method="post" enctype="multipart/form-data">
			<p id="title">Upload Report</p>

			<div class="row">
				<div class="col col-md-2"><label>Title</label></div>
				<div class="col col-md-4">
					<input type="text" name="report_name">
				</div>

				<div class="col col-md-2"><label>Type</label></div>
				<div class="col col-md-4">
					<select name="report_type">
						<option value="Sales">Sales</option>
						<option value="Inventory">Inventory</option>
					</select>
				</div>
			</div>

			<div class="row">
				<div class="col col-md-2"><label>Category</label></div>
				<div class="col col-md-4">
					<select name="report_cat">
						<option value="Daily">Daily</option>
						<option value="Weekly">Weekly</option>
						<option value="Monthly">Monthly</option>
						<option value="Yearly">Yearly</option>
					</select>
				</div>

				<div class="col col-md-2"><label>Date</label></div>
				<div class="col col-md-4">
					<input type="Date" name="report_date" value="<?php date('Y-m-d'); ?>">
				</div>
			</div>

			<div class="row">
				<div class="col col-md-7">
					<input type="file" name="report_file">
				</div>

				<div class="col col-md-5">
					<button type="submit" name="submit" id="upload-btn">
					<i class="material-icons" style="vertical-align: middle;">file_upload</i>Upload
					</button>
				</div>
			</div>
		</form>
	</div>
</body>

<?php 
	if(isset($_POST['submit'])){
		$report_name = $_POST['report_name'];
		$report_type = $_POST['report_type'];
		$report_cat = $_POST['report_cat'];
		$report_date = $_POST['report_date'];
		$branch = $_SESSION['Branch_ID'];

		$report_file = $_FILES['report_file']['name'];
		$path = "report_files/".$report_file;
		$extension = pathinfo($report_file, PATHINFO_EXTENSION);
		$temp_name = $_FILES['report_file']['tmp_name'];

		//'xls', 'pdf', 'csv'
		if(!in_array($extension, ['pdf'])) {
			echo "<script>alert('Your file extension must be .pdf only.')</script>";
		} else {
			if(move_uploaded_file($temp_name, $path)) {
				$upload = mysqli_query($con, "INSERT INTO report (report_name,report_type,report_cat,report_date,branch_ID,report_file) VALUES ('$report_name','$report_type','$report_cat','$report_date','$branch','$report_file')");

				if($upload) {
					echo "<script>alert('Report has been uploaded successfully.')</script>";
					echo "<script>window.open('../reports_dashboard.php','_self')</script>";
				}
			} else {
				echo "<script>alert('Failed to upload file!')</script>";
			}
		}
	}
?>