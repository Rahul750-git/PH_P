<?php

include("./teacher.php");
include("./student.php");

$teacher = new teacher\JoiningDetails();
$teacher-> joiningDate();

$student = new student\JoiningDetails();
echo"<br>";
$student-> admissionDate();
?>