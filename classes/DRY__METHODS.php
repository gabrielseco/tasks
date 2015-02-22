<?php


require 'Carbon.php';

use Carbon\Carbon;

class DRY__METHODS{


    /*
     * METHOD THAT ACCEPTS TWO PARAMETERS
     * FIRST THE VALUE WE GET
     * SECOND THE DEFAULT VALUE IF IT IS EMPTY
     * WE RETURN A VALUE
    */
    static function check_value($value,$default){

      if(empty($value)){
        $var = $default;
      }
      else{
        $var = $value;
      }

      return $var;
    }


  /*METHOD THAT TAKES A PASSWORD AND HASH IT*/

  static function make_hash($password){
    if($password !== ""){
      return password_hash($password, PASSWORD_DEFAULT);
    }
  }

  /*METHOD WHICH VALIDATES A HASH PASSWORD*/

  static function make_validation($password,$hash){

    if(count($password) > 0 || count($hash) > 0){
      return password_verify($password,$hash);
    }

  }


  /*METHOD THAT SETS A SESSION
   *PARAM STRING NULL OR A NAME TO STORAGE
  */
  static function make_session($name = ''){
      if(! isset($_SESSION)){
        session_start();
      }

      if($name != "")
        $_SESSION[$name] = true;
        return true;
  }

  /*METHOD THAT TELL US IF IS A SESSION DONE
   *PARAM STRING NAME OF THE SESSION OR ARRAY THAT HAS BEEN STORAGED
  */

  static function is_session($name){

    if(! isset($_SESSION)){
      session_start();
    }

    $session = isset($_SESSION[$name]);

    return $session;

  }

  /*METHOD THAT SETS AN ARRAY OR STRING IN SESSION
   *PARAM 1 CAN BE AN ARRAY,STRING...
   *PARAM 2 ALWAYS A STRING.
  */

  static function setObjectInSession($obj,$name){

    if(! isset($_SESSION)){
      session_start();
    }

    $_SESSION[$name] = $obj;

  }
  /*
   *METHOD THAT RETRIEVES A OBJECT IN SESSION
  */

  static function getObjectInSession($name){

    if(! isset($_SESSION)){
      session_start();
    }

    if(isset($_SESSION[$name])){
      $var = $_SESSION[$name];
      return $var;
    }
    else{
      return false;
    }
  }

  /*ARRAY WITH TIMES IN SECONDS TO PARSE IN HOURS & MINUTES*/

  static function proccessTime($data){
    $a = array('timeFrom'=>gmdate("H:i",$data['timeFrom']),
               'timeTo'=>gmdate("H:i",$data['timeTo']));


  return $a;

  }

  /*IT RETURN THE STRING OF THE ACTUAL DAY*/

  static function writeDay(){
    $dt = new DateTime();
    $dt = $dt->format('Y-m-d H:i:s');

    $day = date('l', strtotime( $dt ));

    return self::parseDayBack($day);
  }

  static function writeTime(){

    $carbon = new Carbon();
    $time = $carbon::createFromTime();
    $time=$carbon->toTimeDRY($time);

    return $time;
  }

  public static function parseDayBack($day){
    switch ($day) {
      case "Monday":
      return 1;
      break;
      case "Tuesday":
      return 2;
      break;
      case "Wednesday":
      return 3;
      break;
      case "Thursday":
      return 4;
      break;
      case "Friday":
      return 5;
      break;
      case "Saturday":
      return 6;
      break;
      case "Sunday":
      return 7;
      break;
    }

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

}


 ?>
