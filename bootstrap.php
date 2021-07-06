<?php
session_start();
require('classes/connection.php');

$db = Connection::connect();
require_once('classes/QueryBilder.php');
require_once('classes/User.php');
require_once('classes/FormSanitize.php');
require_once('classes/Constants.php');
require_once('classes/Post.php');
require_once('classes/UploadFormConstruct.php');
require_once('classes/UploadFormData.php');
require_once('classes/VideoProcessor.php');


$query = new QueryBilder($db);
//$todos = $query->selectAll(); zampamti ovo
$user = new User($db);

$post = new Post($db);
//pozivanje forme
$UploadFormConstruct = new UploadFormConstruct();

//podaci iz forme
if(isset($_POST['uploadBtn'])){
  $uploadFormData = new UploadFormData(
                                      $_FILES['fileInput'],
                                      $_POST['fileText'],
                                      $_POST['inputDescription']
          //mora se paziti na bootstarp jer name nekad nije dobro
          //dobro napisan
  );
}

//pravljenje video upload
$videoProcessor = new videoProcessor();



 ?>
