<?php

  require 'classes/SMTemplate.php';
  require 'classes/setup.php';

  $lib    = new DRY__METHODS();

  $session = $lib::is_session('start');

  $title = 'Create Timetable';

  $day = $lib::writeDay();




  $array = array('title'=>$title,'session'=>$session,'day'=>$day);

  $tpl = new SMTemplate();

  $tpl->render('createTask',$array);











 ?>
