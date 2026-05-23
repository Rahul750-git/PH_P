<?php
class MathOperations{
    
    function sum(){
        return 10 + 20;
    }
    function sub($a, $b){
        echo $a - $b;
    }
    function mul($a, $b){
        echo $a * $b;
    }
    function div($a, $b){
        echo $a / $b;
    }
}


$math = new MathOperations();
echo $math->sum();
echo "<br>";
echo $math->sub(10,20);
echo "<br>";
echo $math->mul(20,50);
echo "<br>";
echo $math->div(900,90);

?>