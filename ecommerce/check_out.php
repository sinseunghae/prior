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
      }

      tr th { padding: 30px 20px; font-size: 20px; text-transform: uppercase;}
      tr td { padding: 5px 20px; }

      input[type=text], input[type=email], input[type=tel] { width: 100%; }

      .pay-btn a { 
        text-decoration: none; 
        text-transform: none;
        padding: 10px; 
        float: right;
        background-color: #39A2DB;
        font-size: 14px;
        color: black;
      }

      .pay-btn a:hover { color: black; background-color: #A2DBFA; }

      td.shipping-opt { padding-top: 25px; }
      td.shipping-opt label { padding-right: 20px; }
      tr td p { font-style: italic; font-size: 13px; }
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
      </ul>
    </header>

    <div class="checkout-center">
      <table>
        <form>
          <tr>
            <th colspan="12">Contact Information</th>
          </tr>

          <tr>
            <td colspan="6"><label for="fname">First Name</label></td>
            <td colspan="6"><label for="lname">Last Name</label></td>
          </tr>

          <tr>
            <td colspan="6"><input type="text" name="fname" value="Juan" readonly></td>
            <td colspan="6"><input type="text" name="lname" value="Dela Cruz" readonly></td>
          </tr>

          <tr>
            <td colspan="6"><label for="txtEmail">Email Address</label></td>
            <td colspan="6"><label for="phone">Contact Number</label></td>
          </tr>

          <tr>
            <td colspan="6"><input type="email" name="txtEmail" id="txtEmail"  value="juandcruz@gmail.com" readonly>
            <td colspan="6"><input type="tel" id="phone" name="phone" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}"  value="0912-345-6789" readonly></td>
          </tr>

          <tr style="border-top-style: solid; border-top-width: 2px; border-top-color: #E8F0F2;">
            <th colspan="12">Shipping Information</th>
          </tr>

          <tr>
            <td colspan="12"><label for="unit">Unit/Floor/Bldg. Name</label></td>
          </tr>

          <tr>
            <td colspan="12"><input type="text" name="unit" value=""></td>
          </tr>

          <tr>
            <td colspan="6"><label for="house">House/Lot & Blk no.</label></td>
            <td colspan="6"><label for="street">Street Name</label></td>
          </tr>

          <tr>
            <td colspan="6"><input type="text" name="house" value=""></td>
            <td colspan="6"><input type="text" name="street" value=""></td>
          </tr>

          <tr>
            <td colspan="6"><label for="subd">Subdivision</label></td>
            <td colspan="6"><label for="brgy">Barangay/District/Locality</label></td>
          </tr>

          <tr>
            <td colspan="6"><input type="text" name="subd" value=""></td>
            <td colspan="6"><input type="text" name="brgy" value=""></td>
          </tr>

          <tr>
            <td colspan="6"><label for="city">City/Municipality</label></td>
            <td colspan="6"><label for="province">Province</label></td>
          </tr>

          <tr>
            <td colspan="6"><input type="text" name="city" value=""></td>
            <td colspan="6"><input type="text" name="province" value=""></td>
          </tr>

          <tr>
            <td class="shipping-opt" colspan="12">
              <label for="courier"><b>Shipping Option</b></label>
              <select name="shipping" id="courier">
                <option value="courier-1">Courier 1</option>
                <option value="courier-2">Courier 2</option>
              </select>
            </td>
          </tr>

          <tr>
            <td colspan="12">
              <p>*Shipping fee will be calculated at the Payment section.</p>
            </td>
          </tr>

          <tr style="border-top-style: solid; border-top-width: 2px; border-top-color: #E8F0F2;">
            <th colspan="12">
              <p class="pay-btn">
                <a href="payment.php">Proceed to Payment
                  <i class="material-icons" style="vertical-align:middle;">arrow_forward</i>
                </a>
              </p>
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