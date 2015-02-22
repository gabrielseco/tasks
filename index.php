<?php

  require 'classes/setup.php';

  $lib = new DRY__METHODS();

  $session = $lib::is_session('start');


  if($session){
    $array = array('title'=>'Sign Up','session'=>$session);
    header('Location:tasks.php');
  }
  else{
    $array = array('title'=>'Log In','anon'=>true);
    header('Location:login.php');
  }







 ?>
