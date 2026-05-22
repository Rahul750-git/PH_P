<?php
include './config.php';

$get = $conn->prepare("SELECT * FROM students");
$get->execute();
$student = $get->fetchAll();
echo "<table border='1'>";
echo "<tr><th>Name</th><th>Course</th><th>Batch</th><th>City</th><th>Year</th></tr>";
foreach ($student as $s) {
    echo "<tr>
    <td>" . $s['name'] . "</td>
    <td>" . $s['course'] . "</td>
    <td>" . $s['batch'] . "</td>
    <td>" . $s['city'] . "</td>
    <td>" . $s['year'] . "</td>
    </tr>";

}
echo "</table>";
?>