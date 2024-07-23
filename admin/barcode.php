<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Generate Barcode</title>
	<link rel="stylesheet" href="css/barcode_style.css">
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

	<!-- Content -->
	<div class="content"><br>
	<div class="col-6" align="center">
	
	<div class="container">
    <div class="title">Barcode</div><br>
      <form action="generate_barcode.php" method="post">

        <div class="user-details">
          <div class="input-box">
            <span class="details">Manufacturer Code</span>
            <input type="number" placeholder="Enter manufacturer code"  min="0" max="9" required>
          </div>

          <div class="input-box">
            <span class="details">Prefix</span>
            <input type="number" placeholder="Enter prefix number" min="0" required>
          </div>

          <div class="input-box">
            <span class="details">Item</span>
            <input type="number" placeholder="Enter item number" min="0" required>
          </div>


            <div class="input-box">
            <span class="details">Check Digit</span>
            <input type="number" placeholder="Enter check digit" min="0" max="9" required>
          </div>

        </div>	
        <div>
        
        </div>

        <div class="button">
          <input type="submit" value="Generate">
        </div>
      </form>

    </div>
    </div>
    
	</div>
</body>	
</html>
