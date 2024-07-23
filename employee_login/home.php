<?php 
session_start();

if (isset($_SESSION['employee_id']) && isset($_SESSION['employee_username'])) {


?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['employee_name']; ?></h1>
     <h1>Hello, <?php echo $_SESSION['Branch_ID']; ?></h1>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php

} else {
     header("Location: index.php");
     exit();
}

?>