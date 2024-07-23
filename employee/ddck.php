<?Php
@$cat_id=$_GET['cat_id'];
//$cat_id=2;
/// Preventing injection attack //// 

/// end of checking injection attack ////
require "config.php"; // Database connection string 
$sql = "SELECT * FROM product WHERE supplier_name = :cat_id";
$row=$dbo->prepare($sql);
$row->bindParam(':cat_id',$cat_id,PDO::PARAM_INT,60);
$row->execute();
$result=$row->fetchAll(PDO::FETCH_ASSOC);

$main = array('data'=>$result);
echo json_encode($main);
?>
