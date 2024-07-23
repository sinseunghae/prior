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
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@700&display=swap" rel="stylesheet">

    <title>DCDG Login</title>

    <style type="text/css">
      body { background-color: #E8F0F2; position: relative; }
    </style>
  </head>

  <body>
    <link rel="stylesheet" type="text/css" href="css/login.css">

    <!--LOGIN PAGE-->
    <div class="form-center">
      <div class="container">
        <form>
          <fieldset>

          <div class="row">

            <!--LOGIN PROPER-->
            <div class="col-12">
              <div class="row">
                <img src="images/dcdg.png" align="center">
              </div>

              <div class="row">
                <h3>Admin Login</h3>
              </div>

              <div class="row">
                <div class="col-12">
                  <label for="uname"><b>Username</b></label>
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <input type="text" placeholder="Enter Username" name="uname" id="uname" required>
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <label for="psw"><b>Password</b></label>
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
                </div>
              </div>

              <!--LOGIN BUTTON-->
              <div class="row">
                <div class="col-12" align="center">
                  <button type="submit" class="login-btn">LOGIN</button>
                </div>
              </div>
            </div>

          </div>

        </fieldset>
        </form>
      </div>
    </div>
  </body>
</html>