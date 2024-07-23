<?php

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];

$customer_name = $row_customer['customer_name'];

$customer_email = $row_customer['customer_email'];

$customer_username = $row_customer['customer_username'];

$customer_city = $row_customer['customer_city'];

$customer_unit = $row_customer['customer_unit'];

$customer_house = $row_customer['customer_house'];

$customer_street = $row_customer['customer_street'];

$customer_barangay = $row_customer['customer_barangay'];

$customer_contact = $row_customer['customer_contact'];

$customer_image = $row_customer['customer_image'];

?>

<h3 align="center" style="font-weight: bold;">Payment Confirmation</h3>
<br><br>

<form action="" method="post" enctype="multipart/form-data" ><!--- form Starts -->

	<div class="form-group" ><!-- form-group Starts -->

		<label>Full Name: </label>

		<input type="text" name="c_name" class="form-control" required value="<?php echo $customer_name; ?>">

	</div><!-- form-group Ends -->

	<div class="form-group" ><!-- form-group Starts -->

		<label>Username: </label>

		<input type="text" name="c_username" class="form-control" required value="<?php echo $customer_username; ?>">

	</div><!-- form-group Ends -->


	<div class="form-group" ><!-- form-group Starts -->

		<label>Email: </label>

		<input type="text" name="c_email" class="form-control" required value="<?php echo $customer_email; ?>">

	</div><!-- form-group Ends -->

	<div class="form-group" ><!-- form-group Starts -->

		<label>City/Municipality: </label>

		<input type="text" name="c_city" class="form-control" required value="<?php echo $customer_city; ?>">

	</div><!-- form-group Ends -->

	<div class="form-group" ><!-- form-group Starts -->

		<label>Unit/Floor/Bldg Name: </label>

		<input type="text" name="c_unit" class="form-control" required value="<?php echo $customer_unit; ?>">

	</div><!-- form-group Ends -->

	<div class="form-group" ><!-- form-group Starts -->

		<label>House/Lot & Block: </label>

		<input type="text" name="c_house" class="form-control" required value="<?php echo $customer_house; ?>">

	</div><!-- form-group Ends -->

	<div class="form-group" ><!-- form-group Starts -->

		<label>Street: </label>

		<input type="text" name="c_street" class="form-control" required value="<?php echo $customer_street; ?>">

	</div><!-- form-group Ends -->

		<div class="form-group" ><!-- form-group Starts -->

		<label>Barangay: </label>

		<input type="text" name="c_barangay" class="form-control" required value="<?php echo $customer_barangay; ?>">

	</div><!-- form-group Ends -->

	<div class="form-group" ><!-- form-group Starts -->

		<label>Contact Number: </label>

		<input type="text" name="c_contact" class="form-control" required value="<?php echo $customer_contact; ?>">

	</div><!-- form-group Ends -->

	<div class="form-group" ><!-- form-group Starts -->

		<label> Customer Image: </label>

		<input type="file" name="c_image" class="form-control" required ><br>

		<img src="customer_images/<?php echo $customer_image; ?>" width="100" height="100" class="img-responsive" >

	</div><!-- form-group Ends -->
	<br>

	<div class="text-center" ><!-- text-center Starts -->

		<button type="update" name="confirm_payment" class="btn btn-info shadow-none" style="border-radius: 8px;">
		<i class="fa fa-user-md" ></i> Update Now

		</button>
	</div><!-- text-center Ends -->

	<br><br><br>
</form><!--- form Ends -->

<?php

if(isset($_POST['update'])){

$update_id = $customer_id;

$c_name = $_POST['c_name'];

$c_email = $_POST['c_email'];

$c_username = $_POST['c_username'];

$c_city = $_POST['c_city'];

$c_unit = $_POST['c_unit'];

$c_house = $_POST['c_house'];

$c_street = $_POST['c_street'];

$c_barangay = $_POST['c_barangay'];

$c_contact = $_POST['c_contact'];

$c_image = $_FILES['c_image']['name'];

$c_image_tmp = $_FILES['c_image']['tmp_name'];

move_uploaded_file($c_image_tmp,"customer_images/$c_image");

$update_customer = "update customers set customer_name='$c_name',customer_email='$c_email',customer_username='$c_username',customer_city='$c_city',customer_unit='$c_unit',customer_house='$c_house',customer_street='$c_street',customer_barangay='$c_barangay',customer_contact='$c_contact',customer_image='$c_image' where customer_id='$update_id'";

$run_customer = mysqli_query($con,$update_customer);

if($run_customer){

echo "<script>alert('Your account has been updated please login again.')</script>";

echo "<script>window.open('logout.php','_self')</script>";

}

}


?>