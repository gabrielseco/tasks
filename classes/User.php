<?php


class User{

  public static $table = "users";

  function __construct() {

  }

  //find a user we make some ifs in case we insert a user
  public static function find($username,$password,$db,$login=true){

    $lib = new DRY__METHODS();

    $table = self::$table;

    $data = $db->get_results("SELECT * FROM $table WHERE username='$username'");


    //USER NOT EXISTS
    if(empty($data)){
      return false;
    }

    //INSERT SIGN UP
    if(count($data) > 0 && !$login){
      return $data;
    }

    //FIND

    if($login && !empty($data) && $lib::make_validation($password,$data[0]->password)){

       $lib::setObjectInSession($data[0]->idUser,'idUser');
       return true;
    }

  }

  public static function insert($username,$password,$db){

    $table = self::$table;

    $data = self::find($username,$password,$db,$login=false);

    if(empty($data) ){
      $data = $db->query("INSERT INTO $table (username,password) values ('$username','$password')");
      return $data;
    }

    else{
      return 0;
    }

  }

}

?>
