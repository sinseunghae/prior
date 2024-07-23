<?php
  require_once('auth.php');
?>
<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Edit Product</title>
  <link rel="stylesheet" href="css/newedit_product_style.css">
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
  <div class="content">
   <div class="col-6" align="center">

     <div class="container">
      <div class="title">Edit Product</div><br>

      <form action="" method="post">
        <fieldset>

          <?php
          if (isset($_GET['product_id']))
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

            $sql = "SELECT * FROM product WHERE product_id = " . $_GET['product_id'];
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
                echo "<span class='details'><b>Product Name:</b>PO-". $row['product_name']. "</span>";
                echo "<input id='textinput' name='pro_name' type='text' placeholder=' " . $row['product_name']. "' class='form-control input-md' required value='" . (isset($_POST['pro_name']) ? $_POST['pro_name'] : '') . "' >";
                echo "</div>";

                echo "<div class='input-box'>";
                echo "<span class='details'><b>Price: </b>". $row['product_price']. "</span>";
                echo "<input id='textinput' name='price' type='number' placeholder=' " . $row['product_price']. "' class='form-control input-md' required value='" . (isset($_POST['price']) ? $_POST['price'] : '') . "' >";
                echo "</div>";

                echo "<div class='input-box'>";
                echo "<span class='details'><b>Reorder Point: </b>". $row['reorder_point']. "</span>";
                echo "<input id='textinput' name='reorder' type='number' placeholder=' " . $row['reorder_point']. "' class='form-control input-md' required value='" . (isset($_POST['reorder']) ? $_POST['reorder'] : '') . "' >";
                echo "</div>";


                echo "<div class='input-box'>";
                echo "<span class='details'><b>Variation: </b>". $row['product_variations']. "</span>";
                echo "<input id='textinput' name='variation' type='text' placeholder=' " . $row['product_variations']. "' class='form-control input-md' required value='" . (isset($_POST['variation']) ? $_POST['variation'] : '') . "' >";
                echo "</div>";

                echo "</div>";
                
                echo "<span class=''><b>Size: </b>" . $row['product_size']. "</span><br>";
              } 
            }
            mysqli_close($connection);
          }
          ?>
        <div class="input-box">
        <select name ="size">
          <option>Small</option>
          <option>Medium</option>
          <option>Large</option>
          <option>XL</option>
          <option>N/A</option>
      </select>
    </div>
    <!-- Buttons -->
          <div class="form-group" align="center">
            <div><br>
              <button id="button1id" name="button1id" class="btn btn-info"><b>Save</b></button>
              <button type="button" class="btn btn-info"><a id="am" href = "products.php"><b>Back</b></button></a>
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

            $sql = "UPDATE product SET product_name = '" . $_POST['pro_name'] . "', product_price = '" . $_POST['price'] ."', reorder_point = '" . $_POST['reorder'] . "', product_size = '" . $_POST['size'] . "', product_variations = '" . $_POST['variation'] . "' WHERE product_id = '" . $_GET['product_id'] . "'";


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
  