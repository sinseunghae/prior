<?php 
	if(!empty($_GET['report_file'])) {
		$report_file = basename($_GET['report_file']);
		$path = "../../employee/reports/report_files/".$report_file;
		//$contentType = mime_content_type($path);
		//$extension = pathinfo($report_file, PATHINFO_EXTENSION);

		if(!empty($report_file) && file_exists($path)) {
			header("Cache-Control: must-revalidate");
			header("Content-Description: File Transfer");
        	header("Content-Disposition: attachment; report_file=$report_file");
        	header("Content-Type: application/pdf");
        	header("Content-Transfer-Encoding: binary");
        	readfile($report_file);
        	exit;
		}

	} else {
		echo "<script>alert('File doesn't exist.)</script>";
		echo "<script>window.open('../reports.php','_self')</script>";
	}
?>