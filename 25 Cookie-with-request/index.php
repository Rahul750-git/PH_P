<form action="" method="post">
    <input
     type="text"
      name="user" 
      placeholder="Enter user name">
    <br><br>
    <button name="button" value="set">Set cookies</button>
    <br><br>
    <button name="button" value="display">Display Cookies</button>
    <br><br>
    <button name="button" value="delete">Delete Cookies</button>
</form>

<?php
if (isset($_POST['button'])) {
if ($_POST['button'] == 'set') {
    $val = $_POST['user'];
    setcookie("user", $val);
    echo"set cookies";
}

if ($_POST["button"] == "display") {
     if (isset($_COOKIE['user'])) {
        echo $_COOKIE['user'];
     }
}
if ($_POST["button"] == "delete") {
    setcookie("user", "", time() - 3600);
    echo "Cookie deleted";
}
}

?>