<?php

require '../classes/SMTemplate.php';
require '../classes/setup.php';
require '../db/index.php';

$lib = new DRY__METHODS();
$timetable = new Timetable();

$session = $lib::is_session('start');

$idUser  = $lib::getObjectInSession('idUser');

$subject = $lib::check_value($_POST['subject'],"");
$day  = $lib::check_value($_POST['day'],"");
$timeFrom = $lib::check_value($_POST['timeFrom'],"");
$timeTo = $lib::check_value($_POST['timeTo'],"");
$observations = $lib::check_value($_POST['observations'],"NULL");


$timeFA = explode(":",$timeFrom);

$timeFT = explode(":",$timeTo);

$timeFrom = $timeFA[0] * 3600 + $timeFA[1] * 60;

$timeTo   = $timeFT[0] * 3600 + $timeFT[1] * 60;

$time = $timeTo - $timeFrom;


$array = array('name'=>$subject,
               'timeFrom'=>$timeFrom,
               'timeTo'=>$timeTo,
               'timeUsed'=>$time,
               'dayOfWeek'=>$day,
               'observations'=>$observations,
               'idUser'=>$idUser);


$status=$timetable::insert($array,$db,$idTimetable = null);

if($status){
  $assignSmarty = array('title'=>'home ');
  header("Location:../tasks.php");
}
else{
  echo $status . "error";
}









?>
