<?php

// Operators
// 1. Arithmetic operator

echo "1. Arithemtic operator";
echo "<br>";
$a = 45;
$b = 8;
echo 'for a + b , the result is ' . ($a + $b) . "<br>";
echo 'for a - b , the result is ' . ($a - $b) . "<br>";
echo 'for a * b , the result is ' . ($a * $b) . "<br>";
echo 'for a / b , the result is ' . ($a / $b) . "<br>";
echo 'for a % b , the result is ' . ($a % $b) . "<br>";
echo 'for a ** b , the result is ' . ($a ** $b) . "<br>";


// 2. Assigment operator
echo "<br>";
echo "2. Assigment operator";
echo "<br>";
$x = $a;
echo "for x , the value is " . $x . "<br>";

$a += 5;
echo "for a , the value is " . $a . "<br>";

$a -= 5;
echo "for a , the value is " . $a . "<br>";

$a *= 5;
echo "for a , the value is " . $a . "<br>";

$a /= 5;
echo "for a , the value is " . $a . "<br>";

$a %= 5;
echo "for a , the value is " . $a . "<br>";


// 3. Comparison operator
echo "<br>";
echo "3. Comparison operator";
echo "<br>";
$x = 7;
$y = 9;

echo "for x ==  y, the result is ";
echo var_dump($x == $y);
echo "<br>";
echo "for x ===  y, the result is ";
echo var_dump($x === $y);
echo "<br>";
echo "for x < y, the result is ";
echo var_dump($x < $y);
echo "<br>";
echo "for x >  y, the result is ";
echo var_dump($x > $y);
echo "<br>";
echo "for x >=  y, the result is ";
echo var_dump($x >= $y);
echo "<br>";
echo "for x <=  y, the result is ";
echo var_dump($x <= $y);
echo "<br>";
echo "for x !=  y, the result is ";
echo var_dump($x != $y);
echo "<br>";
echo "for x <=>  y, the result is ";
echo var_dump($x <=> $y);
echo "<br>";
echo "for x !==  y, the result is ";
echo var_dump($x !== $y);
echo "<br>";


// 4. Logical operators
echo "<br>";
echo "4. Logical operators";
echo "<br>";

$m = true;
$n = false;


echo "<br>";
echo "for m and  n, the result is ";
echo var_dump($m and $n);
echo "<br>";

echo "for m or  n, the result is ";
echo var_dump($m or $n);
echo "<br>";

echo "for m xor n, the result is ";
echo var_dump($m xor $n);
echo "<br>";

echo "for m && n, the result is ";
echo var_dump($m && $n);
echo "<br>";

echo "for m || n, the result is ";
echo var_dump($m || $n);
echo "<br>";

echo "for m ! n, the result is ";
echo var_dump( !$m );
echo "<br>";
?>