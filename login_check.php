<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['psw'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['psw']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM admin WHERE UserName='$uname' AND Password='$pass'";
		
		//$sql2 = "SELECT * FROM employee WHERE employee_username='$uname' AND employee_password='$pass'";
		
		//$result2 = mysqli_query($conn, $sql2);

		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['UserName'] === $uname && $row['Password'] === $pass) {
            	$_SESSION['']

            	header("Location: admin_dashboard.php");
		        exit();
            }
		}
	

	}
	
}else{
	header("Location: admin_login.php");
	exit();
}