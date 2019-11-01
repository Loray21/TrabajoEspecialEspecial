<?php

require_once('libs/Smarty.class.php');


class  Nosotrosview{

    function __construct(){
      $authHelper = new AuthHelper();
      $userName = $authHelper->getLoggedUserName();
      $this->smarty = new Smarty();
           $this->smarty->assign('BASE_URL',BASE_URL);
           $this->smarty->assign('userName', $userName);

    }

    public function nosotros(){
      $this->smarty->assign('titulo',"nosotros");

        $this->smarty->display('templates/nosotros.tpl');
      }
}