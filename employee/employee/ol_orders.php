<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Orders</title>
  <link rel="stylesheet" href="css/ol_orders.css">
  <!--Boxicons CDN Link-->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, intial-scale=1.0">
  <link rel="shortcut icon" href="../images/dcdg.png" type="image/x-icon">
  <style>
    table, th, td {
    border: none;
    text-align: center;
    line-height: 30px;
    padding: 5px;
    font-size: 18px;
  }
  th, td {
    background-color: #00000;
    padding: 5px;
  }
  </style>
</head>
<body>
	
	<div class="home_content"> 
  <br><br>  
   <div class="col-6" align="center">
     <div class="container">
      <div class="content">

        <form action="/action_page.php" method="post">

          <div class="order-details">

            <table style="width:100%">
            <tr>
              <th style ="text-align:left;">Product</th>
              <th>Quantity</th> 
            </tr>
            <tr>
              <td>
                <div style ="text-align:left;">Alcohol
                 <br>Clothes
                 <br>Toys
                 <br>Face Mask</div></td>
              <td>
                <div>2
                <br>3
                <br>2
                <br>1</div></td>
            </tr>
          </table>
          <br>  
          </div>	
          <div class="button">
            <a href="online_transactions.php"><input type="button" value="Back" ></a>
          </div>
        </form>
      </div>
    </div>   
  </div>
</body>	
</html>