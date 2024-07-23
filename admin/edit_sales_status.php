<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Edit Status</title>
  <link rel="stylesheet" href="css/purchase_status.css">
  <!--Boxicons CDN Link-->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, intial-scale=1.0">
  <link rel="shortcut icon" href="../images/dcdg.png" type="image/x-icon">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet"/>

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
      width: 50%;
      text-align: left;
    }

    select: focus, select; hover: {
      outline: none;
      border-color: #276678;
    }
    .details {
      text-align: left
    }
  </style>

</head>
<body>
  <!-- Sidebar -->
  <?php include 'includes/sidebar.php'; ?>

  <!-- Content -->
  <div class="content" style="height: 80%;">
   <div class="col-6" align="center">

     <div class="container">
      <div class="title">Edit Sales Order Status</div><br>

      <form action="" method="post">
        <fieldset>

          <?php
          if (isset($_GET['purchase_id']))
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
            $sql = "SELECT * FROM sales_order WHERE purchase_id = " . $_GET['purchase_id'];
            $result = mysqli_query($connection, $sql);

            if (!$result || mysqli_num_rows($result) == 0)
            { 
              echo "<h1>Record not found!</h1>";
            } 
            else 
            {
              // CHECKPOINT
              while ($row = mysqli_fetch_assoc($result)) 
              {
                $bar = $row['barcode'];
                $bra = $row['branch_id'];
                $qua = $row['purchase_quantity'];
                

                echo "<span class=''><b>Status: </b>".$row['status']."</span><br>";

              } 
            }
            mysqli_close($connection);
          }
          ?>
          <div class="input-box">
            <select name ="status">
              <option value="2">Completed</option>
            </select>
          </div>
          
          <!-- Buttons -->
          <div class="form-group" align="center">
            <div><br>
              <button id="button1id" name="button1id" class="btn btn-info"><b>Save</b></button>
              <button type="button" class="btn btn-info"><a id="am" href = "sales_order.php"><b>Back</b></button></a>
            </div>
          </div><br>
          
          <?php 
          if (isset($_POST['button1id'])) {
            $hostName = "localhost";
            $userName = "root";
            $password = "";
            $dbName = "dcdg";

            $connection = mysqli_connect($hostName, $userName, $password, $dbName);

            if (!$connection) 
            {
              die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "UPDATE purchase_order SET status = '" . $_POST['status'] . "' WHERE purchase_id = '" . $_GET['purchase_id'] . "'";
            $sql2 = "UPDATE sales_order SET status = '" . $_POST['status'] . "' WHERE purchase_id = '" . $_GET['purchase_id'] . "'";
            $sql3 = "SELECT * FROM branch1 INNER JOIN branch2 ON branch1.barcode=branch2.barcode INNER JOIN branch3 ON branch2.barcode=branch3.barcode INNER JOIN branch4 ON branch3.barcode=branch4.barcode WHERE barcode =$bar";
            $sql4 = "SELECT * FROM branch1 INNER JOIN branch2 ON branch1.barcode=branch2.barcode INNER JOIN branch3 ON branch2.barcode=branch3.barcode INNER JOIN branch4 ON branch3.barcode=branch4.barcode WHERE barcode =$bar";
            $sql5 = "SELECT * FROM branch1 INNER JOIN branch2 ON branch1.barcode=branch2.barcode INNER JOIN branch3 ON branch2.barcode=branch3.barcode INNER JOIN branch4 ON branch3.barcode=branch4.barcode WHERE barcode =$bar";
            $result =mysqli_query($connection, $sql3) ;
            $result2 =mysqli_query($connection, $sql4) ;
            $result3 =mysqli_query($connection, $sql5) ;
            if(mysqli_query($connection, $sql)){
              if (mysqli_query($connection, $sql2)) {
              echo"<div class='alert alert-success' role='alert'><center>Your changes have been successfully saved!</center></div>";
            }

            }
            if (!$result || mysqli_num_rows($result) == 0) 
              { 
                switch ($bra) {
                  case '1':
                    $sql="INSERT INTO branch1(category,product_name,price,barcode,variations,sizes) SELECT product_category, product_name, product_price, barcode, product_variations, product_size FROM product WHERE barcode = $bar";
                    if (mysqli_query($connection, $sql)) 
                      {
                        
                      }
                    break;
                  case '2':
                    $sql="INSERT INTO branch2(category,product_name,price,barcode,variations,sizes) SELECT product_category, product_name, product_price, barcode, product_variations, product_size FROM product WHERE barcode =$bar";
                    if (mysqli_query($connection, $sql)) 
                      {
                        
                      }
                    break;
                  case '3':
                    $sql="INSERT INTO branch3(category,product_name,price,barcode,variations,sizes) SELECT product_category, product_name, product_price, barcode, product_variations, product_size FROM product WHERE barcode = $bar";
                    if (mysqli_query($connection, $sql)) 
                      {
                        
                      }
                    break;
                  case '4':
                    $sql="INSERT INTO branch4(category,product_name,price,barcode,variations,sizes) SELECT product_category, product_name, product_price, barcode, product_variations, product_size FROM product WHERE barcode = $bar";
                    if (mysqli_query($connection, $sql)) 
                      {

                      }
                    break;
                }

                      // INSERT INTO column_1 ( val_1, val_from_other_table ) 
                      // VALUES('val_1', (SELECT  val_2 FROM table_2 WHERE val_2 = something))
              } 
            if(!$result2 || mysqli_num_rows($result2) == 0){
              switch ($bra) {
                  case '1':
                    $sql2 = "UPDATE branch1 SET quantity= quantity + '" . $qua . "', branch_id = '" . $bra ."' WHERE barcode = '" . $bar . "'";
                    break;
                  case '2':
                    $sql2 = "UPDATE branch2 SET quantity= quantity + '" . $qua . "', branch_id = '" . $bra ."' WHERE barcode = '" . $bar . "'";
                    break;
                  case '3':
                    $sql2 = "UPDATE branch3 SET quantity= quantity + '" . $qua . "', branch_id = '" . $bra ."' WHERE barcode = '" . $bar . "'";
                    break;
                  case '4':
                    $sql2 = "UPDATE branch4 SET quantity= quantity + '" . $qua . "', branch_id = '" . $bra ."' WHERE barcode = '" . $bar . "'";
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
                    $sql3 = "UPDATE branch1 SET quantity= quantity + '" . $qua . "' WHERE barcode = '" . $bar. "'";
                    break;
                  case '2':
                    $sql3 = "UPDATE branch2 SET quantity= quantity + '" . $qua . "' WHERE barcode = '" . $bar. "'";
                    break;
                  case '3':
                    $sql3 = "UPDATE branch3 SET quantity= quantity + '" . $qua . "' WHERE barcode = '" . $bar. "'";
                    break;
                  case '4':
                    $sql3 = "UPDATE branch4 SET quantity= quantity + '" . $qua . "' WHERE barcode = '" . $bar. "'";
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





            mysqli_close($connection);
          }
          ?>
        </fieldset>
      </form>
      
    </div>
  </div>

</div>
</body> 
</html>