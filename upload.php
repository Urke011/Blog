<?php
  require_once('bootstrap.php');


if(isset($_POST['uploadBtn'])){
//echo "Uploading is started";
//funckija za upload
$isSuccessful = $videoProcessor->upload($uploadFormData);
//parametar su fajlovi iz submitovane forme

  }








require_once('views/upload.view.php');
 ?>
