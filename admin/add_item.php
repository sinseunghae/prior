<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Add Item</title>
  <link rel="stylesheet" href="css/newadd_product_style.css">
  <!--Boxicons CDN Link-->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, intial-scale=1.0">
  <link rel="shortcut icon" href="../images/dcdg.png" type="image/x-icon">
  <link rel=”stylesheet” href=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css”rel=”nofollow” integrity=”sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I” crossorigin=”anonymous”>
  <style type="text/css">
    .bootstrap-tagsinput .tag {
      margin-right: 2px;
      color: white;
      border-radius: 5px;
      background-color: #1687A7;
      padding: 0.2rem;
    }

    a{

      font-size:1em;
      color: white; 
      text-decoration: none;
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

    select {
      padding:  1px 45px;
      color:  black;
      background-color: white;
      cursor: pointer;
      border-color: white;
      border-radius: 5px;
      height: 45px;
      width: 100%;
      text-align: left;
    }

    select: focus, select; hover: {
      outline: none;
      border-color: #276678;
    }

  </style>
</head>
<body>
  <!-- Sidebar -->
  <?php include 'includes/sidebar.php'; ?>

  <!-- Content -->
  <div class="content" style="height: 73%;">
    <div class="col-6" align="center">
      <div class="container" style="height: 70%;">
        <div class="title">Add Item</div><br>
        <form action="" method="post">
          <fieldset>

            <div class="user-details">    
              <div class="input-box" style="width:50%">
                <span class='details'>Select an item</span>
                <select name="item">

                  <?php
                  $mysqli = NEW mysqli('localhost','root','','dcdg');
                  $resl = $mysqli->query("SELECT * FROM product");
                  ?>

                  <?php
                  while($rows = $resl->fetch_assoc()){
                    $item = $rows['product_name'];
                    $ite= $rows['product_variations'];
                    $it= $rows['product_size'];
                    $items = $rows['barcode'];
                    echo "<option value = '$items'>$item,$ite,$it</option>";

                  }
                  ?>
                </select>
              </div>

            <div class="input-box">
                <span class="details">Quantity</span>
                <input type="number" name="quantity" placeholder="Enter quantity" required="" value="<?php if (isset($_POST['quantity'])) {echo $_POST['quantity'];} ?>">
              </div>
            </div>

            <div class="input-box" style="width:50%">
              <span class='details'>Branch</span>
              <select name="branch">
        <?php
          
                  for($br = 1; $br <= 4; $br++) {
                    $branch = "";
                      switch($br) {
                          case 1:
                            $branch = "Mabini Branch";
                            break;
                          case 2:
                            $branch = "Abanao Branch";
                            break;
                          case 3:
                            $branch = "Magsaysay Branch";
                            break;
                          case 4:
                            $branch = "Market Branch";
                            break;
                      }
                      echo "<option value='" . $br . "'>" . $branch . "</option>";
                  } 
         
         mysqli_close($connection);
        ?>
      </select>

            </div>

            <div class="form-group" align="center">
              <div><br>
                <button id="button1id"  name="button1id" class="btn btn-info"><b>Add</b></button>
                <button type="button" class="btn btn-info"><a id="am" href = "inventory.php"><b>Back</b></button></a>
              </div>
            </div>

            <div><br>
            </fieldset>
            <?php
            if (isset($_POST['item']) and isset($_POST['quantity']) and isset($_POST['branch']))
            {
              $hostName = "localhost";
              $userName = "root";
              $password = "";
              $dbName = "dcdg";

              $connection = mysqli_connect($hostName, $userName, $password, $dbName);

              if (!$connection) 
              {
                die("Connection failed: " . mysqli_connect_error());
              }

              $sql= "SELECT * FROM branch1 INNER JOIN branch2 ON branch1.barcode=branch2.barcode INNER JOIN branch3 ON branch2.barcode=branch3.barcode INNER JOIN branch4 ON branch3.barcode=branch4.barcode WHERE barcode = '" . $_POST['item'] . "'";
              $sql2 = "SELECT * FROM branch1 INNER JOIN branch2 ON branch1.barcode=branch2.barcode INNER JOIN branch3 ON branch2.barcode=branch3.barcode INNER JOIN branch4 ON branch3.barcode=branch4.barcode WHERE barcode = '" . $_POST['item'] . "'";
              $sql3 = "SELECT * FROM branch1 INNER JOIN branch2 ON branch1.barcode=branch2.barcode INNER JOIN branch3 ON branch2.barcode=branch3.barcode INNER JOIN branch4 ON branch3.barcode=branch4.barcode WHERE barcode = '" . $_POST['item'] . "'";
              $result = mysqli_query($connection, $sql);
              $result2 = mysqli_query($connection, $sql2);
              $result3 = mysqli_query($connection, $sql3);
              $quantity = $_POST['quantity'];
              $bra = $_POST['branch'];

                    // $sql = "SELECT * FROM inventory WHERE product_name = '" . $_POST['item'] . "' AND branch_id = '" . $_POST['branch'] . "'";
                    // $sql2 = "SELECT quantity FROM inventory WHERE quantity = '" . $_POST['quantity'] . "'";

              if (!$result || mysqli_num_rows($result) == 0) 
              { 
                switch ($bra) {
                  case '1':
                    $sql="INSERT INTO branch1(category,product_name,price,barcode,variations,sizes) SELECT product_category, product_name, product_price, barcode, product_variations, product_size FROM product WHERE barcode = '" . $_POST['item'] . "'";
                    if (mysqli_query($connection, $sql)) 
                      {
                        
                      }
                    break;
                  case '2':
                    $sql="INSERT INTO branch2(category,product_name,price,barcode,variations,sizes) SELECT product_category, product_name, product_price, barcode, product_variations, product_size FROM product WHERE barcode ='" . $_POST['item'] . "'";
                    if (mysqli_query($connection, $sql)) 
                      {
                        
                      }
                    break;
                  case '3':
                    $sql="INSERT INTO branch3(category,product_name,price,barcode,variations,sizes) SELECT product_category, product_name, product_price, barcode, product_variations, product_size FROM product WHERE barcode ='" . $_POST['item'] . "'";
                    if (mysqli_query($connection, $sql)) 
                      {
                        
                      }
                    break;
                  case '4':
                    $sql="INSERT INTO branch4(category,product_name,price,barcode,variations,sizes) SELECT product_category, product_name, product_price, barcode, product_variations, product_size FROM product WHERE barcode ='" . $_POST['item'] . "'";
                    if (mysqli_query($connection, $sql)) 
                      {

                      }
                    break;
                }

                      // INSERT INTO column_1 ( val_1, val_from_other_table ) 
                      // VALUES('val_1', (SELECT  val_2 FROM table_2 WHERE val_2 = something))
              } 

              else 
              {
                echo "<div class='alert alert-danger' role='alert'><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error: </strong>Product already existing!</div><br>"; 
              }
              if(!$result2 || mysqli_num_rows($result2) == 0){
                switch ($bra) {
                  case '1':
                    $sql2 = "UPDATE branch1 SET quantity= quantity + '" . $_POST['quantity'] . "', branch_id = '" . $_POST['branch'] ."' WHERE barcode = '" . $_POST['item'] . "'";
                    break;
                  case '2':
                    $sql2 = "UPDATE branch2 SET quantity= quantity + '" . $_POST['quantity'] . "', branch_id = '" . $_POST['branch'] ."' WHERE barcode = '" . $_POST['item'] . "'";
                    break;
                  case '3':
                    $sql2 = "UPDATE branch3 SET quantity= quantity + '" . $_POST['quantity'] . "', branch_id = '" . $_POST['branch'] ."' WHERE barcode = '" . $_POST['item'] . "'";
                    break;
                  case '4':
                    $sql2 = "UPDATE branch4 SET quantity= quantity + '" . $_POST['quantity'] . "', branch_id = '" . $_POST['branch'] ."' WHERE barcode = '" . $_POST['item'] . "'";
                    break;
                }

                if (mysqli_query($connection, $sql2)) 
                {
                  echo "<div class='alert alert-success' role='alert'><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Success:</strong>The product has updated successfully!</div><br>";
                }
                else
                {
                  echo "<h1>Error: " . $sql . "<br>" . mysqli_error($connection) . "</h1>";
                }
              }
              if($result3){
                switch ($bra) {
                  case '1':
                    $sql3 = "UPDATE branch1 SET quantity= quantity + '" . $_POST['quantity'] . "' WHERE barcode = '" . $_POST['item'] . "'";
                    break;
                  case '2':
                    $sql3 = "UPDATE branch2 SET quantity= quantity + '" . $_POST['quantity'] . "' WHERE barcode = '" . $_POST['item'] . "'";
                    break;
                  case '3':
                    $sql3 = "UPDATE branch3 SET quantity= quantity + '" . $_POST['quantity'] . "' WHERE barcode = '" . $_POST['item'] . "'";
                    break;
                  case '4':
                    $sql3 = "UPDATE branch4 SET quantity= quantity + '" . $_POST['quantity'] . "' WHERE barcode = '" . $_POST['item'] . "'";
                }
                if (mysqli_query($connection, $sql3)) 
                {
                  echo "<div class='alert alert-success' role='alert'><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Success:</strong>The product has updated successfully!</div><br>";
                }
                else
                {
                  echo "<h1>Error: " . $sql . "<br>" . mysqli_error($connection) . "</h1>";
                }
              }

            }

            ?>


          </form>
        </div>
      </div>
    </div>
  </body> 
  </html>


