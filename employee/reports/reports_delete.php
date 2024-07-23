<?php 
include 'config.php';

if(isset($_GET['reports_delete'])){
	$delete_id = $_GET['reports_delete'];

	$delete = mysqli_query($con, "DELETE FROM report WHERE report_ID='$delete_id'");

	if($delete){
		echo "<script>alert('Report deleted.')</script>";
		echo "<script>window.open('../reports_dashboard.php','_self')</script>";
	}
}
?>