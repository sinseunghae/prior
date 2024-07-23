<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['employee_uname']) && isset($_POST['employee_pass'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['employee_uname']);
	$pass = validate($_POST['employee_pass']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	} else if(empty($pass)) {
        header("Location: index.php?error=Password is required");
	    exit();
	} else {
		$sql = "SELECT * FROM employee WHERE employee_username='$uname' AND employee_password='$pass'";

		$result = mysqli_query($connection, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['employee_username'] === $uname && $row['employee_password'] === $pass) {
            	$_SESSION['employee_username'] = $row['employee_username'];
            	$_SESSION['employee_name'] = $row['employee_name'];
            	$_SESSION['employee_ID'] = $row['employee_ID'];
            	$_SESSION['Branch_ID'] = $row['Branch_ID'];
            	header("Location:../employee/employee_dashboard.php");
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