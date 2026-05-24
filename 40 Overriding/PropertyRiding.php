<?php

class Teacher
{
    public $city = "Delhi";
    function nextExam()
    {
        echo "Next Exam is Maths";
    }
    function age()
    {
        echo "My age is 40";
    }
}
class Students extends Teacher
{
    public $city = "Noida";
    function age()
    {
        echo "My age is 15";
    }
}

$st1 = new Students();
$t1 = new Teacher();
$st1->age();
echo "<br>";
echo $st1->city;
echo "<br>";
echo $t1->city;
?>