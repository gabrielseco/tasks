<?php


class Timetable{

  public static $table = "timetable";

  function __construct() {

  }

  public static function proccessData($data){

    $a = array();

    foreach($data as $obj){
      $array = array('name'=>$obj->NAME,
                     'timeFrom'=>gmdate("H:i",$obj->timeFrom),
                     'timeTo'=>gmdate("H:i",$obj->timeTo),
                     'timeUsed'=>gmdate("H:i",$obj->timeUsed),
                     'day'=>self::parseDay($obj->DAYOFWEEK),
                     'observations'=>$obj->observations,
                     'id'=>$obj->idTimetable,
                     'checked'=>$obj->checked
                   );

      array_push($a,$array);
    }

    return $a;
  }

  public static function parseDay($day){
    switch ($day) {
      case "1":
      return "Monday";
      break;
      case "2":
      return "Tuesday";
      break;
      case "3":
      return "Wednesday";
      break;
      case "4":
      return "Thrusday";
      break;
      case "5":
      return "Friday";
      break;
      case "6":
      return "Saturday";
      break;
      case "7":
      return "Sunday";
      break;
    }

  }

  public static function find($id,$db){

    $table = self::$table;


    $data = $db->get_results("SELECT idTimetable,NAME,timeFrom,timeTo,timeUsed,checked,DAYOFWEEK,observations FROM $table
                              WHERE idUser = $id AND checked = 0 AND borrado = 0
                              ORDER BY  DAYOFWEEK ASC,timeFrom ASC");

    if(empty($data)){
      return false;
    }

    return self::proccessData($data);
  }


  public static function findById($id,$idUser,$db){
    $table = self::$table;


    $data = $db->get_results("SELECT * FROM $table
      WHERE idUser = $idUser and idTimetable=$id");

      if(empty($data)){
        return false;
      }

      $array = array();



      return $data;
  }





  public static function insert($array,$db,$id){

    $table = self::$table;

    $clave = "";
    $valor = "";

    foreach($array as $key => $value){
      $clave .=$key. ",";

      if($value != "NULL"){
        $valor .="'" .$value."',";
      }
      else{
        $valor .="" .$value.",";
      }

    }
    $clave = substr($clave,0,-1);
    $valor = substr($valor,0,-1);


    $data = $db->query("INSERT INTO $table ($clave) values ($valor)");

    return $data;
  }

  public static function update($array,$db,$id){

    $table = self::$table;

    $string = "SET ";

    foreach($array as $key => $value){
      if($value != "NULL"){
        $string .= $key ."="."'$value'" .",";
      }
      else{
        $string .= $key ."="."$value" .",";
      }
    }

    $string = substr($string,0,-1);


    $data = $db->query("UPDATE  $table $string WHERE idTimetable='$id'");

    return $data;
  }
}


?>
