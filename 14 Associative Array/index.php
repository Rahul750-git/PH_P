<?php
echo " welcome to Array in php";
echo"<br>";
//Associative Array
$favCol = array(
    'Rahul' => 'red',
    'Rohan' => 'green',
    'Shyam' => 'blue'
);

//manual
// echo $favCol['Rahul'];
// echo"<br>";
// echo $favCol["Rohan"];

// Loop throw 
foreach ($favCol as $key => $value) {
    echo 'favorite color of '.  $key . ' is ' . $value .'<br>';
}
    ?>