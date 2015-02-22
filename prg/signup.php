<?php

require '../classes/SMTemplate.php';
require '../classes/setup.php';
require '../db/index.php';

$lib = new DRY__METHODS();

$username = $lib::check_value($_POST['username'],"");
$password = $lib::make_hash($lib::check_value($_POST['password'],""));


$user = new User();

$result = $user::insert($username,$password,$db);

$tpl = new SMTemplate();



if($result){
  header('Location:../index.php');
}
else{
  $lib::setObjectInSession('error','errorSignUp');
  header("Location:../signup.php");
}






?>
