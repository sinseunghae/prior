<?php 
include "config2.php";

if(isset($_POST['id'])){
   $id=  $_POST['id'];

   $sql = "DELETE FROM purchase_order WHERE purchase_id=".$id;
   mysqli_query($con,$sql);
   echo 1;
   exit;
}

echo 0;
exit;
?>