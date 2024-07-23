<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Create Purchase</title>
	<link rel="stylesheet" href="css/newcreate_purchase_style.css">
	<link rel=”stylesheet” href=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css”rel=”nofollow” integrity=”sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I” crossorigin=”anonymous”>
	<!--Boxicons CDN Link-->
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="shortcut icon" href="../images/dcdg.png" type="image/x-icon">
  <style>
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
    .dropdown {
      width: 100%;
      display: inline-block;
      position: relative;
      top: 23px;
      left: -1px;

    }

    .dd-button {
      width: 100%;
      display: inline-block;
      border: 1px;
      border-radius: 4px;
      padding: 10px 30px 10px 20px;
      background-color: #ffffff;
      cursor: pointer;
      white-space: nowrap;
    }

    .dd-button:after {
      content: '';
      position: absolute;
      top: 50%;
      right: 15px;
      height: 0; 
      border-left: 5px solid transparent;
      border-right: 5px solid transparent;
      border-top: 5px solid black;
    }

    .dd-button:hover {
      background-color: #f6f6f6;
    }

    .dd-input {
      display: none;
    }

    .dd-menu {
      width: 100%;
      position: absolute;
      top: 100%;
      border: 1px solid #ccc;
      border-radius: 4px;
      padding: 0;
      margin: 2px 0 0 0;
      box-shadow: 0 0 6px 0 rgba(0,0,0,0.1);
      background-color: #ffffff;
      list-style-type: none;
      z-index: 1;
    }

    .dd-input + .dd-menu {
      display: none;
    } 

    .dd-input:checked + .dd-menu {
      display: block;
    } 

    .dd-menu li {
      padding: 10px 20px;
      cursor: pointer;
      white-space: nowrap;
    }

    .dd-menu li:hover {
      background-color: #f6f6f6;
    }

    .dd-menu li a {
      display: block;
      margin: -10px -20px;
      padding: 10px 20px;
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
     <div class="container">

      <div class="title">Create Purchase</div><br>

      <fieldset>
        <form method="post" action="">

          <div class="user-details">
            <div class="input-box">
              <span class="details">Supplier</span>
              <select name=branch_id id=branch_id>
               <option value='' selected>Select</option>
             <?Php
                require "config.php";// connection to database 
                $sql="SELECT  * from supplier"; // Query to collect data 

                foreach ($dbo->query($sql) as $row) {
                  echo "<option value=$row[supplier_name]>$row[supplier_name]</option>";
                }
                ?>
              </select>
            </div>

           
            <div class="input-box">
                  <span class="details">Product</span>
                  <select name=product_name id=product_name>
                  <option value='' selected>Select</option>
                  </select>
                  <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                  <script>
                    $(document).ready(function() {
                ////////////
                $('#branch_id').change(function(){
                //var st=$('#category option:selected').text();
                var cat_id=$('#branch_id').val();
                $('#product_name').empty(); //remove all existing options
                ///////
                $.get('ddck.php',{'cat_id':cat_id},function(return_data){
                  $.each(return_data.data, function(key,value){
                    $("#product_name").append("<option value="+value.barcode+ ">"+value.product_name+", "+value.product_variations+", "+value.product_size+"</option>");
                  });
                }, "json");
                ///////
              });
                /////////////////////
              });
            </script>
          </div>
          <th class="p-1 text-right" colspan="6"><span><button class="btn btn btn-sm btn-flat btn-primary py-0 mx-1" type="button" id="add_row">Add Row</button></span> Sub Total</th>

          <div class="input-box">
            <span class="details">Quantity</span>
            <input type="number" name="quantity" placeholder="Enter item number" min="1" required="" value="<?php if (isset($_POST['quantity'])) {echo $_POST['quantity'];} ?>">
          </div>

          <div class="input-box">
            <span class="details">Price</span>
            <input type="number" name="price" placeholder="Enter amount" required="" value="<?php if (isset($_POST['price'])) {echo $_POST['price'];} ?>">
          </div>

          <div class="input-box">
            <span class="details">Order Date</span>
            <input type="date" name ="date" placeholder="" required="">
          </div>

          <div class="input-box">
            <span class="details">Branch</span>
            <select name=branch id=branch>
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
                    ?>
            </select>
          </div>

        <div class="mx-auto"><br>
          <button class="btn btn btn-sm btn-flat btn-primary py-0 mx-1" type="button" id="add_row">Add Row</button>
          <button id="button1id" name="button1id" class="btn btn-info"><b>Create</b></button>
          <!--<button onclick="document.getElementById('id01').style.display='block'">Create</button>-->
          <button type="button" class="btn btn-info"><a id="am" href = "purchase_order.php"><b>Back</b></button></a> 
        </div></div><br>

<?php
if(isset($_POST['branch_id']) and isset($_POST['product_name']) and isset($_POST['quantity']) and isset($_POST['price']) and isset($_POST['branch']) and isset($_POST['date'])){

  $hostName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "dcdg";

    $connection = mysqli_connect($hostName, $userName, $password, $dbName);
  
    if (!$connection) 
    {
      die("Connection failed: " . mysqli_connect_error());
    }
    $stat = 1;
    $sql = "INSERT INTO purchase_order (barcode,purchase_date,purchase_quantity,product_price,supplier_name,branch_id,status) VALUES ('" . $_POST['product_name'] . "','" . $_POST['date'] . "','" . $_POST['quantity'] . "','" . $_POST['price'] . "','" . $_POST['branch_id']  . "','" . $_POST['branch']  . "',' ".$stat."')";
    if (mysqli_query($connection, $sql)) 
    {
      $sql2 = "INSERT INTO sales_order (barcode,purchase_date,purchase_quantity,product_price,supplier_name,branch_id,status) VALUES ('" . $_POST['product_name'] . "','" . $_POST['date'] . "','" . $_POST['quantity'] . "','" . $_POST['price'] . "','" . $_POST['branch_id']  . "','" . $_POST['branch']  . "',' ".$stat."')";
      if (mysqli_query($connection, $sql2)) 
    {
      echo "<div class='alert alert-success' role='alert'><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Success:</strong> New purchase order has successfully created!</div><br>";
    }
    }
    else
    {
      echo "<h1>Error: " . $sql . "<br>" . mysqli_error($connection) . "</h1>";
    }
    

}

?>
    </form>
    </fieldset>

</div>
</div>
</div>

</body> 
</html>