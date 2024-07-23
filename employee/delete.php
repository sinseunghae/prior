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


	$result = $db->prepare("DELETE FROM purchase_transac WHERE transaction_id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
	header("location: sales2.php?id=$sdsd&invoice=$c");
?>