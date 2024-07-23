<?php
  require_once('auth.php');
?>
<head>
  <link rel="shortcut icon" href="../images/dcdg.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <title>Report</title>

  <style type="text/css">
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>

<body>
  <link rel="stylesheet" href="css/reports_dashboard.css">

  <!--DATABASE CONNECTION-->
  <?php include "config.php"; ?>

  <!-- Sidebar -->
  <?php include 'includes/sidebar_employee.php'; ?>

  <div class="content">
    <h1 class="display-5 font-weight-bold title">
    Reports</h1>

    <!-- Cards -->
      <div class="card-deck mx-auto">

        <div class="card border-dark mb-2 ml-6">
          <div class="card-body border-dark bg-transparent text-dark  p-4 ">
            <h5 class="card-title text-center">Sales Report</h5> 
          </div>
          <div class="card-footer border-dark bg-info text-white text-right p-1"><a href="reports/sales_report.php" style="text-decoration: none; color:white;">Go to sales report&nbsp;&nbsp;<i class='bx bxs-right-arrow-circle'></i></a></div>
        </div>

        <div class="card border-dark mb-2 ml-6">
          <div class="card-body border-dark bg-transparent text-dark  p-4 ">
            <h5 class="card-title text-center">Inventory Report</h5> 
          </div>
          <div class="card-footer border-dark bg-info text-white text-right p-1"><a href="reports/inventory_report.php" style="text-decoration: none; color:white;">Go to inventory report&nbsp;&nbsp;<i class='bx bxs-right-arrow-circle'></i></a></div>
        </div>

        <div class="card border-dark mb-2 ml-6">
          <div class="card-body border-dark bg-transparent text-dark  p-4 ">
            <h5 class="card-title text-center">Upload Report</h5> 
          </div>
          <div class="card-footer border-dark bg-info text-white text-right p-1"><a href="reports/reports_upload.php" style="text-decoration: none; color:white;">Upload report here&nbsp;&nbsp;<i class='bx bxs-right-arrow-circle'></i></a></div>
        </div>
      </div>
      
      <!--TABLE-->
      <div class="form-title">
        <h4>Uploaded Reports</h4>
      </div>
      <form method="post" action="">
        <div class="form-group">
          <label for="inputType">Report Type</label>
          <select name="inputType"id="inputType">
            <option value="1">Select Report Type</option>
            <option value="Sales">Sales</option>
            <option value="Inventory">Inventory</option>
          </select>

          <label for="inputCat">Category</label>
          <select name="inputCat"id="inputCat">
            <option value="1">Select Category</option>
            <option value="Daily">Daily</option>
            <option value="Weekly">Weekly</option>
            <option value="Monthly">Monthly</option>
            <option value="Yearly">Yearly</option>
          </select>

          <button type="submit" class="btn btn-info">Search</button>
        </div>
      </form>

      <div class='table-responsive-lg'>
        <table border='1'  class="table table-bordered">
          <thead>
            <tr>
              <th>Report Name</th>
              <th>Type</th>
              <th>Category</th>
              <th>Date</th>
              <th>File</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody id="myTable">
            <?php
            if(isset($_POST['inputType'], $_POST['inputCat'])){
              $type = $_POST['inputType'];
              $category = $_POST['inputCat'];
              $branch = $_SESSION['Branch_ID'];

              if ($type == 1 && $category == 1) {
                $query = "SELECT * FROM report WHERE branch_ID like '%$branch%'";
                $result = mysqli_query($con, $query);

                $count = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                  <tr>
                    <td scope='row' class='p-3 text-center'><?= $row["report_name"]; ?></td>
                    <td scope='row' class='p-3 text-center'><?= $row["report_type"]; ?></td>
                    <td scope='row' class='p-3 text-center'><?= $row["report_cat"]; ?></td>
                    <td scope='row' class='p-3 text-center'><?= $row["report_date"]; ?></td>
                    <td scope='row' class='text-center'>
                      <a href="reports/reports_download.php?report_file=<?= $row["report_file"] ?>"><button id="download_btn" class='btn btn-primary'>Download</button></a>
                    </td>
                    <td align='center'>
                      <a href="reports/reports_delete.php?reports_delete=<?= $row['report_ID'] ?>"><button id="download_btn" class='btn btn-danger'>Delete</button></a>
                    </td>
                  </tr>
                <?php
                $count++;
                }
              } else {

                $query = "SELECT * FROM report WHERE (report_type like '%$type%') and (report_cat like '%$category%') and (branch_ID like '%$branch%')";
                $result = mysqli_query($con, $query);

                $count = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                  <tr>
                    <td scope='row' class='p-3 text-center'><?= $row["report_name"]; ?></td>
                    <td scope='row' class='p-3 text-center'><?= $row["report_type"]; ?></td>
                    <td scope='row' class='p-3 text-center'><?= $row["report_cat"]; ?></td>
                    <td scope='row' class='p-3 text-center'><?= $row["report_date"]; ?></td>
                    <td scope='row' class='text-center'>
                      <a href="reports/reports_download.php?report_file=<?= $row["report_file"] ?>"><button id="download_btn" class='btn btn-primary'>Download</button></a>
                    </td>
                    <td align='center'>
                      <a href="reports/reports_delete.php?reports_delete=<?= $row['report_ID'] ?>"><button id="download_btn" class='btn btn-danger'>Delete</button></a>
                    </td>
                  </tr>
                  </tr>
                <?php
                  $count++;
                }
              }
            } else {
              $branch = $_SESSION['Branch_ID'];
              $query = "SELECT * FROM report WHERE branch_ID like '%$branch%'";
              $result = mysqli_query($con, $query);

              $count = 1;
              while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td scope='row' class='p-3 text-center'><?= $row["report_name"]; ?></td>
                    <td scope='row' class='p-3 text-center'><?= $row["report_type"]; ?></td>
                    <td scope='row' class='p-3 text-center'><?= $row["report_cat"]; ?></td>
                    <td scope='row' class='p-3 text-center'><?= $row["report_date"]; ?></td>
                    <td scope='row' class='text-center'>
                      <a href="reports/reports_download.php?report_file=<?= $row["report_file"] ?>"><button id="download_btn" class='btn btn-primary'>Download</button></a>
                    </td>
                    <td align='center'>
                      <a href="reports/reports_delete.php?reports_delete=<?= $row['report_ID'] ?>"><button id="download_btn" class='btn btn-danger'>Delete</button></a>
                    </td>
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