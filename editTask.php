<?php

require 'classes/setup.php';
require 'classes/SMTemplate.php';
require 'db/index.php';

$lib = new DRY__METHODS();

$session = $lib::is_session('start');

$id = $_GET['id'];
$idUser = $lib::getObjectInSession('idUser');

if($session){
  $page  = 'edit-task';
}

$timetable = new Timetable();

$data = $timetable::findById($id,$idUser,$db);




$array = array('timeFrom'=>$data[0]->timeFrom,'timeTo'=>$data[0]->timeTo);

$dataTime = $lib::proccessTime($array);



$array = array('title'=>'Edit Timetable','data'=>$data[0],'session'=>$session,'dataTime'=>$dataTime,'id'=>$id);



$tpl = new SMTemplate();
$tpl->render($page,$array);




?>
