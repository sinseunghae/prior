<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Create Purchase</title>
	<link rel="stylesheet" href="css/create_purchase_style.css">
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
    
      <form action="/action_page.php" method="post">

        <div class="user-details">
          <div class="input-box">
            <span class="details">Supplier</span>
            <input type="text" placeholder="Enter supplier" required>
          </div>

           <div class="input-box">
            <span class="details">Purchase Order #</span>
            <input type="text" placeholder="" required>
          </div>

       
          <div class="input-box">
            <span class="details">Item</span>
            <input type="text" placeholder="Enter item" required>
           </div>

          <div class="input-box">
            <span class="details">Quantity</span>
          	<input type="number" placeholder="Enter item number" min="1" required>
          </div>

          <div class="input-box">
            <span class="details">Amount</span>
            <input type="text" placeholder="Enter amount" required>
          </div>
       
          <div class="input-box">
            <span class="details">Order Date</span>
            <input type="date" placeholder="" required>
          </div>

          <div class="input-box">
            <span class="details">Delivery Date</span>
            <input type="date" placeholder="" required>
          </div>
          
          <div class="input-box"><label class="dropdown">
          <div class="dd-button">Branch</div>
          <input type="checkbox" class="dd-input" id="test">
          <ul class="dd-menu">
           <li>Branch A</li>
           <li>Branch B</li>
           <li>Branch C</li>
          </ul>
          </label>
          </div>
          </div>

     	<div class="input-box"><label class="dropdown">
        <div class="dd-button">Deliver to</div>
        <input type="checkbox" class="dd-input" id="test">
        <ul class="dd-menu">
          <li>Warehouse A</li>
          <li>Warehouse B</li>
          <li>Warehouse C</li>
        </ul>
      </label>
   		
   		<br><br><br>    
  	    <div>
        <button onclick="document.getElementById('id01').style.display='block'">Create</button>
        </div>

        <br>
        <button type="button"><a id="am" href = "purchase_order.php">Back</button></a> 


      </form>
      <?php include 'includes/add_modal.php'; ?>

    </div>
    </div>
    
	</div>
</body>	
</html>
