<?php

class AuthHelper {
    public function __construct() {}

    public function login($user) {
        // INICIO LA SESSION Y LOGUEO AL USUARIO
        session_start();
        $_SESSION['ID_USER'] = $user->id;
        $_SESSION['USERNAME'] = $user->username;
        $_SESSION['admin'] = $user->admin;


    }
//hacer un is asdmin que me redirija
    public function logout() {
        session_start();
        session_destroy();
    }

    public function checkLoggedIn() {
        if (!isset($_SESSION['ID_USER'])) {
            header('Location: ' . LOGIN);
            die();
        }       
    }
    public function isAdmin(){
        session_start();
        if (isset($_SESSION['admin'])) {
            return $_SESSION['admin']==1;
            return true;
        }else{
            return false;
        }
            }

    public function getLoggedUserName() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
            if (isset($_SESSION['ID_USER'])) {
            return    $_SESSION["USERNAME"];
    }else{
        return null;
    }
}
}