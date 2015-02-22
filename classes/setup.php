<?php


function myAutoload($classname) {
  $path = $_SERVER['DOCUMENT_ROOT'] .'/PHPExercise/classes/' . $classname . '.php';
  if (file_exists($path)) {
    require_once($path);
  }
  else{
    return false;
  }
}

spl_autoload_register('myAutoload');









 ?>
