<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Edit Status</title>
  <link rel="stylesheet" href="css/purchase_status.css">
  <!--Boxicons CDN Link-->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, intial-scale=1.0">
  <link rel="shortcut icon" href="../images/dcdg.png" type="image/x-icon">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet"/>

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
      width: 50%;
      text-align: left;
    }

    select: focus, select; hover: {
      outline: none;
      border-color: #276678;
    }
    .details {
      text-align: left
    }
  </style>

</head>
<body>
  <!-- Sidebar -->
  <?php include 'includes/sidebar.php'; ?>

  <!-- Content -->
  <div class="content" style="height: 80%;">
   <div class="col-6" align="center">

     <div class="container">
      <div class="title">Edit Purchase Order Status</div><br>

      <form action="" method="post">
        <fieldset>

          <?php
          if (isset($_GET['purchase_ID']))
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

            $sql = "SELECT * FROM purchase_order WHERE purchase_ID = " . $_GET['purchase_ID'];
            $result = mysqli_query($connection, $sql);

            if (!$result || mysqli_num_rows($result) == 0)
            { 
              echo "<h1>Record not found!</h1>";
            } 
            else 
            {
              // CHECKPOINT
              while ($row = mysqli_fetch_assoc($result)) 
              {
                echo "<span class=''><b>Status: </b>".$row['status']."</span><br>";
              } 
            }
            mysqli_close($connection);
          }
          ?>
          <div class="input-box">
            <select name ="status">
              <option value ="1">Sent</option>
              <option value ="2">Completed</option>
            </select>
          </div>
          
          <!-- Buttons -->
          <div class="form-group" align="center">
            <div><br>
              <button id="button1id" name="button1id" class="btn btn-info"><b>Save</b></button>
              <button type="button" class="btn btn-info"><a id="am" href = "sales_order.php"><b>Back</b></button></a>
            </div>
          </div><br>
          
          <?php 
          if (isset($_POST['button1id'])) {
            $hostName = "localhost";
            $userName = "root";
            $password = "";
            $dbName = "dcdg";

            $connection = mysqli_connect($hostName, $userName, $password, $dbName);

            if (!$connection) 
            {
              die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "UPDATE purchase_order SET status = '" . $_POST['status'] . "' WHERE purchase_ID = '" . $_GET['purchase_ID'] . "'";

            $result = mysqli_query($connection, $sql);

            if (mysqli_query($connection, $sql)) {
              echo"<div class='alert alert-success' role='alert'><center>Your changes have been successfully saved!</center></div>";
            }
            else {
              echo"<div class='alert alert-danger' role='alert'><center>Failed!</center>";
            }
            mysqli_close($connection);
          }
          ?>
        </fieldset>
      </form>
      
    </div>
  </div>

</div>
</body> 
</html>
