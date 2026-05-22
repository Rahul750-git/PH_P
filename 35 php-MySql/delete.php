<?php
include("./config.php");
$delete = $conn->prepare("select * from students");
$delete->execute();
$result = $delete->fetchAll();


echo "<table border = '1'>";
echo "<tr><th>id</th> 
 <th>name</th> <th>course</th>
  <th>batch</th> <th>city</th> 
 <th>year</th> <th> </th> </tr>";
foreach ($result as $value) {
    echo "<tr>";
    echo "<td>" . $value['id'] . "</td>";
    echo "<td>" . $value['name'] . "</td>";
    echo "<td>" . $value['course'] . "</td>";
    echo "<td>" . $value['batch'] . "</td>";
    echo "<td>" . $value['city'] . "</td>";
    echo "<td>" . $value['year'] . "</td>";
    echo "<td><form method = 'post'><button name = delete value =" .$value['id']. "> delete </button> </form></td>
    <td><a href='update.php?id=".$value['id']."'> edit </a></td>";
    echo "</tr>";
}


echo "</table>";

if(isset($_POST["delete"])) {
    $id = $_POST["delete"];
   $delete = $conn->prepare("delete  from students where id = '$id'");
if($delete->execute()){
    echo "record delete";
} 
else {
    echo"record not delete";

}
}


?>