<?php

class ConstantDemo
{
    const collegeName = "Mohta pg college";

    function collegeName()
    {
        // echo "<br>". self::collegeName;
        echo "<br>" . ConstantDemo::collegeName;
    }
}
echo ConstantDemo::collegeName;
$c1 = new ConstantDemo();
$c1->collegeName();
?>