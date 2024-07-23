<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['admin_uname']) && isset($_POST['admin_pass'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['admin_uname']);
	$pass = validate($_POST['admin_pass']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	} else if(empty($pass)) {
        header("Location: index.php?error=Password is required");
	    exit();
	} else {
		$sql = "SELECT * FROM admin WHERE UserName='$uname' AND Password='$pass'";

		$result = mysqli_query($connection, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['Name'] === $uname && $row['Password'] === $pass) {
            	$_SESSION['UserName'] = $row['UserName'];
            	$_SESSION['Name'] = $row['Name'];
            	$_SESSION['Password'] = $row['Password'];
            	$_SESSION['adminID'] = $row['adminID'];
            	header("Location: ../admin/admin_dashboard.php");
		        exit();
            } else {
				header("Location: index.php?error=Incorect User name or password");
		        exit();
			}
		} else{ 
			header("Location: index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
} else {
	header("Location: index.php");
	exit();
}