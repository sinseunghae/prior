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

    <title>Account Settings</title>

    <style type="text/css">
      body { background-color: #E8F0F2; }
    </style>
  </head>

  <body>
    <link rel="stylesheet" type="text/css" href="css/account_settings.css">

    <!--                MENU BAR             -->
    <?php include 'includes/menubar.php'; ?>

    <!--          SEARCH MODAL          -->
    <?php include 'includes/search_modal.php'; ?>


    <!--                MAIN BODY PAGE           -->
    <div class="acc-form-center">
      <table class="rounded">
        <form action="/action_page.php" method="post">
          <thead>
            <tr>
              <th colspan="12"><h2>Account Settings</h2></th>
            </tr>

            <tr>
              <td colspan="12">
                <p>Change your profile and password.</p>
              </td>
            </tr>
          </thead>

          <tbody>
            <div class="acc-container">
              <tr>
                <th>Profile</th>
              </tr>

              <tr>
                <td colspan="6"><label for="fname"><b>First Name</b></label></td>
                <td colspan="6"><label for="lname"><b>Last Name</b></label></td>
              </tr>

              <tr>
                <td colspan="6"><input type="text" value="Juan" name="fname" required></td>
                <td colspan="6"><input type="text" value="Dela Cruz" name="lname" required></td>
              </tr>

              <tr>
                <td colspan="6"><label for="txtEmail"><b>Email Address</b></label></td>
                <td colspan="6"><label for="phone"><b>Contact Number</b></label></td>
              </tr>

              <tr>
                <td colspan="6"><input type="email" value="juandcruz@gmail.com" name="txtEmail" id="txtEmail" required>
                <td colspan="6"><input type="tel" id="phone" name="phone" value="0912-345-6789" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" required></td>
              </tr>

              <tr>
                <th>Password</th>
              </tr>

              <tr>
                <td colspan="6"><label for="psw"><b>New Password</b></label></td>
                <td colspan="6"><label for="npsw"><b>Confirm New Password</b></label></td>
              </tr>

              <tr>
                <td colspan="6"><input type="password" name="psw" required></td>
                <td colspan="6"><input type="password" name="npsw" required></td>
              </tr>
            </div>
          </tbody>

          <tfoot>
            <tr>
              <td colspan="6">
                <div align="right">
                  <button type="submit" style="background-color: #053742;" id="save-can">Save Changes</button>
                </div>
              </td>

              <td colspan="6">
                <div align="left">
                  <a href="account_settings.php">
                    <button type="button" style="background-color: #f44336;" id="save-can">Cancel</button>
                  </a>
                </div>
              </td>
            </tr>
          </tfoot>
        </form>
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