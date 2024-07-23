<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Supplier</title>
  <link rel="stylesheet" href="css/newedit_supplier_style.css">
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
      
  </style>

</head>
<body>
	<!-- Sidebar -->
	<?php include 'includes/sidebar.php'; ?>

	<!-- Content -->
	<div class="content">
	<div class="col-6" align="center">
	
	<div class="container">
    <div class="title">Add Supplier</div><br>
      <form action="" method="post">
        <fieldset>
        <div class="user-details">
          <div class="input-box">
            <span class='details'>Full Name</span>
            <input id="textinput" name="supplier_name" type="text" placeholder="Enter Full Name" class="form-control input-md" required="" value="<?php if (isset($_POST['supplier_name'])) {echo $_POST['supplier_name'];} ?>">
          </div>

            <div class="input-box">
            <span class='details'>Company Name</span>
            <input id="textinput" name="company" type="text" placeholder="Enter Company Name" class="form-control input-md" required="" value="<?php if (isset($_POST['company'])) {echo $_POST['company'];} ?>">
          </div>


            <div class="input-box">
            <span class='details'>Contact Number</span>
            <input id="textinput" name="supplier_contact_number" type="text" placeholder="Enter Contact Number" class="form-control input-md" required="" value="<?php if (isset($_POST['supplier_contact_number'])) {echo $_POST['supplier_contact_number'];} ?>">
          </div>

           <div class="input-box">
             <span class='details'>Address</span>
             <input id="textinput" name="address" type="text" placeholder="Enter Address" class="form-control input-md" required="" value="<?php if (isset($_POST['address'])) {echo $_POST['address'];} ?>">
          </div>

          <div class="input-box">
             <span class='details'>Email</span>
             <input id="textinput" name="email" type="text" placeholder="Enter Address" class="form-control input-md" required="" value="<?php if (isset($_POST['email'])) {echo $_POST['email'];} ?>">
          </div>
          </div>
        <!--<div class="input-group-l m-5">
        <labe>Item/s</label>
        <input type="text" class="form-control p-4" data-role="tagsinput"/>
        </div>-->

        <!-- Buttons -->
        <div class="form-group" align="center">
          <div><br>
            <button id="button1id" name="button1id" class="btn btn-info"><b>Add</b></button>
            <button type="button" class="btn btn-info"><a id="am" href = "supplier_list.php"><b>Back</b></button></a>
            </div>
          </div>

       </fieldset>
      </form>  
    </div>
    </div>
	</div> 
</body>	
<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
  <script>
    $(function () {
      $('input')
        .on('change', function (event) {
          var $element = $(event.target);
          var $container = $element.closest('.example');

          if (!$element.data('tagsinput')) return;

          var val = $element.val();
          if (val === null) val = 'null';
          var items = $element.tagsinput('items');

          $('code', $('pre.val', $container)).html(
            $.isArray(val)
              ? JSON.stringify(val)
              : '"' + val.replace('"', '\\"') + '"'
          );
          $('code', $('pre.items', $container)).html(
            JSON.stringify($element.tagsinput('items'))
          );
        })
        .trigger('change');
    });
  </script>-->
</html>

<?php
  if (isset($_POST['supplier_name']) and isset($_POST['supplier_contact_number']) and isset($_POST['company']) and isset($_POST['address']) and isset($_POST['email']))
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
    
    $sql = "SELECT * FROM supplier WHERE supplier_name = '" . $_POST['supplier_name'] . "'";
    $result = mysqli_query($connection, $sql);

    
    if (!$result || mysqli_num_rows($result) == 0)
    { 
      $sql = "INSERT INTO supplier (supplier_name, supplier_contact_number, comapny, address) VALUES ('" . $_POST['supplier_name'] . "', '" . $_POST['supplier_contact_number'] . "', '" . $_POST['company'] . "', '" . $_POST['address'] . "', ' ".'pending'." ')";
  
      if (mysqli_query($connection, $sql)) 
      {
        echo "<div class='alert alert-success' role='alert'><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Success:</strong> New supplier successfully added!</div><br>";
      }
      else
      {
        echo "<h1>Error: " . $sql . "<br>" . mysqli_error($connection) . "</h1>";
      }
    } 
    else 
    {
      echo "<div class='alert alert-danger' role='alert'><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error:</strong>Supplier already existing!...</div><br>"; 
    }
  }
?>