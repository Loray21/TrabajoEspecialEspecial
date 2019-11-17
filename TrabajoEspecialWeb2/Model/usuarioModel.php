<?php

class UserModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=supermecado;charset=utf8', 'root', '');
    }

    /**
     * Retorna un usuario según el username pasado.
     */
    public function getByUsername($username) {
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE username = ?');
       $query->execute(array($username));

        return $query->fetch(PDO::FETCH_OBJ);
    }
    public function registrarse($username,$password){
        $sentencia = $this->db->prepare("INSERT INTO usuarios(username,password) VALUES(?,?)");
        $sentencia->execute(array($username,$password));


    }

}