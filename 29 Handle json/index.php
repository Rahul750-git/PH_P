<?php

//Json format
// $user=['name'=>'Anil','age'=> 23,'email'=> 'anil.male@gmail.com'];
// $userjson=json_encode($user);
// echo $userjson;


//json convert to object
// $data = '{"name":"anil","age":25,"email":"anil.demo@gmail.com"}';
// $dataArray = json_decode($data);
// print_r($dataArray);

//json convert to array
$data = '{"name":"anil","age":25,"email":"anil.demo@gmail.com"}';
$dataArray = json_decode($data, true);
print_r($dataArray);
?>