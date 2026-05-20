<?php


if (isset($_POST["filename"])) {
    $fileName = $_POST["filename"];
    $content = $_POST["content"];
    $file = fopen($fileName, 'w') or die('unable to create file');
    fwrite($file, $content);
    fclose($file);
    echo 'file created';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" placeholder="Enter your file name" name="filename">
        <br><br>
        <textarea name="content" id=""></textarea>
        <br><br>
        <button>Create file</button>
    </form>
</body>

</html>