<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../images/dcdg.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Halant&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <title>Products</title>

    <style type="text/css">
      body {
        background-color: #E8F0F2;
      }
    </style>
  </head>

  <body>
    <link rel="stylesheet" type="text/css" href="css/products.css">

    <!--                MENU BAR             -->
    <?php include 'includes/menubar_login.php'; ?>

    <!--          SEARCH MODAL          -->
    <?php include 'includes/search_modal.php'; ?>


    <!--                MAIN BODY PAGE           -->
    <div align="center">
      <h1>Products</h1>
    </div>

    <hr>

    <div class="table-responsive">
      <form action="/action_page.php" method="post">
        <table class="table table-borderless">
          <!--FILTER AND SORT-->
          <tr>
            <td colspan="3" class="filter-sort" id="filter">
              <label for="filter-products">FILTER BY</label>

              <select name="products" id="filter-products">
                <option value="">All products</option>
                <option value="curtains">Curtains</option>
                <option value="house-accessories">Household Items</option>
                <option value="goods">Essential Goods</option>
                <option value="clothes">Clothes</option>
                <option value="toys">Toys</option>
              </select>
            </td>

            <td colspan="3" class="filter-sort" id="sort">
              <label for="sort-products">SORT BY</label>

              <select name="sort-category" id="sort-products">
                <option value="">Best Selling</option>
                <option value="alpha-a">Alphabetically, A-Z</option>
                <option value="alpha-z">Alphabetically, Z-A</option>
                <option value="price-low">Price, Low-High</option>
                <option value="price-high">Price, High-Low</option>
                <option value="date-old">Date, Old-New</option>
                <option value="date-new">Date, New-Old</option>
              </select>
            </td>

            <td colspan="4"></td>

            <td colspan="2" style="text-align: right; padding-right: 100px; font-style: italic;">
              <p>8 Products</p>
            </td>
          </tr>

          <!--PRODUCT LIST-->
          <tr>
          <td colspan="3" class="products">
            <a href="view_product.php" style="text-decoration: none;">
              <img src="images/curtain.png" class="product-img">
              <p class="product-name"><b>Curtain</b></p>
            </a>
            <p class="product-price">₱ 150.00</p>
          </td>

          <td colspan="3" class="products">
            <a href="view_product.php" style="text-decoration: none;">
              <img src="images/curtain rod.png" class="product-img">
              <p class="product-name"><b>Curtain Rod</b></p>
            </a>
            <p class="product-price">₱ 120.00</p>
          </td>

          <td colspan="3" class="products">
            <a href="view_product.php" style="text-decoration: none;">
              <img src="images/curtain holder.png" class="product-img">
              <p class="product-name"><b>Curtain Holder</b></p>
            </a>
            <p class="product-price">₱ 500.00</p>
          </td>

          <td colspan="3" class="products">
            <a href="view_product.php" style="text-decoration: none;">
              <img src="images/blanket.jpg" class="product-img">
              <p class="product-name"><b>Blanket</b></p>
            </a>
            <p class="product-price">₱ 200.00</p>
          </td>
        </tr>

        <tr>
          <td colspan="3" class="products">
            <a href="view_product.php" style="text-decoration: none;">
              <img src="images/steamed pot.png" class="product-img">
              <p class="product-name"><b>Steamed Pot</b></p>
            </a>
            <p class="product-price">₱ 300.00</p>
          </td>

          <td colspan="3" class="products">
            <a href="view_product.php" style="text-decoration: none;">
              <img src="images/sensor.png" class="product-img">
              <p class="product-name"><b>Solar Sensor Light</b></p>
            </a>
            <p class="product-price">₱ 300.00</p>
          </td>

          <td colspan="3" class="products">
            <a href="view_product.php" style="text-decoration: none;">
              <img src="images/shorts.png" class="product-img">
              <p class="product-name"><b>Shorts</b></p>
            </a>
            <p class="product-price">₱ 200.00</p>
          </td>

          <td colspan="3" class="products">
            <a href="view_product.php" style="text-decoration: none;">
              <img src="images/pajama terno.jfif" class="product-img">
              <p class="product-name"><b>Pajama</b></p>
            </a>
            <p class="product-price">₱ 150.00</p>
          </td>
        </tr>

        <tr>
          <td colspan="3" class="products">
            <a href="view_product.php" style="text-decoration: none;">
              <img src="images/facemask.jpg" class="product-img">
              <p class="product-name"><b>Facemask</b></p>
            </a>
            <p class="product-price">₱ 100.00</p>
          </td>

          <td colspan="3" class="products">
            <a href="view_product.php" style="text-decoration: none;">
              <img src="images/alcohol.png" class="product-img">
              <p class="product-name"><b>Alcohol</b></p>
            </a>
            <p class="product-price">₱ 200.00</p>
          </td>

          <td colspan="3" class="products">
            <a href="view_product.php" style="text-decoration: none;">
              <img src="images/pop it.jpeg" class="product-img">
              <p class="product-name"><b>Pop It</b></p>
            </a>
            <p class="product-price">₱ 50.00</p>
          </td>

          <td colspan="3" class="products">
            <a href="view_product.php" style="text-decoration: none;">
              <img src="images/mask holder.jpg" class="product-img">
              <p class="product-name"><b>Mask Holder</b></p>
            </a>
            <p class="product-price">₱ 20.00</p>
          </td>
        </tr>
        </table>
      </form>
    </div>

    

    <!--          LOGIN MODAL          -->
    <?php include 'includes/login_modal.php'; ?>



    <!--          FOOTER          -->
    <?php include 'includes/footer.php'; ?>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
  </body>
</html>