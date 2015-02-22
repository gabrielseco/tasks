<?php

//Database Array

  $config =  array(

    'username'=>'b7463b2a4ef44d',
    'password'=>'d8e8ea36',
    'database'=>'heroku_36080b77856bc12',
    'host'    =>'us-cdbr-iron-east-01.cleardb.net'
  );


  $vendor_smarty = "../classes/smarty/libs/";

  $smtemplate_config = array(
        'layouts_dir'  => $_SERVER['DOCUMENT_ROOT'] .'/PHPExercise/layouts',
        'template_dir' => $_SERVER['DOCUMENT_ROOT'] .'/PHPExercise/views',
        'compile_dir' => $vendor_smarty. 'templates_c',
        'cache_dir' =>   $vendor_smarty. 'cache',
        'configs_dir' => $vendor_smarty. 'configs'
  );



 ?>
