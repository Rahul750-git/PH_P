<?php

class Teacher
{
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
    function age()
    {
        echo "My age is 15";
    }
}

$st1 = new Students();
$st1->age();
?>