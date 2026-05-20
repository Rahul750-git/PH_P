<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="user" placeholder="Enter your Username">
        <br><br>
        <button name="button" value="set">set session</button>
        <br><br>
        <button name="button" value="Get">Display session</button>
        <br><br>
        <button name="button" value="delete">Delete session</button>
    </form>
</body>

</html>

<?php
session_start();
if (isset($_POST["button"])) {
    if ($_POST["button"] == "set") {
        $val = $_POST["user"];
        $_SESSION["user"] = $val;
        echo "Session is set : " . $val;
    }

    if ($_POST["button"] == "Get") {
        
        echo $_SESSION['user'];
    }

    if ($_POST["button"] == "delete") {
        session_destroy();
    }

}

?>