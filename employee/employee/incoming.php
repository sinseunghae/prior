<?php
session_start();
include('connect.php');
$position = $_SESSION['Branch_ID'];
$a = $_POST['invoice'];
$b = $_POST['product'];
$c = $_POST['qty'];
$w = $_POST['pt'];
$date = $_POST['date'];
switch ($position) {
		case '1':
			$result = $db->prepare("SELECT * FROM branch1 WHERE barcode = :userid");
			break;
		case '2':
			$result = $db->prepare("SELECT * FROM branch2 WHERE barcode = :userid");
			break;
		case '3':
			$result = $db->prepare("SELECT * FROM branch3 WHERE barcode = :userid");
			break;
		case '4':
			$result = $db->prepare("SELECT * FROM branch4 WHERE barcode = :userid");
			break;
	}
$result->bindParam(':userid', $b);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$asasa=$row['price'];
$code=$row['product_name'];
$gen=$row['variations'];
$name=$row['sizes'];
}

//edit qty
switch ($position) {
	case '1':
		$sql = "UPDATE branch1 
        SET quantity=quantity-?
		WHERE barcode=?";
		break;
	case '2':
	$sql = "UPDATE branch2 
        SET quantity=quantity-?
		WHERE barcode=?";
		break;
	case '3':
	$sql = "UPDATE branch3 
        SET quantity=quantity-?
		WHERE barcode=?";
		break;
	case '4':
	$sql = "UPDATE branch4 
        SET quantity=quantity-?
		WHERE barcode=?";
		break;
	
}
$q = $db->prepare($sql);
$q->execute(array($c,$b));
$d=$asasa*$c;
// query
$sql = "INSERT INTO sales_dummy (invoice,barcode,quantity,amount,product_name,variations,size,price) VALUES (:a,:b,:c,:d,:e,:f,:h,:i)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$code,':f'=>$gen,':h'=>$name,':i'=>$asasa));
header("location: sales2.php?id=$w&invoice=$a");


?>