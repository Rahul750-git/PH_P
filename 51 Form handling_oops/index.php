<?php

if (isset($_POST["user"])) {
    // $User = $_POST["user"];
    // echo $User;
    class User
    {
        function getName($name)
        {
            echo "User name is: " . $name;
        }
    }
    $Us = new User();
    $Us->getName($_POST['user']);
}
?>

<form action="" method="post">
    <input type="text" name="user" placeholder="Enter user name">
    <br><br>
    <button>Submit</button>
</form>