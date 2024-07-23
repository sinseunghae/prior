<?php
$mysqli = NEW mysqli('localhost','root','','dcdg');
$resl = $mysqli->query("SELECT product_name FROM product");
?>
<select>
<?php
while($rows = $resl->fetch_assoc()){
  $pro_name = $rows['product_name'];
  echo "<option value = '$pro_name'>$pro_name</option>";

}

?>
</select>