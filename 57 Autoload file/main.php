<?php
function autoLoader($class){
 include($class.".php");
}
spl_autoload_register('autoLoader');
$t1 = new teacher();
echo"<br>";
$s1 = new student();
echo"<br>";
$m1 = new management();
?>