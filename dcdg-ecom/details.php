<head><title>Product Details</title></head>

<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>

<?php


$product_id = @$_GET['pro_id'];

$get_product = "select * from products where product_url='$product_id'";

$run_product = mysqli_query($con,$get_product);

$check_product = mysqli_num_rows($run_product);

if($check_product == 0){

echo "<script> window.open('index.php','_self') </script>";

}
else{



$row_product = mysqli_fetch_array($run_product);

$p_cat_id = $row_product['p_cat_id'];

$pro_id = $row_product['product_id'];

$pro_title = $row_product['product_title'];

$pro_price = $row_product['product_price'];

$pro_desc = $row_product['product_desc'];

$pro_img1 = $row_product['product_img1'];

$pro_img2 = $row_product['product_img2'];

$pro_img3 = $row_product['product_img3'];

$pro_label = $row_product['product_label'];

$pro_psp_price = $row_product['product_psp_price'];

$pro_features = $row_product['product_features'];

$pro_video = $row_product['product_video'];

$status = $row_product['status'];

$pro_url = $row_product['product_url'];

if($pro_label == ""){


}
else{

$product_label = "

<a class='label sale' href='#' style='color:black;'>

<div class='thelabel'>$pro_label</div>

<div class='label-background'> </div>

</a>

";

}

$get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";

$run_p_cat = mysqli_query($con,$get_p_cat);

$row_p_cat = mysqli_fetch_array($run_p_cat);

$p_cat_title = $row_p_cat['p_cat_title'];




?>

  <main>
    <!-- HERO -->
    <div class="nero">
      <div class="nero__heading">
        <span class="nero__bold">Product </span>View
      </div>
      <p class="nero__text">
      </p>
    </div>
  </main>

<div id="content" ><!-- content Starts -->

  <div class="container" ><!-- container Starts -->
    <div class="col-md-12"><!-- col-md-12 Starts -->
      <div class="row" id="productMain"><!-- row Starts -->

        <div class="col-sm-6"><!-- col-sm-6 Starts -->
          <div id="mainImage"><!-- mainImage Starts -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators"><!-- carousel-indicators Starts -->
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol><!-- carousel-indicators Ends -->

              <div class="carousel-inner"><!-- carousel-inner Starts -->
                <div class="item active">
                  <center>
                    <img src="admin_area/product_images/<?php echo $pro_img1; ?>" class="img-responsive">
                  </center>
                </div>

                <div class="item">
                  <center>
                    <img src="admin_area/product_images/<?php echo $pro_img2; ?>" class="img-responsive">
                  </center>
                </div>

                <div class="item">
                  <center>
                    <img src="admin_area/product_images/<?php echo $pro_img3; ?>" class="img-responsive">
                  </center>
                </div>

              </div><!-- carousel-inner Ends -->

              <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Starts -->

                <span class="glyphicon glyphicon-chevron-left"> </span>

                <span class="sr-only"> Previous </span>

              </a><!-- left carousel-control Ends -->

              <a class="right carousel-control" href="#myCarousel" data-slide="next"><!-- right carousel-control Starts -->

                <span class="glyphicon glyphicon-chevron-right"> </span>

                <span class="sr-only"> Next </span>

              </a><!-- right carousel-control Ends -->

            </div>
          </div><!-- mainImage Ends -->

          <?php echo $product_label; ?>

        </div><!-- col-sm-6 Ends -->


        <div class="col-sm-6" id="pro-details"><!-- col-sm-6 Starts -->
          <div class="box" ><!-- box Starts -->
            <h1 class="text-center" > <?php echo $pro_title; ?> </h1>

            <?php

            if(isset($_POST['add_cart'])){

            $ip_add = getRealUserIp();

            $p_id = $pro_id;

            $product_qty = $_POST['product_qty'];

            $product_size = $_POST['product_size'];


            $check_product = "select * from cart where ip_add='$ip_add' AND p_id='$p_id'";

            $run_check = mysqli_query($con,$check_product);

            if(mysqli_num_rows($run_check)>0){

            echo "<script>alert('This Product is already added in cart')</script>";

            echo "<script>window.open('$pro_url','_self')</script>";

            }
            else {

            $get_price = "select * from products where product_id='$p_id'";

            $run_price = mysqli_query($con,$get_price);

            $row_price = mysqli_fetch_array($run_price);

            $pro_price = $row_price['product_price'];

            $pro_psp_price = $row_price['product_psp_price'];

            $pro_label = $row_price['product_label'];

            if($pro_label == "Sale" or $pro_label == "Gift"){

            $product_price = $pro_psp_price;

            }
            else{

            $product_price = $pro_price;

            }

            $query = "insert into cart (p_id,ip_add,qty,p_price,size) values ('$p_id','$ip_add','$product_qty','$product_price','$product_size')";

            $run_query = mysqli_query($db,$query);

            echo "<script>window.open('$pro_url','_self')</script>";

            }

            }


            ?>

            <form action="" method="post" class="form-horizontal" ><!-- form-horizontal Starts -->

              <?php

              if($status == "product"){

              ?>

              <div class="form-group"><!-- form-group Starts -->
                <label class="col-md-5 control-label">Product Quantity </label>
                <div class="col-md-7" ><!-- col-md-7 Starts -->
                  <select name="product_qty" class="form-control" >
                    <option>Select quantity</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div><!-- col-md-7 Ends -->
              </div><!-- form-group Ends -->

              <div class="form-group" ><!-- form-group Starts -->
                <label class="col-md-5 control-label" >Product Size</label>
                  <div class="col-md-7" ><!-- col-md-7 Starts -->
                    <select name="product_size" class="form-control" >
                      <option>Select a Size</option>
                      <option>Small</option>
                      <option>Medium</option>
                      <option>Large</option>
                    </select>
                  </div><!-- col-md-7 Ends -->
              </div><!-- form-group Ends -->

              <?php }else { ?>


              <div class="form-group"><!-- form-group Starts -->
                <label class="col-md-5 control-label" >Bundle Quantity </label>
                <div class="col-md-7" ><!-- col-md-7 Starts -->
                  <select name="product_qty" class="form-control" >
                    <option>Select quantity</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div><!-- col-md-7 Ends -->
              </div><!-- form-group Ends -->

              <div class="form-group" ><!-- form-group Starts -->
                <label class="col-md-5 control-label" >Bundle Size</label>
                <div class="col-md-7" ><!-- col-md-7 Starts -->
                  <select name="product_size" class="form-control" >
                    <option>Select a Size</option>
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                  </select>
                </div><!-- col-md-7 Ends -->
              </div><!-- form-group Ends -->


              <?php } ?>


              <?php

              if($status == "product"){

                if($pro_label == "Sale" or $pro_label == "Gift"){

                  echo "
                  <p class='price'>
                  Product Price : <del> $$pro_price </del><br>
                  Product sale Price : $$pro_psp_price
                  </p>
                  ";

                } else {

                  echo "

                  <p class='price'>
                  Product Price: $$pro_price
                  </p>
                  ";

                  }

                } else {


              if($pro_label == "Sale" or $pro_label == "Gift"){

              echo "

              <p class='price'>

              Bundle Price : <del> $$pro_price </del><br>

              Bundle sale Price : $$pro_psp_price

              </p>

              ";

              }
              else{

              echo "

              <p class='price'>

              Bundle Price : $$pro_price

              </p>

              ";

              }


              }

              ?>

              <p class="text-center buttons" ><!-- text-center buttons Starts -->

                <button class="btn btn-danger" type="submit" name="add_cart" id="add-cart">
                  <i class="material-icons">local_grocery_store</i>Add to Cart
                </button>


                <?php

                if(isset($_POST['add_wishlist'])){

                if(!isset($_SESSION['customer_email'])){

                echo "<script>alert('You Must Login To Add Product In Wishlist')</script>";

                echo "<script>window.open('checkout.php','_self')</script>";

                }
                else{

                $customer_session = $_SESSION['customer_email'];

                $get_customer = "select * from customers where customer_email='$customer_session'";

                $run_customer = mysqli_query($con,$get_customer);

                $row_customer = mysqli_fetch_array($run_customer);

                $customer_id = $row_customer['customer_id'];

                $select_wishlist = "select * from wishlist where customer_id='$customer_id' AND product_id='$pro_id'";

                $run_wishlist = mysqli_query($con,$select_wishlist);

                $check_wishlist = mysqli_num_rows($run_wishlist);

                if($check_wishlist == 1){

                echo "<script>alert('This Product Has Been already Added In Wishlist')</script>";

                echo "<script>window.open('$pro_url','_self')</script>";

                }
                else{

                $insert_wishlist = "insert into wishlist (customer_id,product_id) values ('$customer_id','$pro_id')";

                $run_wishlist = mysqli_query($con,$insert_wishlist);

                if($run_wishlist){

                echo "<script> alert('Product Has Inserted Into Wishlist') </script>";

                echo "<script>window.open('$pro_url','_self')</script>";

                }

                }

                }

                }

                ?>

              </p><!-- text-center buttons Ends -->
            </form><!-- form-horizontal Ends -->
          </div><!-- box Ends -->


          <div class="row" id="thumbs" ><!-- row Starts -->
            <div class="col-xs-4" ><!-- col-xs-4 Starts -->
              <a href="#" class="thumb" >
              <img src="admin_area/product_images/<?php echo $pro_img1; ?>" class="img-responsive" >
              </a>
            </div><!-- col-xs-4 Ends -->

            <div class="col-xs-4" ><!-- col-xs-4 Starts -->
              <a href="#" class="thumb" >
                <img src="admin_area/product_images/<?php echo $pro_img2; ?>" class="img-responsive" >
              </a>
            </div><!-- col-xs-4 Ends -->

            <div class="col-xs-4" ><!-- col-xs-4 Starts -->
              <a href="#" class="thumb" >
                <img src="admin_area/product_images/<?php echo $pro_img3; ?>" class="img-responsive" >
              </a>
            </div><!-- col-xs-4 Ends -->
          </div><!-- row Ends -->
        </div><!-- col-sm-6 Ends -->
      </div><!-- row Ends -->
    </div>
  </div>
</div>



<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>

<?php } ?>
