<?php

include("./config.php");
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $update = $conn->prepare("select * from students where id = '$id'");
    $update->execute();
    $value = $update->fetchAll();

    $name = $value[0]['name'];
    $course = $value[0]['course'];
    $batch = $value[0]['batch'];
    $city = $value[0]['city'];
    $year = $value[0]['year'];
}


?>

<form action="" method="post">
    <input type="text" value="<?php echo $name ?>" name='name' />
    <br><br>

    <input type="text" value="<?php echo $course ?>" name='course' />
    <br><br>

    <input type="text" value="<?php echo $batch ?>" name='batch' />
    <br><br>

    <input type="text" value="<?php echo $city ?>" name='city' />
    <br><br>
    <input type="text" value="<?php echo $year ?>" name='year' />
    <br><br>
    <button value="<?php echo $id ?>" name="update">Update student data</button>

</form>

<?php
if (isset($_POST['update'])) {
    $id = $_POST['update'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $city = $_POST['city'];
    $year = $_POST['year'];
    $updatestudent = $conn->prepare("update students set 
      name = '$name', 
      course = '$course',
      batch = '$batch',
      city = '$city',
      year = '$year'
      where id = '$id'");
     if ($updatestudent->execute()) {
        header("location:delete.php");
     } 
     else {
        echo"updated failed";
     }
}

?>