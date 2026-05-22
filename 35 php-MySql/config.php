<?php

$host = "localhost:3307";
$username = "root";
$password = "";
$database = "college";

$conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
