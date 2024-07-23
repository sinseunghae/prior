<?php
  require_once('auth.php');
?>
<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Add Product</title>
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
  <div class="content">
  <div class="col-6" align="center">
  <div class="container" style="height: 70%;">
    <div class="title">Add Product</div><br>
    <form action="" method="post">
    <fieldset>
      
        <div class="user-details">
          <div class="input-box">
            <span class="details">Barcode</span>
            <input type="number" name="barcode"placeholder="Enter barcode" required="" value="<?php if (isset($_POST['barcode'])) {echo $_POST['barcode'];} ?>">
          </div>

          <div class="input-box">
            <span class="details">Product Name</span>
            <input type="text" name="pro_name" placeholder="Enter product name" required="" value="<?php if (isset($_POST['pro_name'])) {echo $_POST['pro_name'];} ?>">
          </div>

        <div class="input-box">
        <span class="details">Category</span>
        <select name ="category">
          <option>Curtain</option>
          <option>Clothes</option>
          <option>Fabric</option>
          <option>Accessories</option>
          <option>Toys</option>
          <option>Essential goods</option>
          <option>Household items</option>
      </select>
    </div>

            <div class="input-box">
            <span class="details">Price</span>
            <input type="number" name="price" placeholder="Enter price" required="" value="<?php if (isset($_POST['price'])) {echo $_POST['price'];} ?>">
          </div>

          <div class="input-box">
            <span class="details">Variation</span>
            <input type="text" name="variation" placeholder="Enter variation" required="" value="<?php if (isset($_POST['variation'])) {echo $_POST['variation'];} ?>">
          </div>

          <div class="input-box">
            <span class="details">Reorder Point</span>
            <input type="number" name="reorder"placeholder="Enter reorder point" min="1" required="" value="<?php if (isset($_POST['reorder'])) {echo $_POST['reorder'];} ?>">
          </div>
        
        <div class="input-box">
        <span class="details">Size</span>
        <select name ="size">
          <option>Small</option>
          <option>Medium</option>
          <option>Large</option>
          <option>XL</option>
          <option>N/A</option>
      </select>
    </div>
    <div class="input-box">
    <span class="details">Supplier</span>
    <select name="supp_name">
          <?php
$mysqli = NEW mysqli('localhost','root','','dcdg');
$resl = $mysqli->query("SELECT * FROM supplier");
?>
<?php
while($rows = $resl->fetch_assoc()){
  $supp_name = $rows['supplier_name'];
  $sup_name = $rows['supplier_ID'];
  echo "<option value = '$sup_name'>$supp_name</option>";

}

?>
</select>
</div>
   
</div>


          <div class="form-group" align="center">
          <div><br>
            <button id="button1id"  name="button1id" class="btn btn-info"><b>Add</b></button>
            <button type="button" class="btn btn-info"><a id="am" href = "products.php"><b>Back</b></button></a>
            </div>
          </div>

        <div><br>
        </fieldset>
  <?php
  if (isset($_POST['barcode']) and isset($_POST['pro_name']) and isset($_POST['category']) and isset($_POST['price']) and isset($_POST['size']) and isset($_POST['variation']) and isset($_POST['reorder']) and isset($_POST['supp_name']))
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
    
    $sql = "SELECT * FROM product WHERE barcode = '" . $_POST['barcode'] . "'";
    //$sql2= "SELECT * FROM branch1 INNER JOIN branch2 ON branch1.barcode=branch2.barcode INNER JOIN branch3 ON branch2.barcode=branch3.barcode INNER JOIN branch4 ON branch3.barcode=branch4.barcode WHERE barcode = '" . $_POST['barcode'] . "'";
    $result = mysqli_query($connection, $sql);
    //$result2 = mysqli_query($connection, $sql2);
    //$bra = $_POST['branch'];


    
    if (!$result || mysqli_num_rows($result) == 0) 
    { 
      $sql = "INSERT INTO product (product_name,product_price,reorder_point,product_variations,product_size,product_category,barcode,supplier_name) VALUES ('".$_POST['pro_name']."','".$_POST['price']."','".$_POST['reorder']."','".$_POST['variation']."','".$_POST['size']."','".$_POST['category']."','".$_POST['barcode']."','".$_POST['supp_name']."')";

        if (mysqli_query($connection, $sql)) 
      {
        echo "<div class='alert alert-success' role='alert'><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Success:</strong> New product successfully added!</div><br>";
      }
      else
      {
        echo "<h1>Error: " . $sql . "<br>" . mysqli_error($connection) . "</h1>";
      }
    } 
    else 
    {
      echo "<div class='alert alert-danger' role='alert'><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error: </strong>Product already existing!</div><br>"; 
    }
  }
?>


    </form>
    </div>
    </div>
  </div>
</body> 
</html>


