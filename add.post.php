<?php
require_once('bootstrap.php');
if(!isset($_SESSION['loggedUser'])){
  header('Location: index.php');
}

if(isset($_POST['butSub'])){
  $post->insertPost();
}


require_once('views/add.post.view.php');
 ?>
