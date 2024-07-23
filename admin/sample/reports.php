<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <style type="text/css">
    body {
      overflow-y: hidden;
      font-family: 'Poppins', sans-serif;
    }

    /*Cards Style (start)*/
    .column {
      float: left;
      width: 500px;
      padding: 0 10px;
      text-align: center;
    }

    #row {
      margin: 20px -5px; 
      text-align: center;
    }

    h4 > p { padding-top: 20px; }

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
      color:black;
    }

    a .card:hover {
      background-color: #f1f1f1;
    }
    /*Cards Style (end)*/
  </style>
</head>

<body>
  <!--ADMIN SIDEBAR-->
  <?php include "sidebar.php"; ?>

  <div class="content">
    <!-- Cards (start)-->
    <div class="row" id="row">
      <a href="daily_sales.php">
        <div class="column">
          <div class="card">
              <h4><p>Daily Sales</p></h4>
          </div>
        </div>
      </a>

      <a href="weekly_sales.php">
        <div class="column">
          <div class="card">
              <h4><p>Weekly Sales</p></h4>
          </div>
        </div>
      </a>
    </div>

    <div class="row" id="row">
      <a href="monthly_sales.php">
        <div class="column">
          <div class="card">
              <h4><p>Monthly Sales</p></h4>
          </div>
        </div>
      </a>

      <a href="yearly_sales.php">
        <div class="column">
          <div class="card">
              <h4><p>Yearly Sales</p></h4>
          </div>
        </div>
      </a>
    </div>
    <!-- Cards (end)-->
  </div>
</body>