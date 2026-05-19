<?php 
//  print_r($_FILES);

if ($_FILES['File']) {
    $path = $_FILES['File']['name'];
    $upload_path = "./upload".$path;
  if ( move_uploaded_file($_FILES['File']['tmp_name'], $upload_path)) {
       echo'Upload file';
  } 
  else {
    echo 'failed upload file ';
  }
     
}
else{
      die('failed to upload file');  
    }
?>