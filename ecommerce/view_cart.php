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
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Halant&display=swap" rel="stylesheet">

    <title>Shopping Cart</title>

    <style type="text/css">
      body {
        background-color: #E8F0F2;
        z-index: -1000;
      }
    </style>
  </head>

  <body>
    <link rel="stylesheet" type="text/css" href="css/view_cart.css">

    <!--                MENU BAR             -->
    <?php include 'includes/menubar_login.php'; ?>

    <!--          SEARCH MODAL          -->
    <?php include 'includes/search_modal.php'; ?>

    <!--          LOGIN MODAL          -->
    <?php include 'includes/login_modal.php'; ?>


    <!--                MAIN BODY PAGE           -->
    <div align="center" class="title-page">
      <h4><b>Your Cart</b></h4>
      <p><a href="products.php">Continue Shopping</a></p>
    </div>

    <div class="cart-form-center">
      <form action="/action_page.php" method="post">
        <table>
          <thead>
            <tr>
              <td colspan="2"><p class="col-name">Product</p></td>

              <td colspan="2"></td>

              <td colspan="2"><p class="col-name">Price</p></td>

              <td colspan="2"><p class="col-name">Quantity</p></td>

              <td colspan="2"><p class="col-name">Total</p></td>

              <td colspan="2"></td>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td colspan="2">
                <img src="../images/product_image.jpg" class="cart-img">
              </td>

              <td colspan="2" id="prod">
                <p><a href="view_product.php">Product Name</a></p>
                <p></p> <!--Additional info like the size of the product-->
              </td>

              <td colspan="2">
                <p>₱ 120.00</p>
              </td>

              <td colspan="2">
                <input type="number" name="quantity" id="quantity" value="1" min="1">
              </td>

              <td colspan="2">
                <p>₱ 120.00</p>
              </td>

              <td colspan="2" id="act-remove">
                <p><a href="">Remove</a></p>
              </td>
            </tr>

            <tr>
              <td colspan="2">
                <img src="../images/product_image.jpg" class="cart-img">
              </td>

              <td colspan="2" id="prod">
                <p><a href="view_product.php">Product Name</a></p>
                <p></p> <!--Additional info like the size of the product-->
              </td>

              <td colspan="2">
                <p>₱ 20.00</p>
              </td>

              <td colspan="2">
                <input type="number" name="quantity" id="quantity" value="1" min="1">
              </td>

              <td colspan="2">
                <p>₱ 20.00</p>
              </td>

              <td colspan="2" id="act-remove">
                <p><a href="">Remove</a></p>
              </td>
            </tr>

            <tr>
              <td colspan="2">
                <img src="../images/product_image.jpg" class="cart-img">
              </td>

              <td colspan="2" id="prod">
                <p><a href="view_product.php">Product Name</a></p>
                <p></p> <!--Additional info like the size of the product-->
              </td>

              <td colspan="2">
                <p>₱ 90.00</p>
              </td>

              <td colspan="2">
                <input type="number" name="quantity" id="quantity" value="1" min="1">
              </td>

              <td colspan="2">
                <p>₱ 90.00</p>
              </td>

              <td colspan="2" id="act-remove">
                <p><a href="">Remove</a></p>
              </td>
            </tr>
          </tbody>

          <tfoot>
            <tr>
              <td colspan="2"></td>

              <td colspan="2"></td>

              <td colspan="2"></td>

              <td colspan="2">
                <p>Subtotal</p>
              </td>

              <td colspan="2">
                <p>₱ 230.00</p>
              </td>

              <td colspan="2" id="act-remove">
                  <p id="check-out"><a href="check_out.php" style="vertical-align:middle;">CHECK OUT</a></p>
              </td>
            </tr>
          </tfoot>
        </table>
      </form>
    </div>


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