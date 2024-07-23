<?php
	//Start session
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['Branch_ID']) || (trim($_SESSION['Branch_ID']) == '')) {
		header("location: ../employee_login/index.php");
		exit();
	}
?>