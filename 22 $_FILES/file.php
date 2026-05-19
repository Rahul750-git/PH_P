<?php 
//  print_r($_FILES);

if ($_FILES['fileupload']) {
    $path = $_FILES['fileupload']['name'];
    $upload_path = './upload files'.$path;
    move_uploaded_file($_FILES['fileupload']['tmp_name'], $upload_path)
    || die('failed to upload file');
}
?>