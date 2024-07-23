<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Guest Accounts</title>
	<link rel="stylesheet" href="css/guest_accounts.css">
	

  <!--Boxicons CDN Link-->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, intial-scale=1.0">
  <link rel="shortcut icon" href="../images/dcdg.png" type="image/x-icon">

  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script> 
  <script src='https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js'></script>


</head>
<style type="text/css">
  .main-section{
    margin-top:150px;
  }

  body {
    margin: 0;
    font-family: "Lato", sans-serif;
  }

  div.content {
    margin-left: 300px;
    padding: 1px 16px;
    height: 1000px;
  }

  .sidebar {
    margin: 0;
    padding: 0;
    width: 285px;
    background: #053742;
    position: fixed;
    height: 100%;
    overflow: hidden;
    font-size: 15px;
    font-family: "Arial", sans-serif;
    z-index:10;
  }

  .sidebar a {
    display: block;
    color: white;
    padding: 12px;
    text-decoration: none;
    transition:all 0.3s ease;
  }

  .sidebar .nav_list{
    padding: 5px;
    border-radius: 12px;
  }

  .sidebar .nav_list a:hover {
    color:#053742;
    background: #fff;
    border-radius: 8px;

  }

  .sidebar .logo_content .logo {
    color: #fff;
    display: flex;
    height: 50px;
    width: 90%;
    align-items: center;
    opacity: 1;
    pointer-events: none;
    transition:all 0.5s ease;
  }

  .sidebar .logo_content .logo img{
    height: 50px;
  }

  .logo_content .logo .logo_name {
    font-size: :108px;
    font-weight: 400;
  }

  .sidebar .profile_content {
    position: absolute;
    color: #fff;
    bottom: 0;
    left:0;
    width: 100%;
    height: 50px;
  }

  .sidebar .profile_content .profile{
    position: relative;
    padding: 15px 20px;
    height: 50px;
    background: #39A2DB;
    transition: all 0.4s ease;
  }

  .profile_content .profile .profile_details{
    display: flex;
    align-items: center;
    opacity: 1;
    pointer-events: none;
    white-space: nowrap;
    font-family: "Arial", sans-serif;
  }

  .profile .profile_details .job{
    font-size: 15px;
    font-weight: 400;
  }

  .profile a #log_out{
    position: absolute;
    transform:translateX(-30%);
    left: 200px;
    bottom: 9px;
    padding: 0px 3%;
    min-width: 70px;
    line-height: 30px;
    font-size: 15px;
    border-radius:8px;
    text-align: center;
    transition: all 0.4s ease;
    background: #39A2DB;
    text-decoration: none;
    color:white;

  }

  .profile a #log_out span{
    font-family: "Lato", sans-serif;
  }
  .profile a #log_out:hover{
    background: #2E82AF;
  }

  .column {
    float: left;
    width: 50%;
    padding: 0 10px;
    text-align: center;
  }

  .row {margin: 0 -5px; text-align: center;}

  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 10px;
    text-align: center;
    background-color: #F7F9F9;
    border-radius: 5px;
    margin-bottom: 10%;
    color:black;
  }

  a .card:hover {
    background-color: #f1f1f1;
  }

  @media screen and (max-width: 700px) {
    .sidebar {
      width: 100%;
      position: relative;
      height: 40%;
    }
    .sidebar a {float: left;}
    div.content {margin-left: 0;}
  }

  @media screen and (max-width: 400px) {
    .sidebar a {
      text-align: center;
      float: none;
    }
  }
</style>
</head>
<body>
	<!-- Sidebar -->
 <div class="sidebar">
  <div class="logo_content" style="background-color: #39A2DB;">
    <div class="logo">
      <img src="../images/DCDG.png" alt="DCDG">
      <div class="logo_name">Diamond Colours Dry Goods</div>
    </div>
  </div><br>
  <div class= "nav_list">
    <a href="admin_dashboard.php">
        <i class='bx bx-grid-alt'></i>
        <span class="links_name">Dashboard</span>
      </a>
      <a href="employee_accounts.php">
        <i class='bx bx-user'></i>
        <span class="links_name">User</span>
      </a>
      <a href="branch_inventory.php">
        <i class='bx bx-box'></i>
        <span class="links_name">Inventory</span>
      </a>
      <a href="products.php">
        <i class='bx bx-box'></i>
        <span class="links_name">Products</span>
      </a>
      <a href="damage_list.php">
        <i class='bx bx-x-circle'></i>        
        <span class="links_name">Damage/Missing</span>
      </a>
      <a href="purchase_order.php">
        <i class='bx bx-cart'></i>
        <span class="links_name">Purchase Order</span>
      </a>
      <a href="sales_order.php">
        <i class='bx bx-notepad'></i>
        <span class="links_name">Sales Order</span>
      </a>
      <a href="sales_activity.php">
        <i class='bx bx-notepad'></i>
        <span class="links_name">Sales Actvity</span>
      </a>
      <a href="suppliers.php">
        <i class='bx bxs-store'></i>
        <span class="links_name">Supplier</span>
      </a>  
      <a href="barcode.php">
        <i class='bx bx-barcode' ></i>
        <span class="links_name">Barcode</span>
      </a>
      <a href="reports.php">
        <i class='bx bxs-report' ></i>
        <span class="links_name">Report</span>
      </a>
      <a href="admin_settings.php">
        <i class='bx bx-cog'></i>
        <span class="links_name">Settings</span>
      </a>

  </div>
  <div class="profile_content">
    <div class="profile">
      <div class="profile_details">
        <i class='bx bx-user'></i>
        <div class="job">
          <div class="job_position">&nbsp;Administrator</div>
        </div>
      </div>
      <a href="#"><i class='bx bx-log-out' id="log_out"><span>&nbsp;Logout</span></i></a>
    </div>
  </div>
</div>


<!-- Content -->
<div class="content"><br>

  <!-- Cards -->
  <div class="row">

    <a href="employee_accounts.php">
      <div class="column">
        <div class="card">
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
            echo "<h2 class='card-title'><b>No Records</b></h2>";
          } 
          else
          {
            $rowcount = mysqli_num_rows($result);

            echo "<h2 class='card-title'><b>", $rowcount,"</b></h2>";
          }
          mysqli_close($conn);
          ?>
          <h4><p>EMPLOYEE</p></h4>
        </div>
      </div></a>

      <div class="column">
        <div class="card">
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

          $sql = "SELECT * FROM guest";
          $result = mysqli_query($conn, $sql);
          if (!$result || mysqli_num_rows($result) == 0)
          {
            echo "<h2 class='card-title'><b>No Records</b></h2>";
          } 
          else
          {
            $rowcount = mysqli_num_rows($result);

            echo "<h2 class='card-title'><b>", $rowcount,"</b></h2>";
          }
          mysqli_close($conn);
          ?>
          <h4><p>GUEST</p></h4>
        </div>
      </div>

      <!-- Guest -->
      <div class="container">
        <h1 class="display-5 font-weight-bold text-center" style="color: #053742;"><b>&nbsp;&nbsp;&nbsp;GUEST ACCOUNTS</b></h1>
      </div><br><br>


      <!-- Search -->
      <div class="container search-table"> 
        <div class="search-box" style='width: 30%'>
         <div class="row">
          <div class="col-3">
            <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search here..." name="search">
            <script>
              $(document).ready(function () {
               $("#myInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function () {
                 $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
               });
              });
             });
           </script>
         </div></div></div><br>


         <!-- Table -->
         <div class="table-responsive-lg">       
           <table class="table table-bordered">
            <thead>
             <tr>
              <th>Name</th>
              <th>Username</th>
              <th>Email</th>
              <th>Contact Number</th>
            </tr>
          </thead>
          <tbody id="myTable">
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

          $sql = "SELECT * FROM guest";
          $result = mysqli_query($conn, $sql);
          if (!$result || mysqli_num_rows($result) == 0)
          {
            echo "<tr>";
            echo "<td colspan='5'><center><h2>Record not found...</center></h2></td>";
            echo "</tr>";
          } 
          else{
            $counter = 0;
            while ($row = mysqli_fetch_assoc($result)){
              echo "<tr class='" . ($counter == 1 ? "" : "success") . "'>";
              echo "<td scope='row' class='p-3 text-center'>", $row["guest_name"], "</td>";
              echo "<td scope='row' class='p-3 text-center'>", $row["guest_username"], "</td>";
              echo "<td scope='row' class='p-3 text-center'>", $row["guest_email"], "</td>";
              echo "<td scope='row' class='p-3 text-center'>", $row["guest_contact_number"], "</td>";


              $counter = $counter == 0 ? 1 : 0;
            }

          }
          mysqli_close($conn);

          ?>
        </tbody>
      </table>
    </div>
  </body>	
  </html>