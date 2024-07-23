<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>View Sales Order</title>
  <link rel="stylesheet" href="css/view_sales_order_style.css">
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
      <div class="title"><b>SALES ORDER</b></div><br>
      <div class="content">
        <form action="/action_page.php" method="post">

          <div class="invoice-details">
            <div class="input-box">
              <span class="details"><b>Date: </b>12/01/21</span>
            </div>
            <div class="input-box">
              <span class="details"><b>Sales Order #: </b>SO-03</span>
            </div>
            <div class="input-box">
              <span class="details"><b><br>Customer Name: </b>Daniella Mae Manuel</span>
            </div>
            <div class="input-box">
              <span class="details"><b>Shipping Address: </b>Mango Avenue</span>
            </div>
            <div class="input-box">
              <span class="details"><b>Qty: </b>81</span>
            </div>
            <div class="input-box">
              <span class="details"><b>Product: </b>Pillowcase</span>
            </div>
            <div class="input-box">
              <span class="details"><b>Amount: </b>₱ 77,000</span>
            </div>
            <div class="input-box">
              <span class="details"><b>Status: </b>Confirmed</span>
            </div>
          </div>	
          <div class="button">
            <input type="submit" value="Print">
          </div>
          <div class="button">
            <a href="sales_order.php"><input type="button" value="Back" ></a>
          </div>
        </form>
      </div>
    </div>   
  </div>
</body>	
</html>