<?php 
session_start();

if (isset($_SESSION['admin_id']) && isset($_SESSION['admin_username'])) {

?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['admin_name']; ?></h1>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php

} else {
     header("Location: index.php");
     exit();
}

?>