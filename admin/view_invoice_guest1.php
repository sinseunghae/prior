<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>View Invoice</title>
  <link rel="stylesheet" href="css/view_invoice_style.css">
  <!--Boxicons CDN Link-->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, intial-scale=1.0">
  <link rel="shortcut icon" href="../images/dcdg.png" type="image/x-icon">
  <style>

  </style>
</head>
<body>
	
  <!-- Sidebar -->
	<?php include 'includes/sidebar.php'; ?>

  <!-- View Invoice -->
	<div class="home_content">   
   <div class="col-6" align="center">
     <div class="container">
      <div class="title"><b>INVOICE</b></div><br>
      <div class="content">
        <form action="/action_page.php" method="post">

          <div class="invoice-details">
            <div class="input-box">
              <span class="details"><b>Date: </b>10/20/21</span>
            </div>
            <div class="input-box">
              <span class="details"><b>Due Date: </b>10/25/21</span>
            </div>
            <div class="input-box">
              <span class="details"><b>Purchase Order #: </b>PO-01</span>
            </div>
            <div class="input-box">
              <span class="details"><b>Sales Order #: </b>SO-01</span>
            </div>
            <div class="input-box">
              <span class="details"><b><br>Customer Name: </b>Leenard Troy Javier</span>
            </div>
            <div class="input-box">
              <span class="details"><b>Invoice Number: </b>INV-001</span>
            </div>

            <div class="input-box">
              <span class="details"><b>Amount: </b>₱ 10,000</span>
            </div>

            <div class="input-box">
              <span class="details"><b>Balance: </b>₱ 5,000</span>
            </div>

            <div class="input-box">
              <span class="details"><b>Status: </b>Pending</span>
            </div>
          </div>	
          <div class="button">
            <input type="submit" value="Print">
          </div>
          <div class="button">
            <a href="invoice.php"><input type="button" value="Back" ></a>
          </div>
        </form>
      </div>
    </div>   
  </div>
</body>	
</html>