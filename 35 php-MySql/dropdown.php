<?php

include("./config.php");

$Get = $conn->prepare("select id,name from students");
$Get->execute();
$result = $Get->fetchAll();
// echo"<pre>";
// print_r($result);

echo "<select>";
echo"<option> Select Name </option>";
foreach ($result as $key => $value) {
    echo"<option value = " .$value['id'] .">". $value['name']."</option>";
}
echo "</select>";
?>