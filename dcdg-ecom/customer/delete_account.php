
<center>
<br><br><br>
<h3 style="font-weight: bold;">Confirm Account Deletion</h3>

<form action="" method="post">
<br><br>
<h4 style="text-align: justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Are you sure you want to delete your account? If you delete your account, this will make your account permanently usable. This cannot be undone.</h4><br><br>

<input class="btn btn-info shadow-none" style="border-radius: 8px;" type="submit" name="yes" value="Delete Account">

<input class="btn btn-danger shadow-none" style="border-radius: 8px;" type="submit" name="no" value="Cancel">

</form>

</center>

<?php

$c_email = $_SESSION['customer_email'];

if(isset($_POST['yes'])){

$delete_customer = "delete from customers where customer_email='$c_email'";

$run_delete = mysqli_query($con,$delete_customer);

if($run_delete){

session_destroy();

echo "<script>alert('Your account has been deleted! Good By')</script>";

echo "<script>window.open('../index.php','_self')</script>";

}

}

if(isset($_POST['no'])){

echo "<script>window.open('my_account.php?my_orders','_self')</script>";

}


?>