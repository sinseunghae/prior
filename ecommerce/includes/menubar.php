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

          <li><a href="#account" onclick="document.getElementById('id01').style.display='block'"><i class="material-icons">account_circle</i></a></li>
        </ul>
      </nav>
    </div>
  </header>
</body>