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

    <title>Sign Up</title>

    <style type="text/css">
      body {
        background-color: #E8F0F2;
      }
    </style>
  </head>

  <body>
    <link rel="stylesheet" type="text/css" href="css/signup.css">

    <!--                MENU BAR             -->
    <?php include 'includes/menubar.php'; ?>

    <!--          SEARCH MODAL          -->
    <?php include 'includes/search_modal.php'; ?>

    <!--SIGN UP FORM-->
    <div class="form-center">
      <table class="rounded">
        <form action="/action_page.php" method="post">
          <thead>
            <tr>
              <th colspan="10"><h2>Sign Up</h2></th>
            </tr>

            <tr>
              <td colspan="10"><p>Please fill out this form to create an account.</p></td>
            </tr>
          </thead>

          <tbody>
            <div class="container">
              <tr>
                <td colspan="2"><label for="fname"><b>First Name</b></label></td>
                <td colspan="3"><input type="text" placeholder="Enter First Name" name="fname" required></td>
                <td colspan="2"><label for="lname"><b>Last Name</b></label></td>
                <td colspan="3"><input type="text" placeholder="Enter Last Name" name="lname" required></td>
              </tr>

              <tr>
                <td colspan="2"><label for="txtEmail"><b>Email Address</b></label></td>
                <td colspan="3"><input type="email" placeholder="Enter Email Address" name="txtEmail" id="txtEmail" required>
                <td colspan="2"><label for="phone"><b>Contact Number</b></label></td>
                <td colspan="3"><input type="tel" id="phone" name="phone" placeholder="0912-345-6789" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" required></td>
              </tr>

              <tr>
                <td colspan="2"><label for="uname"><b>Username</b></label></td>
                <td colspan="8"><input type="text" placeholder="Enter Username" name="uname" required></td>
              </tr>

              <tr>
                <td colspan="2"><label for="psw"><b>Password</b></label></td>
                <td colspan="8"><input type="password" placeholder="Enter Password" name="psw" required></td>
              </tr>
              
              <tr>
                <td colspan="2"><label for="cpsw"><b>Confirm Password</b></label></td>
                <td colspan="8"><input type="password" placeholder="Confirm Password" name="cpsw" required></td>
              </tr>

              <tr>
                <td colspan="10">
                  <label>
                    <input type="checkbox" name="remember" style="margin-bottom:15px" required> By creating an account, you agree to our <a href="" style="text-decoration:underline; color:blue;">Terms & Privacy</a>.
                  </label>
                </td>
              </tr>
            </div>
          </tbody>

          <tfoot>
            <tr>
              <td colspan="5"><a href="ecommerce.php"><button id="cancel-sign" type="button" style="background-color: #f44336;">
                Cancel
              </button></a></td>
              <td colspan="5"><button id="cancel-sign" type="submit" style="background-color: #053742;">Sign Up</button></td>
            </tr>
          </tfoot>
        </form>
      </table>
    </div>
    <br>
    
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