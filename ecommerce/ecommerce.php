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

    <title>Diamond Colours Dry Goods</title>

    <style type="text/css">
      body {
        background-color: #E8F0F2;
        z-index: -1000;
      }
    </style>
  </head>

  <body>
    <link rel="stylesheet" type="text/css" href="css/ecommerce_home.css">

    <!--                MENU BAR             -->
    <?php include 'includes/menubar.php'; ?>

    <!--          SEARCH MODAL          -->
    <?php include 'includes/search_modal.php'; ?>


    <!--                MAIN BODY PAGE           -->
    <div class="sample-banner">
      <img src="images/banner.png">
    </div>

    <div class="table-responsive">
      <table class="table table-borderless">
        <tr>
          <td colspan="11">
            <h3 style="margin-left: 25px; margin-top: 20px;">Top Products</h3>
          </td>

          <td colspan="1">
            <a href="products.php" style="text-decoration: none;"><p class="see-more">
              See more
            </p></a>
          </td>
        </tr>

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
              <img src="images/facemask.jpg" class="product-img">
              <p class="product-name"><b>Face Mask</b></p>
            </a>
            <p class="product-price">₱ 100.00</p>
          </td>

          <td colspan="3" class="products">
            <a href="view_product.php" style="text-decoration: none;">
              <img src="images/mask holder.jpg" class="product-img">
              <p class="product-name"><b>Mask Holder</b></p>
            </a>
            <p class="product-price">₱ 20.00</p>
          </td>

          <td colspan="3" class="products">
            <a href="view_product.php" style="text-decoration: none;">
              <img src="images/face shield.jpg" class="product-img">
              <p class="product-name"><b>Face Shield</b></p>
            </a>
            <p class="product-price">₱ 100.00</p>
          </td>

          <td colspan="3" class="products">
            <a href="view_product.php" style="text-decoration: none;">
              <img src="images/pop it.jpeg" class="product-img">
              <p class="product-name"><b>Pop It</b></p>
            </a>
            <p class="product-price">₱ 50.00</p>
          </td>
        </tr>
      </table>
    </div>

    

    <!--          LOGING MODAL          -->
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