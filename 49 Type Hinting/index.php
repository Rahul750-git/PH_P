<?php
class Fruits
{
    function getName(string $name)
    {
        echo $name;
    }
}
$f1 = new Fruits();
$f1->getName("apple");


?>