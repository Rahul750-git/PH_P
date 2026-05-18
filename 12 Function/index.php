<?php

echo "welcome to php function";

function processMarks($markArr)
{
    $sum = 0;
    foreach ($markArr as $value) {
        $sum += $value;
    }
    return $sum;
}
$rohan = [34, 46, 57, 78, 90, 97];
$sumMarks = processMarks($rohan);
echo "<br>";
echo "total marks score by rohan out of 600 is: " . $sumMarks;
?>