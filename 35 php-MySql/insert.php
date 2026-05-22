<form action="insert.php" method="post">
    <input type="text" name="name" placeholder="Name">
    <br><br>
    <input type="text" name="course" placeholder="Course">
    <br><br>
    <input type="text" name="batch" placeholder="Batch">
    <br><br>
    <input type="text" name="city" placeholder="City">
    <br><br>
    <input type="text" name="year" placeholder="Year">
    <br><br>
    <input type="submit" value="Add Student">
</form>

<?php
if (isset($_POST["name"])) {
    $name = $_POST["name"];
    $course = $_POST["course"];
    $batch = $_POST["batch"];
    $city = $_POST["city"];
    $year = $_POST["year"];
    include './config.php';

    $query = $conn->prepare("INSERT INTO Students 
     (id,name, course, batch, city, year) 
     VALUES ( NULL, '$name', '$course', '$batch', '$city', '$year')");
    $result = $query->execute();
    if ($result) {
        echo "Student added successfully.";
    } else {
        echo "Error adding student.";
    }
}
