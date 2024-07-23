<?php
  require_once('auth.php');
?>
<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Add Employee</title>
	<link rel="stylesheet" href="css/add_employee_style.css">
	<link rel=”stylesheet” href=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css”rel=”nofollow” integrity=”sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I” crossorigin=”anonymous”>
	<!--Boxicons CDN Link-->
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="shortcut icon" href="../images/dcdg.png" type="image/x-icon">
	<style type="text/css">
    .bootstrap-tagsinput .tag {
      margin-right: 2px;
      color: white;
      border-radius: 5px;
      background-color: #1687A7;
      padding: 0.2rem;
    }

    a{
    
      font-size:1em;
      color: white; 
      text-decoration: none;
    }

    #am{
    
      font-size:1em;
      color: white; 
      text-decoration: none;
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

    select {
      padding:  1px 45px;
      color:  black;
      background-color: white;
      cursor: pointer;
      border-color: white;
      border-radius: 5px;
      height: 45px;
      width: 100%;
      text-align: left;
    }

    select: focus, select; hover: {
      outline: none;
      border-color: #276678;
    }

    </style>
	</head>
<body>
</head>
<body>
	<!-- Sidebar -->
	<?php include 'includes/sidebar.php'; ?>

	<!-- Content -->
	<div class="content">
	<div class="col-6" align="center">
	
	<div class="container">
    <div class="title">Add Employee Account</div><br>
      <form action="" method="post">
        <fieldset>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="fullName" placeholder="Enter your full name" value="<?php if (isset($_POST['fullName'])) {echo $_POST['fullName'];} ?>" required>
          </div>

          <div class="input-box">
            <span class="details">Contact Number</span>
            <input type="text" name="contact" placeholder="Enter contact number" value="<?php if (isset($_POST['contact'])) {echo $_POST['contact'];} ?>" required>
          </div>

          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter  email" value="<?php if (isset($_POST['email'])) {echo $_POST['email'];} ?>" required>
          </div>

           <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="userName" placeholder="Enter  username" value="<?php if (isset($_POST['userName'])) {echo $_POST['userName'];} ?>" required>
          </div>

           <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name="password" placeholder="Enter  password" value="<?php if (isset($_POST['password'])) {echo $_POST['password'];} ?>" required>
           </div>
          
        <div class="input-box">
        <span class="details">Branch</span>
        <select name="branch">
        <?php
          $hostName = "localhost";
          $userName = "root";
          $password = "";
          $dbName = "dcdg";
          
          $connection = mysqli_connect($hostName, $userName, $password, $dbName);

          if (!$connection) 
          {
            die("Connection failed: " . mysqli_connect_error());
          }


          $sql = "SELECT Branch_ID FROM employee ORDER BY Branch_ID";
          $result = mysqli_query($connection, $sql);

          if (!$result || mysqli_num_rows($result) == 0)
          { 
            echo "<h1>Record not found!.</h1>";
          } 
          else 
          {
                  for($br = 1; $br <= 4; $br++) {
                    $branch = "";
                      switch($br) {
                          case 1:
                            $branch = "Mabini Branch";
                            break;
                          case 2:
                            $branch = "Abanao Branch";
                            break;
                          case 3:
                            $branch = "Magsaysay Branch";
                            break;
                          case 4:
                            $branch = "Market Branch";
                            break;
                      }
                      echo "<option value='" . $br . "'>" . $branch . "</option>";
                  } 
         }
         mysqli_close($connection);
        ?>
      </select>
    </div>
    
        </div><br>

        <div class="form-group" align="center">
        <div><br>
          <button id="button1id"  name="button1id" class="btn btn-info"><b>Add</b></button>
          <button type="button" class="btn btn-info"><a id="am" href = "employee_accounts.php"><b>Back</b></button></a>
          </div>
        </div><br>

        <?php
  if (isset($_POST['fullName']) and isset($_POST['contact']) and isset($_POST['email']) and isset($_POST['userName']) and isset($_POST['password']) and isset($_POST['branch']))
  {
    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "dcdg";

    $connection = mysqli_connect($hostName, $userName, $password, $dbName);
  
    if (!$connection) 
    {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM employee WHERE employee_name = '" . $_POST['fullName'] . "'";
    $result = mysqli_query($connection, $sql);
    
    if (!$result || mysqli_num_rows($result) == 0)
    { 
      $sql2 = "INSERT INTO employee (employee_name, employee_username, employee_password,  email, contact_Number, Branch_ID) VALUES ('" . $_POST['fullName'] . "', '" . $_POST['userName'] . "', '" . $_POST['password'] . "', '" . $_POST['email'] . "', '" . $_POST['contact']  . "', '" . $_POST['branch']  . "')";
  
      if (mysqli_query($connection, $sql2)) 
      {
        echo "<div class='alert alert-success' role='alert'><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Success:</strong> New employee successfully created!</div><br>";
      }
      else
      {
        echo "<h1>Error: " . $sql . "<br>" . mysqli_error($connection) . "</h1>";
      }
    } 
    else 
    {
      echo "<div class='alert alert-danger' role='alert'><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error:</strong> Employee already exists.</div><br>"; 
    }
  }
?>
       
        </fieldset>
      </form>
    </div>
    </div>
    
	</div>
</body>	
</html>
