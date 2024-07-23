<?php
	session_start();
	include('connect.php');
	$id=$_GET['id'];
	$position=$_SESSION['Branch_ID'];
	$c=$_GET['invoice'];
	$sdsd=$_GET['dle'];
	$qty=$_GET['qty'];
	$wapak=$_GET['code'];

//edit qty
switch ($position) {
	case '1':
		$sql = "UPDATE branch1 
        SET quantity=quantity+?
		WHERE barcode=?";
		break;
	case '2':
	$sql = "UPDATE branch2 
        SET quantity=quantity+?
		WHERE barcode=?";
		break;
	case '3':
	$sql = "UPDATE branch3 
        SET quantity=quantity+?
		WHERE barcode=?";
		break;
	case '4':
	$sql = "UPDATE branch4 
        SET quantity=quantity+?
		WHERE barcode=?";
		break;
	
}

	$q = $db->prepare($sql);
	$q->execute(array($qty,$wapak));

	$result = $db->prepare("DELETE FROM sales_dummy WHERE transaction_id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
	header("location: sales2.php?id=$sdsd&invoice=$c");
?>