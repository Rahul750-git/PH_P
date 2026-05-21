<?php

// $host ="localhost";
// $username = "root";
// $password = null;
// $database = "college";
$conn = new mysqli("localhost:3307", "root", "", "college");
if ($conn->connect_error) {
    die("some error". $conn->connect_error);
    
}
echo "connection successful";
echo "<br>";
$result = $conn->query("show tables")->fetch_all();
print_r($result);
?>