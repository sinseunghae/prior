<?php
session_start();
include('connect.php');
$a = $_POST['invoice'];
$b = $_POST['amount'];
$c = $_POST['quantity'];
$d = $_POST['date'];
$e = $_POST['cashier'];
$cname = $_POST['branch'];
$sql = "INSERT INTO sales_activity (invoice, amount, cash, sales_date, Branch_ID, customer) VALUES (:a,:b,:c,:d,:e,:f)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$cname));
header("location: inventory.php");
// query



?>