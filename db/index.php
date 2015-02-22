<?php

  require $_SERVER['DOCUMENT_ROOT'] . "/PHPExercise/classes/ezsql/shared/ez_sql_core.php";
  require $_SERVER['DOCUMENT_ROOT'] . "/PHPExercise/classes/ezsql/mysqli/ez_sql_mysqli.php";
  require $_SERVER['DOCUMENT_ROOT'] . "/PHPExercise/config/config.php";


  $db = new ezSQL_mysqli($config['username'],
                        $config['password'],
                        $config['database'],
                        $config['host']);










 ?>
