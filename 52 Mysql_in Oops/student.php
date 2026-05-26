<?php
include("./config.php");
class Student
{
    public $DBconn;
    function __construct($conn)
    {
        $this->DBconn = $conn;

    }
    function getData()
    {
        $getStudents = $this->DBconn->prepare("select * from students");
        $getStudents->execute();
        $data = $getStudents->fetchAll();
        echo "<table border 1 >";
        echo "<tr>
       <th>Name</th>
        <th>Course</th>
        <th>batch</th>
         <th>city</th>
         <th>year</th>
       </tr>";
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["course"] . "</td>";
            echo "<td>" . $row["batch"] . "</td>";
            echo "<td>" . $row["city"] . "</td>";
            echo "<td>" . $row["year"] . "</td>";
            echo "</tr>";

        }
        echo "</table>";
    }
    function insertData()
    {
        $sqlQuery = "insert into students (`id`,`name`,`course`,`batch`,`city`,`year`) values (null,'bruce','MBA','morning','delhi','2nd')";
        $getStudents = $this->DBconn->prepare($sqlQuery);
        $result = $getStudents->execute();
        if ($result) {
            echo "data inserted";
        } else {
            echo "operation failed";
        }

    }
    function updateData()
    {
        $sqlQuery = "update  students set 
         name='tony',
         course='B.tech',
         batch = 'afternoon',
         city = 'New Delhi',
         year = '4th'
         where id = 14
         ";
        $getStudents = $this->DBconn->prepare($sqlQuery);
        $result = $getStudents->execute();
        if ($result) {
            echo "data updated";
        } else {
            echo "operation failed";
        }
    }
    function deleteData()
    {
        $sqlQuery = "delete  from students where id = 14";

        $getStudents = $this->DBconn->prepare($sqlQuery);
        $result = $getStudents->execute();
        if ($result) {
            echo " deleted data ";
        } else {
            echo "operation failed";
        }
    }

    function insertDataWithRequest($request)
    {
        //  print_r($request);
        $name = $request['Name'];
        $course = $request['Course'];
        $batch = $request['Batch'];
        $city = $request['City'];
        $year = $request['Year'];
        $sqlQuery = "insert into students (`id`,`name`,`course`,`batch`,`city`,`year`) values (null,'$name','$course','$batch','$city','$year')";
        $getStudents = $this->DBconn->prepare($sqlQuery);
        $result = $getStudents->execute();
        if ($result) {
            echo "data inserted";
        } else {
            echo "operation failed";
        }

    }
}

$student = new Student($conn);
// $student->getData();
// $student->insertData();
// $student->updateData();
// $student->deleteData();

if (isset($_POST["Name"])) {
    $student->insertDataWithRequest($_POST);
}
?>