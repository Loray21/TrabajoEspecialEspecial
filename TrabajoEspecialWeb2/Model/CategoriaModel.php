<?php

class CategoriaModel {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=supermecado;charset=utf8', 'root', '');
    }

	public function GetCategoria(){
        $sentencia = $this->db->prepare( "SELECT * from categoria");
        $sentencia->execute();
        $Categoria = $sentencia->fetchAll(PDO::FETCH_OBJ);
        
        return $Categoria;
    }	
    function precargarcat($id) {
        $query = $this->db->prepare('SELECT * FROM categoria WHERE id_categoria=?');
        $query->execute(array($id));

        return $query->fetch(PDO::FETCH_OBJ);
    }
    public function editarcat($id_categoria, $nombre,$descripcion,$foto){
        $sentencia =  $this->db->prepare("UPDATE  categoria SET nombre=?,descripcion=?, foto=? WHERE id_categoria=?");
        $sentencia->execute(array($nombre,$descripcion, $foto,$id_categoria));
        var_dump($sentencia);

    }

/**
     * Retorna una tarea según el id pasado.
     */
    public function get($id) {
        $query = $this->db->prepare('SELECT * FROM producto WHERE id_categoria = ?');
        $query->execute(array($id));

        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    public function AgregarCategoria($nombre,$descripcion,$foto){
        $sentencia=$this->db->prepare("INSERT INTO categoria(nombre,descripcion,foto)VALUES(?,?,?)");
        $sentencia->execute(array($nombre,$descripcion,$foto));
    }
    public function borrarcat($id){
        $sentencia=$this->db->prepare("DELETE FROM categoria where id_categoria=?");
        $sentencia->execute(array($id));
 
    }
    
}