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
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

    <title>Payment</title>

    <style type="text/css">
      body { background-color: #E8F0F2; }
      header { background-color: #D0DAEE; color: #000;}
      .dcdg { 
        background-color: #053742; 
        padding: 10px 0px; 
        color: white; 
        font-family: 'Oswald', sans-serif;
        font-size: 25px; 
        font-weight: 500;
        letter-spacing: 1px;
      }

      .logo { width: 30px; }

      /*BREADCRUMB*/
      ul.breadcrumb {padding: 10px 16px; list-style: none;}
      ul.breadcrumb li {display: inline; font-size: 15px;}
      ul.breadcrumb li+li:before {padding: 8px; color: black; content: "/\00a0";}
      ul.breadcrumb li a {color: black; text-decoration: none;}
      ul.breadcrumb li a:hover {color: #39A2DB; text-decoration: underline;}

      .checkout-center { 
        max-width: auto; 
        margin: auto; 
        padding-top: 5px; 
        padding-bottom: 35px; 
      }

      table {
        border-collapse: collapse;
        margin: 10px auto;
        width: 70%;
        background-color: #fff;
        font-family: 'Poppins', sans-serif;
        font-size: 15px;
      }

      tr th { padding: 30px 20px; font-size: 20px; text-transform: uppercase;}
      tr td { padding: 5px 20px; }
      input[type=text], input[type=email], input[type=tel] { width: 100%; }

      .back-btn a {
        text-decoration: none; 
        text-transform: none;
        padding: 10px; 
        float: left;
        background-color: #39A2DB;
        font-size: 14px;
        color: black;
      }

      .pay-btn { 
        font-family: 'Poppins', sans-serif;
        padding: 10px; 
        float: right;
        border: none;
        background-color: #39A2DB;
        font-size: 14px;
        color: black;
        font-weight: bold;
      }

      .pay-btn > a { text-decoration: none; color: black; }

      .pay-btn:hover { background-color: #A2DBFA; }
      .back-btn a:hover { background-color: #A2DBFA; }
      .order-img { width: 100px; }
      tr.shipping-dtl td { padding:20px; }
      #total { text-align: right; float: right; }

      #with-border { 
        border-top-style: solid; border-top-width: 2px; border-top-color: #E8F0F2;
        border-bottom-style: solid; border-bottom-width: 2px; border-bottom-color: #E8F0F2;
      }
    </style>
  </head>

  <body>
    <link rel="stylesheet" type="text/css" href="">
    <!--                MAIN BODY PAGE           -->
    <div align="center" class="dcdg">
      <img src="../images/dcdg.png" class="logo" style="vertical-align: middle;">
      <span style="vertical-align: middle;" class="dcdg">Diamond Colours Dry Goods</span>
    </div>

    <header>
      <ul class="breadcrumb">
        <li><a href="view_cart.php">Cart</a></li>
        <li><a href="check_out.php">Information & Shipping</a></li>
        <li><a href="payment.php">Payment</a></li>
      </ul>
    </header>

    <div class="checkout-center">
      <table>
        <form>
          <tr>
            <th colspan="12">Order Details</th>
          </tr>

          <tr class="order-dtl">
            <td colspan="2">
              <img src="../images/product_image.jpg" class="order-img">
            </td>

            <td colspan="2">
              <p>Product Name</p>
            </td>

            <td colspan="2">
              <p>Variant: Silk</p>
            </td>

            <td colspan="2">
              <p>₱ 120.00</p>
            </td>

            <td colspan="2">
              <p>x1</p>
            </td>

            <td colspan="2">
              <p>₱ 120.00</p>
            </td>
          </tr>

          <tr class="order-dtl">
            <td colspan="2">
              <img src="../images/product_image.jpg" class="order-img">
            </td>

            <td colspan="2">
              <p>Product Name</p>
            </td>

            <td colspan="2">
              <p>Variant: Small</p>
            </td>

            <td colspan="2">
              <p>₱ 20.00</p>
            </td>

            <td colspan="2">
              <p>x1</p>
            </td>

            <td colspan="2">
              <p>₱ 20.00</p>
            </td>
          </tr>

          <tr class="order-dtl">
            <td colspan="2">
              <img src="../images/product_image.jpg" class="order-img">
            </td>

            <td colspan="2">
              <p>Product Name</p>
            </td>

            <td colspan="2">
              <p>Variant: Small</p>
            </td>

            <td colspan="2">
              <p>₱ 90.00</p>
            </td>

            <td colspan="2">
              <p>x1</p>
            </td>

            <td colspan="2">
              <p>₱ 90.00</p>
            </td>
          </tr>

          <tr class="shipping-dtl" id="with-border">
            <td colspan="1"><label for="message">Message:</label></td>

            <td colspan="3">
              <input type="text" name="message" placeholder="Leave a message to seller">
            </td>

            <td colspan="2">
              <p style="color: green;">Shipping Option:</p>
            </td>

            <td colspan="2">
              <p>Courier 1</p>
            </td>

            <td colspan="2">
              <p><a href="check_out.php#courier">Change</a></p>
            </td>

            <td colspan="2">
              <p>₱ 50.00</p>
            </td>
          </tr>

          <!---->

          <tr>
            <th colspan="12">Payment Method</th>
          </tr>

          <tr>
            <td colspan="3">
              <input type="radio" name="payment" value="debit">
              <label for="debit">Debit card via PayMongo</label>
            </td>

            <td colspan="3">
              <input type="radio" name="payment" value="gcash">
              <label for="gcash">GCash via PayMongo</label>
            </td>
          </tr>

          <tr style="border-top-style: solid; border-top-width: 2px; border-top-color: #E8F0F2;">
            <td colspan="12">
              <p id="total">Merchandise Subtotal: ₱ 230.00</p>
            </td>
          </tr>

          <tr>
            <td colspan="12">
              <p id="total">Shipping Total: ₱ 50.00</p>
            </td>
          </tr>

          <tr style="border-bottom-style: solid; border-bottom-width: 2px; border-bottom-color: #E8F0F2;">
            <td colspan="12">
              <p id="total">Total Payment: <b>₱ 280.00</b></p>
            </td>
          </tr>

          <!---->

          <tr>
            <th colspan="6">
              <p class="back-btn">
                <a href="check_out.php">
                  <i class="material-icons" style="vertical-align:middle;">arrow_back</i>
                  Back</a>
              </p>
            </th>

            <th colspan="6">
              <button class="pay-btn" type="submit">
                <a href="order_confirmation.php">Place Order</a>
              </button>
            </th>
          </tr>
        </form>
      </table>
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