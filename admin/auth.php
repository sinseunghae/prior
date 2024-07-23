<?php
	//Start session
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['adminID']) || (trim($_SESSION['Name']) == '')) {
		header("location: ../admin_login/index.php");
		exit();
	}
?>