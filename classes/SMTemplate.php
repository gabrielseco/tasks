<?php

  require $_SERVER['DOCUMENT_ROOT'] . "/PHPExercise/config/config.php";
  require $_SERVER['DOCUMENT_ROOT'] . "/PHPExercise/classes/Smarty/libs/Smarty.class.php";

  class SMTemplate{

    private $_smarty;

    public function __construct() {

      $this->_smarty = new Smarty();


         global $smtemplate_config;
    $this->_smarty->template_dir = $smtemplate_config['template_dir'];
    $this->_smarty->addTemplateDir($smtemplate_config['layouts_dir']);  // <- new line
    $this->_smarty->compile_dir = $smtemplate_config['compile_dir'];
    $this->_smarty->cache_dir = $smtemplate_config['cache_dir'];
    $this->_smarty->config_dir = $smtemplate_config['configs_dir'];
    }




    function render($template, $data = array(), $layout = 'page'){

      //GLOBAL VARIABLES FOR PAGE.TPL
      $this->_smarty->assign('anon','');
      $this->_smarty->assign('session','');

      foreach($data as $key => $value){

          $this->_smarty->assign($key, $value);

      }
      if($template != ""){

        $content = $this->_smarty->fetch($template . '.tpl');
        $this->_smarty->assign('__content', $content);
        $this->_smarty->display($layout . '.tpl');

      }
    }


     function assign($data){
      if($data != "" && is_array($data)){
        foreach($data as $key => $value){
            $this->_smarty->assign($key, $value);
        }
      }




    }

}


 ?>
