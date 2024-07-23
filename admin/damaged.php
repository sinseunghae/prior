<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Damaged</title>
	<link rel="stylesheet" href="css/damaged_style.css">
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
	<div class="content" style="height: 245%;">
	<div class="col-6" align="center">
	<div class="container" >
  <div class="title">Damaged</div><br>
    <form action="" method="post">
    <fieldset>

 
      <div class="input-box" style="width:100%">
      <span class="details"  style="text-align: center;">Supplier</span>
        <select name=branch_id id=branch_id>
               <option value='' selected>Select</option>
             <?Php
                require "config.php";// connection to database 
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
            </div><br>
     

            <div class="input-box">
                  <span class="details" style="text-align: center;">Product</span>
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
                $.get('ddck2.php',{'cat_id':cat_id},function(return_data){
                  $.each(return_data.data, function(key,value){
                    $("#product_name").append("<option value="+value.barcode+ ">"+value.product_name+", "+value.variations+", "+value.sizes+"</option>");
                  });
                }, "json");
                ///////
              });
                /////////////////////
              });
            </script>
          </div><br>
            
            <div class="user-details"> 
            <div class="input-box" style="margin-left: 170px; width:50%">
            <span class="details"style="text-align: center;">Quantity</span>
            <input type="number" name="quantity" placeholder="Enter quantity" min="0" required="" value="<?php if (isset($_POST['quantity'])) {echo $_POST['quantity'];} ?>">
            </div></div><br>

            <div class="input-box">
            <select name ="status">
              <option value ="1">Damaged</option>
              <option value ="2">Missing</option>
            </select>
          </div>

        <div><br><br>
        <br>
        <button id="button1id" name="button1id" class="btn btn-info"><b>Submit</b></button>
        <button type="button" class="btn btn-info"><a id="am" href = "damage_list.php"><b>Back</b></button></a>
        </button></a><br>

        <?php
if(isset($_POST['branch_id']) and isset($_POST['product_name']) and isset($_POST['quantity']) and isset($_POST['status'])){
    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "dcdg";

    $connection = mysqli_connect($hostName, $userName, $password, $dbName);

    if (!$connection) 
    {
      die("Connection failed: " . mysqli_connect_error());
    }
    include('connect.php');
    $bran = $_POST['branch_id'];
    $bros = $_POST['product_name'];
    $qua = $_POST['quantity'];
    switch($bran){
      case '1':
        $bors = "SELECT * FROM branch1 WHERE barcode ='".$bros."'";
        break;
      case '2':
        $bors = "SELECT * FROM branch2 WHERE barcode ='".$bros."'";
        break;
      case '3':
        $bors = "SELECT * FROM branch3 WHERE barcode ='".$bros."'";
        break;
      case '4':
        $bors = "SELECT * FROM branch4 WHERE barcode ='".$bros."'";
        break;
    }
    $result = mysqli_query($connection, $bors);
    while ($row = mysqli_fetch_assoc($result)) 
    {
      $pro = $row['product_name'];
      $vars = $row['variations'];
      $siz = $row['sizes'];
    }
    switch ($bran) {
  case '1':
    $sql2 = "UPDATE branch1 
        SET quantity=quantity-?
    WHERE barcode=?";
    break;
  case '2':
  $sql2 = "UPDATE branch2 
        SET quantity=quantity-?
    WHERE barcode=?";
    break;
  case '3':
  $sql2 = "UPDATE branch3 
        SET quantity=quantity-?
    WHERE barcode=?";
    break;
  case '4':
  $sql2 = "UPDATE branch4 
        SET quantity=quantity-?
    WHERE barcode=?";
    break;

}
  $q = $db->prepare($sql2);
  $q->execute(array($qua,$bros));

    $sql = "INSERT INTO damage (barcode, product_name, variation, size, quantity, status, branch_id) VALUES ('".$bros."', '".$pro."', '".$vars."', '".$siz."', '".$qua."', '".$_POST['status']."', '".$bran." ' )";
      if (mysqli_query($connection, $sql)) 
      {
        echo "<div class='alert alert-success' role='alert'><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Success:</strong> New employee successfully created!</div><br>";
      }
      else
      {
        echo "<h1>Error: " . $sql . "<br>" . mysqli_error($connection) . "</h1>";
      }
}
?>
    </fieldset>
      </form>
    </div>
    </div>
    
  </div>
</body> 
</html>
