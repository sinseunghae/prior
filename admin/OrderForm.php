<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<title>Order Form</title>
</head>
<body>
<h3 style="text-align:center"><u>Order Form</u></h3>
<div class="customer">
	<p><u><b style="color:blue" style="text-align:left">Customer</b></u><p>
	<form name="custform" action="" method="post">
		<div class="dateid">
		<label for="ordate">Order Date:</label>
		<input type="text" id="ordate" name="ordate" readonly size="15"><br>
		<label for="ornum">Order Number:</label>
		<input type="text" id="ornum" name="ornum" readonly size="15">
		</div>
		<label for="cname">Customer Name:</label>
		<input type="text" id="cname" name="cname" size="40"><br><br>
		<label for="address">Address:</label>
		<input type="text" id="address" name="address" size="70"><br><br>
		<label for="conname">Contact Name :</label>
		<input type="text" id="conname" name="conname" size="40"><br><br>
		<label for="phone">Phone:</label>
		<input type="text" id="phonenumber" name="phonenumber" size ="11">
		<label for="mobile">Mobile:</label>
		<input type="text" id="mobile" name="mobile" siz="11"><br><br>
		<label for="email">E-mail Address:</label>
		<input type="text" id="email" name="email" size="50"><br><br>
	</form>
</div>
<div class="order">
	<form name="ordform" action="" method="post">
		<table>
			<tr>
				<th>UNIT</th>
				<th>QUANTITY</th>
				<th>PRODUCT CODE</th>
				<th>DESCRIPTION</th>
				<th>UNIT PRICE</th>
				<th>TOTAL PRICE</th>
			</tr>
			<tr>
				<td>
					<select name="unit1" id="unit1">
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					</select>
				</td>
				<td>
					<select name="quantity1" id="quantity1">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					</select>
				</td>
				<td>
				<input type="text" id="pcode1" name="pcode1" size="10">
				</td>
				<td>				
				<input type="text" id="desc1" name="desc1" readonly>
				</td>
				<td>				
				<input type="text" id="uprice1" name="uprice1" readonly size="10">
				</td>
				<td>
				<input type="text" id="total1" name="total1" readonly size="10">
				</td>
			</tr>
			<tr>
				<td>
					<select name="unit2" id="unit2">
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					</select>
				</td>
				<td>
					<select name="quantity2" id="quantity2">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					</select>
				</td>
				<td>					
				<input type="text" id="pcode2" name="pcode2" size="10">
				</td>
				<td>				
				<input type="text" id="desc2" name="desc2" readonly></td>
				<td>
				<input type="text" id="uprice2" name="uprice2" readonly size="10">
				</td>
				<td>
				<input type="text" id="total2" name="total2" readonly size="10">
				</td>
			</tr>
			<tr>
				<td>
					<select name="unit3" id="unit3">
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					</select>
				</td>
				<td>
					<select name="quantity3" id="quantity3">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					</select>
				</td>
				<td>					
				<input type="text" id="pcode3" name="pcode3" size="10">
				</td>
				<td>
				<input type="text" id="desc3" name="desc3" readonly>
				</td>
				<td>				
				<input type="text" id="uprice3" name="uprice3" readonly size="10">
				</td>
				<td>
				<input type="text" id="total3" name="total3" readonly size="10">
				</td>
			</tr>
			<tr>
				<td>
					<select name="unit4" id="unit4">
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					</select>
				</td>
				<td>
					<select name="quantity4" id="quantity4">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					</select>
				</td>
				<td>					
				<input type="text" id="pcode4" name="pcode4" size="10">
				</td>
				<td>				
				<input type="text" id="desc4" name="desc4" readonly>
				</td>
				<td>
				<input type="text" id="uprice4" name="uprice4" readonly size="10">
				</td>
				<td>
				<input type="text" id="total4" name="total4" readonly size="10">
				</td>
			</tr>
			<tr>
				<td>
					<select name="unit5" id="unit5">
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					</select>
				</td>
				<td>
					<select name="quantity5" id="quantity5">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					</select>
				</td>
				<td>					
				<input type="text" id="pcode5" name="pcode5" size="10">
				</td>
				<td>
				<input type="text" id="desc5" name="desc5" readonly>
				</td>
				<td>
				<input type="text" id="uprice5" name="uprice5" readonly size="10">
				</td>
				<td>
				<input type="text" id="total5" name="total5" readonly size="10">
				</td>
			</tr>
		</table>
	</form>
</div>
<div class="overtotal">
<label for="totalall">Overall Total Cost:</label>
<input type="text" id="totalall" name="totalall" readonly size="10">
</div>
<div class="buttons">
<input type="submit" value="Submit" onclick="submitForms()"/>
<input type="button" value="Reset" onclick="refresh()">
</div>
<style>
.dateid {
	float:right;
}
.customer{
	width: 900px;
	padding: 10px;
	border: 5px solid gray;
	margin: auto;
	text-align: left;
}

.order{
	width: 900px;
	padding: 10px;
	border: 5px solid gray;
	margin: auto;
	text-align: left;
}
table {
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid blue;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #89D7FF;
}
.overtotal {
	text-align: center;
	width: 150px;
	margin: auto;
	border: 3px solid gray;
	padding: 10px;
}
.buttons{
	width: 150px;
	margin: auto;
	border: 3px solid gray;
	padding: 10px;
	text-align: center;
}
</style>
<script>
	var today = new Date();
	var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
	var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
	var dateTime = date+' '+time;
	document.getElementById("ordate").value = dateTime;
	var rng = Math.floor(Math.random() * 100); 
	var date1 = today.getFullYear()+''+(today.getMonth()+1)+''+today.getDate();
	var time1 = today.getHours() + "" + today.getMinutes() + "" + today.getSeconds();
	var d = date1+time1+rng;
	document.getElementById("ornum").value = d;
	submitForms = function() {
	alert('You have submitted the form.');
	}
	refresh = function() {
	window.location.reload();
	}
</script>
<?php
$serverhost = "localhost";
$username = "root";
$password = "";
$dbName = "orderformdb";
$conn = new mysqli($serverhost, $username, $password);
  if ($conn->connect_error) {
    die("Could not connect: " . $conn->connect_error);
  }
  else{
    echo "Connected sucessfully ";
  }

$sql = "CREATE DATABASE $dbName";
if ($conn->query($sql) === TRUE) {
      echo "Database created successfully ";
    }
    else{
      echo "Error creating database: ". $conn->error;
    }
$conn->close();
$sqltable = "CREATE TABLE UserInfo (
orderNumber INT(15) UNSIGNED PRIMARY KEY,
customerName VARCHAR(40) NOT NULL,
address VARCHAR(70) NOT NULL,
contactName VARCHAR(40),
phone INT(11),
mobile INT(11),
email VARCHAR(50),
unit VARCHAR(10),
quantity INT(10),
productCode VARCHAR(10),
description VARCHAR(40),
unitPrice INT(10),
total INT(10),
overallTotal INT(10))";
$conn1 = new mysqli($serverhost, $username, $password, $dbName);
if ($conn1->query($sqltable) === TRUE) {
  echo "Table created successfully ";
} else {
  echo "Error creating table: " . $conn1->error;
}
$conn1->close();
?>
</body>
</html>