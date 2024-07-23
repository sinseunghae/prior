<?php

$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "dcdg";

$connection = mysqli_connect($hostName, $userName, $password, $dbName);

if (!$connection) {
	echo "Connection failed!";
}

?>