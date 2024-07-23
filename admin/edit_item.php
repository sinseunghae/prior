<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Edit Item</title>
  <link rel="stylesheet" href="css/newadd_product_style.css">
  <!--Boxicons CDN Link-->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, intial-scale=1.0">
  <link rel="shortcut icon" href="../images/dcdg.png" type="image/x-icon">
  <link rel=”stylesheet” href=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css”rel=”nofollow” integrity=”sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I” crossorigin=”anonymous”>
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
  <!-- Sidebar -->
  <?php include 'includes/sidebar.php'; ?>

  <!-- Content -->
  <div class="content" style="height: 73%;">
    <div class="col-6" align="center">
      <div class="container" style="height: 70%;">
      <div class="title">Edit Item</div><br>

      <form action="" method="post">
        <fieldset>

          <?php
          if (isset($_GET['pro_id']))
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

            $bra = $_GET['branch_id'];
            //$bran = $_GET['branch_id'];
            switch ($bra) {
              case '1':
                $sql = "SELECT * FROM branch1 WHERE pro_id = " . $_GET['pro_id'];
                break;
              case '2':
                $sql = "SELECT * FROM branch2 WHERE pro_id = " . $_GET['pro_id'];
                break;
              case '3':
                $sql = "SELECT * FROM branch3 WHERE pro_id = " . $_GET['pro_id'];
                break;
              case '4':
                $sql = "SELECT * FROM branch4 WHERE pro_id = " . $_GET['pro_id'];
                break;
            }
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

                echo "<div class='user-details'>";

                echo "<div class='input-box'>";
                echo "<span class='details'><b>Quantity: </b>". $row['quantity']. "</span>";
                echo "<input type='number' name='quantity' type='text' placeholder=' " . $row['quantity']. "' class='form-control input-md' required value='" . (isset($_POST['quantity']) ? $_POST['quantity'] : '') . "' >";
                echo "</div>";
              } 
            }
            mysqli_close($connection);
          }
          ?>
  
    <!-- Buttons -->
          <div class="form-group" align="center">
            <div><br>
              <button id="button1id" name="button1id" class="btn btn-info"><b>Save</b></button>
              <button type="button" class="btn btn-info"><a id="am" href = "inventory.php"><b>Back</b></button></a>
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
            //$bran = $_GET['branch_id'];
            $sql = "UPDATE branch1 SET quantity='" . $_POST['quantity'] . "' WHERE barcode = '" . $_GET['barcode'] . "'";
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
  