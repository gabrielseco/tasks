<?php

  require 'classes/SMTemplate.php';
  require 'classes/setup.php';

  $lib = new DRY__METHODS();

  $result = $lib::getObjectInSession('errorLogIn');
  unset($_SESSION['errorLogIn']);

  $title = array('title'=>'LOGIN','anon' =>'true','result'=>$result);

  $tpl = new SMTemplate();
  $tpl->render('login',$title);

 ?>
