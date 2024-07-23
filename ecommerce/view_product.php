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
    <link rel="stylesheet" type="text/css" href="css/view_product.css">

    <!--                MENU BAR             -->
    <?php include 'includes/menubar.php'; ?>

    <!--          SEARCH MODAL          -->
    <?php include 'includes/search_modal.php'; ?>


    <!--                MAIN BODY PAGE           -->
    <div class="back-prod">
      <a href="products.php" style="vertical-align:middle;"><i class="material-icons" id="back-arrow">arrow_back</i>BACK TO PRODUCTS</a>
    </div>

    <div class="form-center">
      <table class="rounded">
        <form action="/action_page.php" method="post">
          <thead>
            <tr>
              <th colspan="12" style="padding-bottom: 0px;"><h2>Product Name</h2></th>
            </tr>

            <tr>
              <td colspan="12" style="padding: 0px 15px; font-size: 18px;"><p>₱ 0.00</p></td>
            </tr>
          </thead>

          <tbody>
            <div class="container">
              <tr>
                <td colspan="6">
                  <img src="../images/product_image.jpg" class="product-img">
                </td>

                <td colspan="6">
                  <h5 style="font-weight: 400;">DESCRIPTION</h5>

                  <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                  <label for="quantity" id="quantity-lbl">Quantity:</label>
                  <input type="number" name="quantity" id="quantity" value="1" min="1">
                </td>
              </tr>
            </div>
          </tbody>

          <tr>
            <td colspan="6"></td>
            <td colspan="6">
              <div align="center">
                <a href="check_out.php">
                <button class="button" id="buy-add" type="button" style="background-color: #39A2DB;">
                  BUY NOW
                </button></a>

                <button class="button" type="submit" id="buy-add" style="background-color: #053742;">ADD TO CART</button>
              </div>
            </td>
          </tr>
        </form>
      </table>
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