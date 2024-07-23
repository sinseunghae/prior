<?php
require_once('auth.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="css/admin_dashboard.css">

  <!--Boxicons CDN Link-->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, intial-scale=1.0">
  <link rel="shortcut icon" href="../images/dcdg.png" type="image/x-icon">
  <style>

  </style>
</head>
<body>
  <!-- Sidebar -->
  <?php include 'includes/sidebar.php'; ?>


  <div class="content"><br>
    <div class="container">
      <h1 class="display-5 font-weight-bold" style="color: #053742;">ADMIN DASHBOARD</h1><br><br>


      <!-- Cards -->
      <div class="card-deck mx-auto">

        <div class="card border-dark mb-2 ml-6">
          <div class="card-body border-dark bg-transparent text-dark  p-4 ">
            <h1 class="card-title text-center">
              <?php
              $hostName = "localhost";
              $userName = "root";
              $password = "";
              $dbName = "dcdg";

              $conn = mysqli_connect($hostName, $userName, $password, $dbName);

              if (!$conn) 
              {
                die("Connection failed: " . mysqli_connect_error());
              }

              $sql = "SELECT * FROM product";
              $result = mysqli_query($conn, $sql);
              if (!$result || mysqli_num_rows($result) == 0)
              {
                echo "No Records";
              } 
              else
              {
                $rowcount = mysqli_num_rows($result);

                echo  $rowcount;
              }
              mysqli_close($conn);
              ?>
            </h1>
            <h5 class="card-title text-center"><i class='bx bx-box'></i>&nbsp; Products</h5> 
          </div>
          <div class="card-footer border-dark bg-info text-white text-right p-1"><a href="products.php" style="text-decoration: none; color:white;">View details&nbsp;&nbsp;<i class='bx bxs-right-arrow-circle'></i></a></div>
        </div>

        <div class="card border-dark mb-2 ml-6">
          <div class="card-body border-dark bg-transparent text-dark  p-4 ">
            <h1 class="card-title text-center"> 
              <?php
              $hostName = "localhost";
              $userName = "root";
              $password = "";
              $dbName = "dcdg";

              $conn = mysqli_connect($hostName, $userName, $password, $dbName);

              if (!$conn) 
              {
                die("Connection failed: " . mysqli_connect_error());
              }

              $sql = "SELECT * FROM employee";
              $result = mysqli_query($conn, $sql);
              if (!$result || mysqli_num_rows($result) == 0)
              {
                echo "No Records";
              } 
              else
              {
                $rowcount = mysqli_num_rows($result);

                echo  $rowcount;
              }
              mysqli_close($conn);
              ?>
            </h1>
            <h5 class="card-title text-center"><i class='bx bxs-user-detail'></i>&nbsp; Employees</h5> 
          </div>
          <div class="card-footer border-dark bg-info text-white text-right p-1"><a href="employee_accounts.php" style="text-decoration: none; color:white;">View details&nbsp;&nbsp;<i class='bx bxs-right-arrow-circle'></i></a></div>
        </div>

        <div class="card border-dark mb-2 ml-6">
          <div class="card-body border-dark bg-transparent text-dark  p-4 ">
            <h1 class="card-title text-center">
              <?php
              $hostName = "localhost";
              $userName = "root";
              $password = "";
              $dbName = "dcdg";

              $conn = mysqli_connect($hostName, $userName, $password, $dbName);

              if (!$conn) 
              {
                die("Connection failed: " . mysqli_connect_error());
              }

              $sql = "SELECT * FROM supplier";
              $result = mysqli_query($conn, $sql);
              if (!$result || mysqli_num_rows($result) == 0)
              {
                echo "No Records";
              } 
              else
              {
                $rowcount = mysqli_num_rows($result);

                echo  $rowcount;
              }
              mysqli_close($conn);
              ?>
            </h1>
            <h5 class="card-title text-center"><i class='bx bxs-store'></i>&nbsp; Suppliers</h5> 
          </div>
          <div class="card-footer border-dark bg-info text-white text-right p-1"><a href="suppliers.php" style="text-decoration: none; color:white;">View details&nbsp;&nbsp;<i class='bx bxs-right-arrow-circle'></i></a></div>
        </div>

      </div><br><br>

      <!-- Database Connection -->
      <?php include "config2.php"; ?>

      <!-- Select Branch -->
      <form method="post" action="" class="form-inline">
        <div class="form-group sm-3 mb-2">
          <label for="inputState" style="margin-left:15px;"><b>Branch:</b></label>
          <select name="inputState"id="inputState" class="form-control mx-3" style="width:auto;">
            <option selected>Choose a branch...</option>
            <option value="1">Mabini Branch (Main)</option>
            <option value="2">Abanao Branch</option>
            <option value="3">Magsaysay Branch</option>
            <option value="4">Market Branch</option>
          </select>

          <!-- Submit -->
          <button type="submit" class="btn btn-info">Search</button>
        </div>
      </form><br>


      <!-- Table -->
      <div class='container table-responsive-lg'>
        <table border='1'  class="table table-bordered">
          <thead>
            <tr>
              <th>Barcode</th>
              <th>Item</th>
              <th>Category</th>
              <th>Price</th>
              <th>Qty.</th>
              <th>Variation</th>
              <th>Size</th>
              <th>Branch</th>
            </tr>
          </thead>

          <tbody id="myTable">
            <?php
            if(isset($_POST['inputState'])){
              $branch = $_POST['inputState'];
              switch ($branch) {
                case '1':
                $query = "SELECT * FROM branch1";
                break;
                case '2':
                $query = "SELECT * FROM branch2";
                break;
                case '3':
                $query = "SELECT * FROM branch3";
                break;
                case '4':
                $query = "SELECT * FROM branch4";
                break;
                default:
                $query = "SELECT * FROM branch1";
                break;
              }
              $result = mysqli_query($con, $query);

              $count = 1;
              while ($row = mysqli_fetch_assoc($result)) {
                $product_id = $row["pro_id"];
                $product_name = $row["product_name"];
                $product_category = $row["category"];
                $product_price = $row["price"];
                $product_quantity = $row["quantity"];
                $product_variations = $row["variations"];
                $product_size = $row["sizes"];
                $barcode = $row["barcode"];
                $branch = $row["branch_id"];

                ?>
                <tr>
                  <td scope='row' class=' text-center'><?= $barcode ?></td>
                  <td scope='row' class=' text-center'><?= $product_name ?></td>
                  <td scope='row' class=' text-center'><?= $product_category ?></td>
                  <td scope='row' class=' text-center'><?= $product_price ?></td>
                  <td scope='row' class=' text-center'><?= $product_quantity ?></td>
                  <td scope='row' class=' text-center'><?= $product_variations ?></td>
                  <td scope='row' class=' text-center'><?= $product_size ?></td>
                  <td scope='row' class=' text-center'><?php 
                  if($branch == 1) {
                    echo "Mabini";
                  } elseif ($branch == 2) {
                    echo "Abanao";
                  } elseif ($branch == 3) {
                    echo "Magsaysay";
                  } elseif ($branch == 4) {
                    echo "Market";
                  }
                  ?></td>
                </tr>

                <?php
                $count++;
              }
            }

            ?>
          </tbody> 
        </table>
      </div>

    </div> 
  </body> 
  </html>