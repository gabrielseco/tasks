<?php

require 'classes/SMTemplate.php';
require 'classes/setup.php';
require 'db/index.php';



$lib = new DRY__METHODS();

$session = $lib::is_session('start');


$timetables = new Timetable();

if($session){

  $page  = 'your-tasks';

  $id  = $lib::getObjectInSession('idUser');

  $data= $timetables::find($id,$db);
  $array = array('title'=>'Your Tasks','session'=>$session,'data'=>$data);
}
else{
  header('Location:index.php');
}



$tpl = new SMTemplate();
$tpl->render($page,$array);




?>
