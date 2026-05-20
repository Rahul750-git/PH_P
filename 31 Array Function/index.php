<?php
// Array functions
$user = ['Ram', 'Shyam', 'Mohan', 'Peter'];
$users = ['name' => 'Anil', 'age' => 23, 'email' => 'anil.male@gmail.com'];
$emp = ['Tony', 'Noob', 'Bruce', 'Sum', 'Sum', 'Tony', 'Noob'];


// if (is_array($users) && is_array($emp)) {
//     echo "This is a array";

// } else {
//     echo "This is not an array";
// }
// Hidden select position element
//   unset($user[2]);
//   print_r($user);



//add a last index in element
// array_push($user,'sidhu');
// print_r($user);



//remove a last index in element
// array_pop($user);
//     print_r($user);



//Array keys
// print_r(array_keys($users));



// array convert to a string
// echo implode( $user);



// String convert array
// $str = "Hello php"; 
// // echo $str;
//  print_r(explode(" " ,$str));


// merge  array
// print_r(array_merge($user, $emp));

// remove Duplicate element
print_r(array_unique($emp));
?>