<?php


class ComentarioModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=supermecado;charset=utf8', 'root', '');

    }

    public function getComentarios(){
        $sentencia=$this->db->prepare("SELECT * from comentarios");
        $sentencia->execute();

        $Comentario=$sentencia->fetchAll(PDO::FETCH_OBJ);


        return $Comentario;


    }
}

