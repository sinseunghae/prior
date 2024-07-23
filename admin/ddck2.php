<?Php
@$cat_id=$_GET['cat_id'];
//$cat_id=2;
/// Preventing injection attack //// 

/// end of checking injection attack ////
require "config.php"; // Database connection string
switch($cat_id){
    case '1':
    $sql="SELECT * from branch1";
    break;
    case '2':
    $sql="SELECT * from branch2";
    break;
    case '3':
    $sql="SELECT * from branch3";
    break;
    case '4':
    $sql="SELECT * from branch4";
    break;
}
$row=$dbo->prepare($sql);
$row->bindParam(':cat_id',$cat_id,PDO::PARAM_INT,60);
$row->execute();
$result=$row->fetchAll(PDO::FETCH_ASSOC);

$main = array('data'=>$result);
echo json_encode($main);
?>
