<?php


require '../classes/SMTemplate.php';
require '../classes/setup.php';
require '../db/index.php';


  $lib = new DRY__METHODS();

  $username = $lib::check_value($_POST['username'],"");
  $password = $lib::check_value($_POST['password'],"");


  $user = new User();

  $result = $user::find($username,$password,$db);

  $tpl = new SMTemplate();


  if($result){

    $lib::make_session('start');
    $assignSmarty = array('title'=>'home ');
    header("Location:../index.php");

  }
  else{
      $lib::setObjectInSession('error','errorLogIn');
      header('Location:../login.php');
  }



?>
