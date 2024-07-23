<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Inventory Report</title>
	<link rel="stylesheet" href="css/inventory_report_style.css">
	<!--Boxicons CDN Link-->
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="shortcut icon" href="../images/dcdg.png" type="image/x-icon">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<style>
    body { overflow-y: hidden; }

     a{
    
      font-size:1em;
      color: white; 
     
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
    
  </style>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="css/inventory_report_style.css">

	<!-- Sidebar -->
	<?php include 'includes/sidebar.php'; ?>

	<!-- Sales -->
	<div class="home_content"><br>
		<div class="container"><br>
			<h1 class="display-5 font-weight-bold" style="color: #053742;">Inventory Report</h1>

			<br>

			<!-- Main Content -->
			<div class="sales-form-center">
		        <form action="/action_page.php" method="post">
		          <table class="table-striped" id="sales-info">
		            <thead>
                      <tr>
                          <td colspan="1">Barcode</td>
                        <td colspan="1">Product</td>
                        <td colspan="1">Price</td>
                        <td colspan="1">Quantity</td>
                        <td colspan="1">Revenue</td>
                        <td colspan="1">Margin</td>
                        <td colspan="1">Rejected</td>
                        <td colspan="1">Returned</td>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td colspan="1" id="prod">123456789012</td>
                        <td colspan="1">Face Shield</td>
                        <td colspan="1">₱ 100</td>
                        <td colspan="1">500</td>
                        <td colspan="1">₱ 200,000.00</td>
                        <td colspan="1">25%</td>
                        <td colspan="1">4</td>
                        <td colspan="1">3</td>
                      </tr>
                      <tr>
                        <td colspan="1" id="prod">123456789012</td>
                        <td colspan="1">Face Shield</td>
                        <td colspan="1">₱ 100</td>
                        <td colspan="1">500</td>
                        <td colspan="1">₱ 200,000.00</td>
                        <td colspan="1">25%</td>
                        <td colspan="1">4</td>
                        <td colspan="1">3</td>
                      </tr>
                      <tr>
                        <td colspan="1" id="prod">123456789012</td>
                        <td colspan="1">Face Shield</td>
                        <td colspan="1">₱ 100</td>
                        <td colspan="1">500</td>
                        <td colspan="1">₱ 200,000.00</td>
                        <td colspan="1">25%</td>
                        <td colspan="1">4</td>
                        <td colspan="1">3</td>
                      </tr>
                      <tr>
                        <td colspan="1" id="prod">123456789012</td>
                        <td colspan="1">Face Shield</td>
                        <td colspan="1">₱ 100</td>
                        <td colspan="1">500</td>
                        <td colspan="1">₱ 200,000.00</td>
                        <td colspan="1">25%</td>
                        <td colspan="1">4</td>
                        <td colspan="1">3</td>
                      </tr>


                    </tbody>
                  </table>

              <div>
                <button class="generate-btn"><a id="am" href = "reports.php">Back</button></a> 
                <button style = "text-align:right;" class="generate-btn">Print</button>
                <button style = "text-align:right;" class="generate-btn">Save as PDF</button>
              </div>
              </div>
		        </form>
		      </div>
		    </div>
		</div>
	</div>

	<script type="text/javascript">

  </script>
</body>	
</html>