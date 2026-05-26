<?php
$host="localhost:3307";
$username= "root";
$password= "";
$dbname= "college";
$conn = new PDO("mysql:host=$host;dbname=$dbname;", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>