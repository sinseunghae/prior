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

    <title>Check Out</title>

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

      .order-center { 
        max-width: auto; 
        margin: auto; 
        padding-top: 5px; 
        padding-bottom: 35px; 
      }

      table {
        border-collapse: collapse;
        margin: 10px auto;
        width: 60%;
        background-color: #fff;
        font-family: 'Poppins', sans-serif;
      }

      tr th { 
        padding: 30px 20px; 
        font-size: 30px; 
        text-transform: uppercase; 
        text-align: center;
        border-bottom-style: solid;
        border-bottom-width: 3px;
        border-bottom-color: #E8F0F2;
      }

      tr td { padding: 0px 20px; text-align: justify;}

      .cont-btn a { 
        text-decoration: none; 
        text-transform: none;
        padding: 10px; 
        float: right;
        background-color: #39A2DB;
        font-size: 14px;
        color: black;
      }

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

      .order-sum-ttl { text-align: center; padding-top: 50px; text-transform: uppercase; }
      .cntr-align { text-align: center; }
      .rght-align { text-align: right; }
      
      .contact { 
        text-align: center; 
        border-bottom-style: solid;
        border-bottom-width: 3px;
        border-bottom-color: #E8F0F2;
      }
    </style>
  </head>

  <body>
    <link rel="stylesheet" type="text/css" href="">
    <!--                MAIN BODY PAGE           -->
    <div align="center" class="dcdg">
      <img src="../images/dcdg.png" class="logo">
      <span style="vertical-align: middle;" class="dcdg">Diamond Colours Dry Goods</span>
    </div>

    <header>
      <ul class="breadcrumb">
        <li><a href="view_cart.php">Cart</a></li>
        <li><a href="check_out.php">Information & Shipping</a></li>
        <li><a href="payment.php">Payment</a></li>
        <li>Confirmation</li>
      </ul>
    </header>

    <div class="order-center">
      <table>
        <form>
          <tr>
            <th colspan="12">Thanks for your order!</th>
          </tr>

          <tr>
            <td colspan="12">
              <p>Order Date: <b>04/30/2022</b></p>
            </td>
          </tr>

          <tr>
            <td colspan="12">
              <p>Your order ID is <b>#123456</b>. A summary of your order is shown below. To view the status of your order <a href="my_purchases.php">click here</a>.</p>
            </td>
          </tr>

          <!--ORDER SUMMARY-->
          <tr>
            <td class="order-sum-ttl" colspan="12">
              <p><b>Your Order Summary</b></p>
            </td>
          </tr>

          <tr>
            <td colspan="3">
              <p><b>Product</b></p>
            </td>

            <td colspan="3" class="cntr-align">
              <p><b>Item Price</b></p>
            </td>

            <td colspan="3"class="cntr-align">
              <p><b>Qty</b></p>
            </td>

            <td colspan="3" class="rght-align">
              <p><b>Item Total</b></p>
            </td>
          </tr>

          <tr>
            <td colspan="3">
              <p>Product Name</p>
            </td>

            <td colspan="3" class="cntr-align">
              <p>₱ 120.00</p>
            </td>

            <td colspan="3" class="cntr-align">
              <p>1</p>
            </td>

            <td colspan="3" class="rght-align">
              <p>₱ 120.00</p>
            </td>
          </tr>

          <tr>
            <td colspan="3">
              <p>Product Name</p>
            </td>

            <td colspan="3" class="cntr-align">
              <p>₱ 20.00</p>
            </td>

            <td colspan="3" class="cntr-align">
              <p>1</p>
            </td>

            <td colspan="3" class="rght-align">
              <p>₱ 20.00</p>
            </td>
          </tr>

          <tr>
            <td colspan="3">
              <p>Product Name</p>
            </td>

            <td colspan="3" class="cntr-align">
              <p>₱ 90.00</p>
            </td>

            <td colspan="3" class="cntr-align">
              <p>1</p>
            </td>

            <td colspan="3" class="rght-align">
              <p>₱ 90.00</p>
            </td>
          </tr>

          <tr>
            <td colspan="3"></td>
            <td colspan="3" class="cntr-align"></td>

            <td colspan="3" class="rght-align">
              <p><b>Subtotal</b></p>
            </td>

            <td colspan="3" class="rght-align">
              <p>₱ 230.00</p>
            </td>
          </tr>

          <tr>
            <td colspan="3"></td>
            <td colspan="3" class="cntr-align"></td>

            <td colspan="3" class="rght-align">
              <p><b>Shipping Fee</b></p>
            </td>

            <td colspan="3" class="rght-align">
              <p>₱ 50.00</p>
            </td>
          </tr>

          <tr>
            <td colspan="3"></td>
            <td colspan="3" class="cntr-align"></td>

            <td colspan="3" class="rght-align">
              <p><b>Total</b></p>
            </td>

            <td colspan="3" class="rght-align">
              <p>₱ 280.00</p>
            </td>
          </tr>
          <!-------------------------------------------------------------->

          <tr>
            <td class="order-sum-ttl" colspan="12">
              <p><b>Questions?</b></p>
            </td>
          </tr>

          <tr>
            <td colspan="12" class="contact">
              <p>Call us at (+63) 9123456789 or email us at dcdg.ph@gmail.com</p>
            </td>
          </tr>


          <!--NAVIGATION-->
          <tr>
            <th colspan="6">
              <p class="back-btn">
                <a href="ecommerce.php">
                  <i class="material-icons" style="vertical-align:middle;">home</i>
                  Home</a>
              </p>
            </th>

            <th colspan="6">
              <button class="pay-btn" type="submit">
                <a href="products.php">Continue Shopping
                  <i class="material-icons" style="vertical-align:middle;">shopping_cart</i>
                </a>
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
  </body>
</html>