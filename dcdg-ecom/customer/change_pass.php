<br><br>
<h3 style="font-weight: bold; text-align: center;">Change Password</h3>
<br><br>

<form action="" method="post"><!-- form Starts -->

	<div class="form-group"><!-- form-group Starts -->

		<label>Enter your current password</label>

		<input type="text" name="old_pass" class="form-control" required>

	</div><!-- form-group Ends -->


	<div class="form-group"><!-- form-group Starts -->

		<label>Enter your new password</label>

		<input type="text" name="new_pass" class="form-control" required>

	</div><!-- form-group Ends -->


	<div class="form-group"><!-- form-group Starts -->

		<label>Confirm password</label>

		<input type="text" name="new_pass_again" class="form-control" required>

	</div><!-- form-group Ends -->

	<div class="text-center"><!-- text-center Starts -->
		<br><br>
		<button type="submit" name="submit" class="btn btn-info shadow-none" style="border-radius: 8px;">

		<i class="fa fa-user-md"> </i> Change Password

	</button>

<br><br><br><br>
</div><!-- text-center Ends -->

</form><!-- form Ends -->

<?php

if(isset($_POST['submit'])){

$c_email = $_SESSION['customer_email'];

$old_pass = $_POST['old_pass'];

$new_pass = $_POST['new_pass'];

$new_pass_again = $_POST['new_pass_again'];

$sel_old_pass = "select * from customers where customer_pass='$old_pass'";

$run_old_pass = mysqli_query($con,$sel_old_pass);

$check_old_pass = mysqli_num_rows($run_old_pass);

if($check_old_pass==0){

echo "<script>alert('Your current password is not valid try again.')</script>";

exit();

}

if($new_pass!=$new_pass_again){

echo "<script>alert('Your new password does not match.')</script>";

exit();

}

$update_pass = "update customers set customer_pass='$new_pass' where customer_email='$c_email'";

$run_pass = mysqli_query($con,$update_pass);

if($run_pass){

echo "<script>alert('Your password has been changed successfully.')</script>";

echo "<script>window.open('my_account.php?my_orders','_self')</script>";


}

}

?>







