<?php

require('config.php');

class Connection{
  public static function connect(){
    try {
      return new PDO('mysql:host='.HOST.';dbname='.DBNAME.'',''.USER.'',''.PASSWORD.'');
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
}






 ?>
