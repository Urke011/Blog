<?php
require_once('bootstrap.php');
if(isset($_SESSION['loggedUser'])){
  header('Location: index.php');
  //kad je korisnik logovan, ne moze se vratiti na login stranicu
  //preko url ili na drugi nacin
}

if(isset($_POST['register'])){

  $user->userRegister();
}
if(isset($_POST['submit'])){
  $user->userLogin();
}
require_once('views/login_register.views.php');

 ?>
