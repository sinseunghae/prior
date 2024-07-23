<!DOCTYPE html>
<html>
<head>
	<title>ADMIN LOGIN</title>
     <link rel="shortcut icon" href="../images/dcdg.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
     <form action="login.php" method="post">
          <img src="../images/dcdg.png" alt="DCDG Logo" class="center">
     	<h2>ADMIN LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<label>User Name</label>
     	<input type="text" name="admin_uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="admin_pass" placeholder="Password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>