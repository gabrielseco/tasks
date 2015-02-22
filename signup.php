<?php

  require 'classes/SMTemplate.php';
  require 'classes/setup.php';

  $tpl = new SMTemplate();

  $lib = new DRY__METHODS();

  $result = $lib::getObjectInSession('errorSignUp');
  unset($_SESSION['errorSignUp']);


  $array = array('title'=>'Sign up','anon'=>true,'result'=>$result);

  $tpl->render('signup',$array);






 ?>
