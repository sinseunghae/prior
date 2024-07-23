<head>
  <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <style type="text/css">
    body {
      overflow-y: hidden;
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>

<body>
  <link rel="stylesheet" href="reports_admin.css">

  <!--DATABASE CONNECTION-->
  <?php include "config.php"; ?>

  <!--ADMIN SIDEBAR-->
  <?php include "sidebar.php"; ?>

  <div class="content">
    <h3>Reports</h3>
    <!-- Table -->
      <div class='container table-responsive-lg'>
        <table border='1'  class="table table-bordered">
          <thead>
            <tr>
              <th>Report Name</th>
              <th>Type</th>
              <th>Category</th>
              <th>File</th>
            </tr>
          </thead>

          <tbody id="myTable">
            <?php 
              $get_download = mysqli_query($con, "SELECT * FROM report");

              $count = 1;
              while ($row = mysqli_fetch_assoc($get_download)) {
            ?>

              <tr>
                <td><?= $row["report_name"] ?></td>
                <td><?= $row["report_type"] ?></td>
                <td><?= $row["report_cat"] ?></td>

                <td>
                  <a href="reports_download.php?report_file=<?= $row['report_file'] ?>">Download</a>
                </td>
              </tr>

            <?php
              $count++;
              }
            ?>
          </tbody> 
        </table>
      </div>
  </div>
</body>