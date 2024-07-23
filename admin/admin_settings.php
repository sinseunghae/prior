<?php
  require_once('auth.php');
?>
<! DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Admin Settings</title>
  <link rel="stylesheet" href="css/admin.css">
  <!--Boxicons CDN Link-->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, intial-scale=1.0">
  <link rel="shortcut icon" href="../images/dcdg.png" type="image/x-icon">
  <style type="text/css">
    .bootstrap-tagsinput .tag {
      margin-right: 2px;
      color: white;
      border-radius: 5px;
      background-color: #1687A7;
      padding: 0.2rem;
    }
    a{

      font-size:1em;
      color: white; 
      text-decoration: none;
    }

    #am{

      font-size:1em;
      color: white; 
      text-decoration: none;
    }

    #am:hover{
      color: white;
    }

    #a1{
      color: white;
      font-size:1.125em;    
    }

    #a1:hover{
      color: white; 
    }

    .details {
      text-align: left
    }
  </style>
</head>
<body>
  <!-- Sidebar -->
  <?php include 'includes/sidebar.php'; ?>

  <!-- Content -->
  <div class="content"><br>
  <div class="col-6" align="center">
  <fieldset>
  <div class="container">
    <div class="title">Admin Settings</div><br>
      <form action="" method="post">

        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name: <?php echo $_SESSION['Name']; ?></span>
            <input type="text" name="Name" placeholder="<?php echo $_SESSION['Name']; ?>"value ="<?php if (isset($_POST['Name'])) {echo $_POST['Name'];} ?>" required>
          </div>

          <!--echo "<div class='user-details'>";

            echo "<div class='input-box'>";
            echo "<span class='details'><b>Full Name: </b>". $row['']. "</span>";
            echo "<input id='textinput' name='' type='text' placeholder=' " . $row['']. "' class='form-control input-md' required value='" . (isset($_POST['']) ? $_POST[''] : '') . "' >";
            echo "</div>";-->

          <div class="input-box">
            <span class="details">Username: <?php echo $_SESSION['UserName']; ?></span>
            <input type="text" name="UserName" placeholder="<?php echo $_SESSION['UserName']; ?>" value="<?php if (isset($_POST['UserName'])) {echo $_POST['UserName'];} ?>" required>
          </div>

          <!--echo "<div class='input-box'>";
            echo "<span class='details'><b>Username: </b>". $row['']. "</span>";
            echo "<input id='textinput' name='' type='text' placeholder=' " . $row['']. "' class='form-control input-md' required value='" . (isset($_POST['']) ? $_POST[''] : '') . "' >";
            echo "</div>";-->

          <div class="input-box">
            <span class="details">Password: </span>
            <input type="text" name="Password"placeholder="Password" value="<?php if (isset($_POST['Password'])) {echo $_POST['Password'];} ?>"required>
          </div>
        </div>

          <!--echo "<div class='input-box'>";
            echo "<span class='details'><b>Password: </b>". $row['']. "</span>";
            echo "<input id='textinput' name='' type='text' placeholder=' " . $row['']. "' class='form-control input-md' required value='" . (isset($_POST['']) ? $_POST[''] : '') . "' >";
            echo "</div>";

            echo "</div>";-->

            <div class="form-group" align="center">
            <div><br> 
              <button id="button1id" name="button1id" class="btn btn-info"><b>Save</b></button>
              <button type="button" class="btn btn-info"><a id="am" href = ".php"><b>Back</b></button></a>
            </div>
          </div><br>

          <?php
if(isset($_POST['button1id'])){
  $hostName = "localhost";
  $userName = "root";
  $password = "";
  $dbName = "dcdg";

  $connection = mysqli_connect($hostName, $userName, $password, $dbName);

  if (!$connection) 
  {
    die("Connection failed: " . mysqli_connect_error());
  }
  $ad=$_SESSION['adminID'];
  $sql = "UPDATE admin SET UserName = '" . $_POST['UserName'] . "', Name = '" . $_POST['Name'] . "', Password = '" . $_POST['Password'] ."' WHERE adminID='".$ad."'";

  if (mysqli_query($connection, $sql)) {
              echo"<div class='alert alert-success' role='alert'><center>Your changes have been successfully saved!</center></div>";
            }
            else {
              echo"<div class='alert alert-danger' role='alert'><center>Failed!</center>";
            }
            mysqli_close($connection);

}
?>


      </form>

    </div>
    </div>
  </fieldset>
  </div>
</body> 
</html>
