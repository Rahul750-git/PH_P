<?php


// $file = 'files/dummy.txt';
// $myfile = fopen($file, 'r') or die('unable to read file');
// echo fread($myfile, filesize($file));
// fclose($myfile);

if (isset($_FILES["file"])) {
    $file = $_FILES["file"]["tmp_name"];
    $myfile = fopen($file, 'r') or die('unable to read file');
    echo fread($myfile, filesize($file));
    fclose($myfile);
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
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <br><br>

        <button>Read file</button>
    </form>
</body>

</html>