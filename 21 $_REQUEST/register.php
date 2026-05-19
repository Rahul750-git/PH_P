<?php
// if ($_REQUEST) {
//     echo "Username is: " 
//     . $_REQUEST["user_name"];
//      echo"<br" . "Password is: " ;
//     echo $_REQUEST["user_passward"];
// }

foreach ($_REQUEST as $key => $value) {
    echo  $key ." is ". $value .'<br/>';
}
?>