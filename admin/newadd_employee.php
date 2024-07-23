<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Add Employee</title>
	<link rel="stylesheet" href="css/add_employee_style.css">
	<!--Boxicons CDN Link-->
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="shortcut icon" href="../images/dcdg.png" type="image/x-icon">
	<style>
	a{
    
      font-size:1em;
      color: white; 
      text-decoration: none;
    }

    #am{
    
      font-size:1em;
      color: white; 
    }
      
    #am:hover{
      color: white;
    }

    #a1{
      color: white;
      font-size:1.125em;    
    }
      
    #a1:hover{
      color: white; 
    }
</style>
</head>
<body>
	<!-- Sidebar -->
	<?php include 'includes/sidebar.php'; ?>

	<!-- Content -->
	<div class="content"><br>
	
	<div class="col-6" align="center">
	
	<div class="container">
    <div class="title">Add Employee Account</div><br>
    <div class="content">
      <form action="/action_page.php" method="post">

        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" placeholder="Enter first name" required>
          </div>

          <div class="input-box">
            <span class="details">Last name</span>
            <input type="text" placeholder="Enter last name" required>
          </div>

           <div class="input-box">
            <span class="details">Branch</span>
            <input type="text" placeholder="Enter Branch" required>
          </div>

          <div class="input-box">
            <span class="details">Contact Number</span>
            <input type="text" placeholder="Enter contact number" required>
          </div>

          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter  email" required>
          </div>

           <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter  username" required>
          </div>

           <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter  password" required>
          </div>

        </div>

        <div>
        <button onclick="document.getElementById('id01').style.display='block'">Add</button>
        </div>

        <br>
        <button type="button"><a id="am" href = "employee_accounts.php">Back</button></a>

      </form>
    <?php include 'includes/add_modal.php'; ?>
    </div>
    </div>
    
	</div>
</body>	
</html>