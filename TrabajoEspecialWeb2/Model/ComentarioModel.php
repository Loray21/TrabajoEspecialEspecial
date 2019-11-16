<?php


class ComentariosModel{

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
    public function getComentario($id){
        $sentencia=$this->db->prepare('SELECT * FROM comentarios where id_comentario=?');
        $sentencia->execute(array($id));
        return $sentencia->fetch(PDO::FETCH_OBJ);

    }
    public function borrarComentario($id){
        $sentencia=$this->db->prepare("DELETE FROM comentarios where id_comentario=?");
        $sentencia->execute(array($id));
 
    }
    
}

