<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Generate Barcode</title>
  <link rel="stylesheet" href="css/generate_barcode.css">
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

  <!-- Barcode -->
	<div class="home_content">   
   <div class="col-6" align="center">
     <div class="container">
      <div class="title"><b>BARCODE</b></div><br>
      <div class="content">
        <form action="/action_page.php" method="post">

          <div class="barcode-details">
            <?php
            require 'vendor/autoload.php';
            // This will output the barcode as HTML output to display in the browser
            $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
            echo $_POST['barcode'];
            echo $generator->getBarcode($_POST['barcode'], $generator::TYPE_EAN_13);
            ?>



          <br>  
          </div>	
          <div class="button">
            <input type="submit" value="Print">
          </div>
          <div class="button">
            <a href="barcode.php"><input type="button" value="Back"></a>
          </div>
        </form>
      </div>
    </div>   
  </div>
</body>	
</html>