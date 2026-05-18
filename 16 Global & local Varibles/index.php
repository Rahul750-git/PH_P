<?php 
echo"Welcome to Global And Local Variables in php";
echo "<br>";
// Global Variables
$a = 98;
function printValue(){
   
    // $a=95;   // local Variables

    global $a; //Give me the access of global variable
    echo "The Local Variable value is: ".$a;

}
printValue();
echo "<br>";
echo  "The global Variable value is: ". $a;

?>

