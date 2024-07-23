<?php
  require_once('auth.php');
?>
<head>
  <link rel="shortcut icon" href="../../images/dcdg.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <title>Sales Report</title>

  <style type="text/css">
    body {
      overflow-y: hidden;
      font-family: 'Poppins', sans-serif;
    }

    .tab {
      overflow: hidden;
      border: 1px solid #053742;
      background-color: #053742;
      margin-top: 50px;
    }

    .tab button {
      background-color: inherit;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px;
      transition: 0.3s;
      color: #fff;
    }

    .tab button:hover {
      background-color: #E8F0F2;
      color: #000;
    }

    .tab button.active {
      background-color: #A2DBFA;
      color: #000;
    }

    .tabcontent {
      display: none;
      padding: 35px 20px;
      border: 2px solid #053742;
      border-top: none;
      font-family: 'Poppins', sans-serif;
    }

    .tabcontent > h3 {
      font-weight: bold;
      padding-bottom: 15px;
      letter-spacing: 1px;
    }

    label {
      font-weight: bold;
      font-size: 18px;
      padding-right: 15px;
    }
  </style>
</head>

<body>
  <!-- Sidebar -->
  <?php include 'sidebar_employee.php'; ?>

  <div class="content">
    <!--TAB-->
    <div class="tab">
      <button class="tablinks" onclick="openType(event, 'Daily')" id="defaultOpen">Daily Inventory</button>
      <button class="tablinks" onclick="openType(event, 'Weekly')">Weekly Inventory</button>
      <button class="tablinks" onclick="openType(event, 'Monthly')">Monthly Inventory</button>
      <button class="tablinks" onclick="openType(event, 'Yearly')">Yearly Inventory</button>
    </div>

    <!--DAILY SALES-->
    <div id="Daily" class="tabcontent">
      <h3 id="report-title">Daily Inventory Report</h3>

      <form method="post" action="daily_inv_search.php" class="form-inline">
        <div class="form-group">
          <label for="Date_From" class="search-lbl">Select Date</label>
          <input type="date" name="date_from" value="<?php echo date('Y-m-d'); ?>" class="form-control" style="margin-right: 25px;">
        </div>

        <button type="submit" name="search" class="btn btn-primary">
          <i class="material-icons" style="vertical-align: middle; margin-right: 5px;">insert_chart</i>Generate Report
        </button>
      </form>
    </div>

    <!--WEEKLY SALES-->
    <div id="Weekly" class="tabcontent">
      <h3 id="report-title">Weekly Inventory Report</h3>

      <form method="post" action="weekly_inv_search.php" class="form-inline">
        <div class="form-group">
          <label for="Date_From" class="search-lbl">Select Start Date </label>
          <input type="date" name="date_from" value="YYYY-MM-DD" class="form-control" style="margin-right: 25px;">

          <!---<label for="Date_From" class="search-lbl">to</label>
          <input type="date" name="date_to" value="YYYY-MM-DD" class="form-control" style="margin-right: 25px;">-->
        </div>
        
        <button type="submit" name="search" class="btn btn-primary">
          <i class="material-icons" style="vertical-align: middle; margin-right: 5px;">insert_chart</i>Generate Report
        </button>
      </form>
    </div>

    <!--MONTHLY SALES-->
    <div id="Monthly" class="tabcontent">
      <h3 id="report-title">Monthly Inventory Report</h3>

      <form method="post" action="monthly_inv_search.php" class="form-inline">
        <div class="form-group">
          <label for="month" class="search-lbl">Month: </label>
          <select name="month" class="form-control">
            <?php
                      for ($i = 1; $i <= 12; $i++)
                      {
                          $month = date('F', mktime(0, 0, 0, $i, 1, 2022));
                          ?>
                          <option value="<?php echo $i; ?>"><?php echo $month; ?></option>
                          <?php
                      }
                  ?>
          </select>

          <label for="year" class="search-lbl" style="padding-left: 15px;">Year: </label>
          <select name="year" class="form-control">
            <?php
                      for($n=2022;$n<=2050;$n++){
                          ?>
                          <option value="<?php echo $n; ?>"><?php echo $n; ?></option>
                          <?php
                      }
                  ?>
          </select>
        </div>
        
        <button type="submit" name="search" class="btn btn-primary">
          <i class="material-icons" style="vertical-align: middle; margin-right: 5px;">insert_chart</i>Generate Report
        </button>
      </form>
    </div>

    <!--YEARLY SALES-->
    <div id="Yearly" class="tabcontent">
      <h3 id="report-title">Yearly Inventory Report</h3>

      <form method="post" action="yearly_inv_search.php" class="form-inline">
        <div class="form-group">
          <label for="year" class="search-lbl">Year: </label>
          <select name="year" class="form-control">
            <?php
                      for($n=2022;$n<=2050;$n++){
                          ?>
                          <option value="<?php echo $n; ?>"><?php echo $n; ?></option>
                          <?php
                      }
                  ?>
          </select>
        </div>
        
        <button type="submit" name="search" class="btn btn-primary">
          <i class="material-icons" style="vertical-align: middle; margin-right: 5px;">insert_chart</i>Generate Report
        </button>
      </form>
    </div>
  </div>

  <script type="text/javascript">
    document.getElementById("defaultOpen").click();

    function openType(evt, reportType) {
      var i, tabcontent, tablinks;

      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }

      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }

      document.getElementById(reportType).style.display = "block";
      evt.currentTarget.className += " active";
    }
  </script>
</body>