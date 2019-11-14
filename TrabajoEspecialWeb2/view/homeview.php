<?php

require_once('libs/Smarty.class.php');


class homeview {

    function __construct(){
      $authHelper = new AuthHelper();
       $userName = $authHelper->getLoggedUserName();
       $this->smarty = new Smarty();
            $this->smarty->assign('BASE_URL',BASE_URL);
            $this->smarty->assign('userName', $userName);

    }
    public function home(){
        $this->smarty->assign('BASE_URL',BASE_URL);
        $this->smarty->display('templates/home.tpl');
      }
    }