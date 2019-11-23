<?php
require_once('libs/Smarty.class.php');

class LoginView {

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
        $this->smarty->assign('BASE_URL', BASE_URL);
    }

    public function showLogin($error = null) {
        $this->smarty->assign('titulo', 'Iniciar Sesión');
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/usuario.tpl');
    }

    public function showUsuarios($usuarios){
        $authHelper = new AuthHelper();
        $admin = $authHelper->isAdmin();
        $this->smarty->assign('usuarios',$usuarios);
        $this->smarty->assign('admin',$admin);

        $this->smarty->display('templates/Admin.tpl');


    }
    public function registrarse() {
        $this->smarty->assign('titulo', 'Registrarse');
        $this->smarty->display('templates/registrarse.tpl');
    }

}