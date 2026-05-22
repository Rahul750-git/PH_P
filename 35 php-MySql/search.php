
<form action="" method="post">
    <input type="text" name="search" placeholder="enter name for search">
    <br><br>
    <button>Search</button>
</form>

<?php
include("./config.php");
if (isset($_POST["search"])) {
    $search = $_POST["search"];
  // $student = $conn->prepare("select * from students where name ='$search'");
     $student = $conn->prepare("select * from students like name = '%$search%'");
   $student->execute();
   $result = $student->fetchAll();
   echo "<table border='1'>";
echo "<tr><th>Name</th><th>Course</th><th>Batch</th><th>City</th><th>Year</th></tr>";
foreach ($result as $s) {
    echo "<tr>
    <td>" . $s['name'] . "</td>
    <td>" . $s['course'] . "</td>
    <td>" . $s['batch'] . "</td>
    <td>" . $s['city'] . "</td>
    <td>" . $s['year'] . "</td>
    </tr>";

}
echo "</table>";
}

?>