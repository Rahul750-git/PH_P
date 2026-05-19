<?php
echo"Welcome to MySql";

//connecting to the Database
$servername = "localhost";
$username = "root";
$password = '';

// create a connection
$conn = mysqli_connect($servername,$username,$password) ;

//Die if connection was not successful
if(!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "<br"."Connection is Successful";
}

?>