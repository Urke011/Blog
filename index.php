<?php
  require_once('bootstrap.php');
if(isset($_GET['post_id'])AND $_SESSION['loggedUser']){
  $post->delete($_GET['post_id']);
}

$posts = $post->selectAll('posts');

  require_once('views/index.view.php');
?>
