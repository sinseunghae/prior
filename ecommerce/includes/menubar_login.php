<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

  <script type="text/javascript">
  </script>

  <style type="text/css">
    span.dcdg {
      font-family: 'Oswald', sans-serif;
      font-size: 25px;
      font-weight: 500;
      color: #fff;
      letter-spacing: 1px;
    }

    .logo {
      width: 35px;
    }

    li, a {
      font-size: 16px;
      font-weight: 500;
      color: #fff;
      text-decoration: none;
    }

    header {
      background-color: #053742;
      padding: 10px 0px;
    }

    .nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .nav_links {
      list-style: none;
    }

    .nav_links li {
      display: inline-block;
      padding: 0px 15px;
    }

    .nav_links li a {
      transition: all 0.3s ease 0s;
    }

    .nav_links li a:hover {
      color: #39A2DB;
      text-decoration: underline;
    }

    .dropbtn {
      background-color: #053742;
      color: white;
      font-size: 16px;
      border: none;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #ffffff;
      min-width: 160px;
      z-index: 1;
      right: 0;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover { background-color: #ddd; transition: 0.3s; color: #39A2DB; }

    .dropdown:hover .dropdown-content { display: block; }

    .dropdown:hover .dropbtn { color: #39A2DB; }

    #logoutbtn {
      background-color: #fff;
      border: none;
      font-weight: 500;
      padding-top: 12px; padding-bottom: 12px;
      padding-left: 16px;
      padding-right: 100px;
    }

    .dropdown-content #logoutbtn:hover { color: #39A2DB; background-color: #ddd; text-decoration: underline;
      transition: 0.3s; }
  </style>
</head>

<body>
  <header>
    <div align="center">
      <img src="../images/dcdg.png" class="logo">
      <span style="vertical-align: middle;" class="dcdg">Diamond Colours Dry Goods</span>
    </div>

    <div class="nav">
      <nav>
        <ul class="nav_links">
          <li><a href="ecommerce.php">Home</a></li>

          <li><a href="aboutus.php">About Us</a></li>

          <li><a href="products.php">Products</a></li>
        </ul>
      </nav>

      <nav>
        <ul class="nav_links">
          <li><a href="#search" onclick="document.getElementById('id02').style.display='block'"><i class="material-icons">search</i></a></li>

          <li><a href="view_cart.php"><i class="material-icons">local_grocery_store</i></a></li>

          <!--<li><a href="#account" onclick="document.getElementById('id01').style.display='block'"><i class="material-icons">account_circle</i></a></li>-->

          <li>
            <div class="dropdown">
              <button class="dropbtn"><i class="material-icons">account_circle</i></button>
              <div id="myDropdown" class="dropdown-content">
                <a href="my_purchases.php">My Purchases</a>
                <a href="account_settings.php">Account Settings</a>
                <button id="logoutbtn">Logout</button>
              </div>
            </div>
          </li>
        </ul>
      </nav>
    </div>
  </header>
</body>