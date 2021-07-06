
<?php


class FormSanitize{

public static function sanitizeFormString($inputText){
  $inputText = strip_tags($inputText);
  $inputText = str_replace(" ","",$inputText);
  $inputText = strtolower($inputText);
  $inputText = ucfirst($inputText);
  return $inputText;
}
public static function sanitazeFormEmail($inputText){
  $inputText = strip_tags($inputText);
  $inputText = str_replace(" ", "", $inputText);
  $inputText = strtolower($inputText);
  $inputText = ucfirst($inputText);
  return $inputText;
}
public static function sanitizeFormPassword($inputText){
  $inputText = strip_tags($inputText);
  return $inputText;
}
} ?>
