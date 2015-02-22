<?php

require 'classes/setup.php';
require 'db/index.php';

$valor = $_GET['id'];

$array = array('checked'=>1);

$lib = new DRY__METHODS();

$session = $lib::is_session('start');


$timetables = new Timetable();

if($session){

  $id  = $lib::getObjectInSession('idUser');

  $data= $timetables::update($array,$db,$valor);


}

if($data){
  header('Location:index.php');
}




?>
