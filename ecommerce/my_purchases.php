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

    <title>My Purchases</title>

    <style type="text/css">
      body { background-color: #E8F0F2; }
    </style>
  </head>

  <body>
    <link rel="stylesheet" type="text/css" href="css/mypurchase.css">

    <!--                MENU BAR             -->
    <?php include 'includes/menubar_login.php'; ?>

    <!--          SEARCH MODAL          -->
    <?php include 'includes/search_modal.php'; ?>

    <!--          LOGIN MODAL          -->
    <?php include 'includes/login_modal.php'; ?>


    <!--                MAIN BODY PAGE           -->
    <div align="center" class="title-page">
      <h4><b>My Purchases</b></h4>
      <p><a href="products.php">Continue Shopping</a></p>
    </div>

    <div class="cart-form-center">
      <div class="tab">
        <button class="tablinks" onclick="openProgress(event, 'OnGoing')" id="defaultOpen">On Going</button>
        <button class="tablinks" onclick="openProgress(event, 'Complete')">Complete</button>
      </div>

      <!-- Tab content -->
      <div id="OnGoing" class="tabcontent">
        <form action="/action_page.php" method="post">
          <table>
            <thead>
              <tr>
                <td colspan="2"><p class="col-name">Product</p></td>

                <td colspan="2"><p class="col-name">Price</p></td>

                <td colspan="2"><p class="col-name">Quantity</p></td>

                <td colspan="2"><p class="col-name">Order Total</p></td>

                <td colspan="2"><p class="col-name">Status</p></td></td>

                <td colspan="2"></td>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td colspan="2" id="prod">
                  <img src="../images/product_image.jpg" class="purchase-img">
                  <p><a href="view_product.php">Product Name</a></p>
                </td>

                <td colspan="2">
                  <p>₱ 230.00</p>
                </td>

                <td colspan="2">
                  <p>x1</p>
                </td>

                <td colspan="2">
                  <p>₱ 280.00</p>
                </td>

                <td colspan="2" class="purhcase-status">
                  <p>Ready to Ship</p>
                </td>

                <td colspan="2">
                  <p>
                    <button type="submit" id="receivebtn">Received</button>
                  </p>
                </td>
              </tr>
            </tbody>
          </table>
        </form>
      </div>

      <div id="Complete" class="tabcontent">
        <form action="/action_page.php" method="post">
          <table>
            <thead>
              <tr>
                <td colspan="2"><p class="col-name">Product</p></td>

                <td colspan="2"><p class="col-name">Price</p></td>

                <td colspan="2"><p class="col-name">Quantity</p></td>

                <td colspan="2"><p class="col-name">Total</p></td>

                <td colspan="2"><p class="col-name">Status</p></td></td>

                <td colspan="2"></td>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td colspan="2" id="prod">
                  <img src="../images/product_image.jpg" class="purchase-img">
                  <p><a href="view_product.php">Product Name</a></p>
                </td>

                <td colspan="2">
                  <p>₱ 0.00</p>
                </td>

                <td colspan="2">
                  <p>x2</p>
                </td>

                <td colspan="2">
                  <p>₱ 0.00</p>
                </td>

                <td colspan="2" class="purhcase-status">
                  <p>Received</p>
                </td>

                <td colspan="2"></td>
              </tr>
            </tbody>
          </table>
        </form>
      </div>
    </div>

    <br><br><br><br>

    <!--          FOOTER          -->
    <?php include 'includes/footer.php'; ?>

    <script type="text/javascript">
      document.getElementById("defaultOpen").click();

      function openProgress(evt, openProgress) {
        var i, tabcontent, tablinks;

        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }

        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        document.getElementById(openProgress).style.display = "block";
        evt.currentTarget.className += " active";
      }
    </script>
  </body>
</html>