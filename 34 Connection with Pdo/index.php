<?php
// $host = "localhost";
// $username = "root";
// $password = null;
// $database = "college";

try {
    $conn = new PDO("mysql:host=localhost:3307;dbname=college", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection successful";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$result = $conn->query("SHOW TABLES");
while ($row= $result->fetch(PDO::FETCH_NUM)) {
    echo "<br>";
    print_r($row);
}
