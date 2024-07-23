<?php
session_start();
include('connect.php');
$a = $_POST['invoice'];
$b = $_POST['branch_id'];
$d = $_POST['product_names'];
$c = $_POST['qty'];
$w = $_POST['pt'];
$br = $_POST['branch'];
$date = $_POST['sales_date'];
$result = $db->prepare("SELECT * FROM product WHERE barcode = :bar");
$result->bindParam(':bar', $d);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$asasa=$row['product_price'];
$code=$row['product_name'];
$gen=$row['product_variations'];
$name=$row['product_size'];
}
//CHECKING IF ITEM IS ZERO OR EMPTY

//edit qty
$e=$asasa*$c;
$stat =1;
$par =0;
// query
//CHECKING IF THE ITEM IS IN THE INVOICE


$sql = "INSERT INTO purchase_transac (invoice,barcode,quantity,amount,product_name,variations,size,price,purchase_date,status,qty_par,supplier_name,branch_id) VALUES (:a,:b,:c,:d,:e,:f,:h,:i,:j,:k,:l,:m,:n)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$d,':c'=>$c,':d'=>$e,':e'=>$code,':f'=>$gen,':h'=>$name,':i'=>$asasa, ':j'=>$date, ':k'=>$stat,':l'=>$par,':m'=>$b,':n'=>$br));
header("location: sales2.php?id=$w&invoice=$a");


?>