<?php
require_once ".\Model\CategoriaModel.php";
require_once "view\Categoriaview.php";
include_once('helpers/auth.helper.php');


class CategoriaController {

    private $model;
    private $view;
    private $authHelper;
    
	function __construct(){

        $this->authHelper = new AuthHelper();
        $this->model = new CategoriaModel();
        $this->view = new  CategoriaView();
    }
    
    public function GetCategoria(){
        $Categoria = $this->model->GetCategoria();
        $this->view->display($Categoria);
    
    }
    public function AgregarCategoria(){
        $categoria = $this->model->GetCategoria();
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $foto = $_POST['foto'];
        $agregar;
        foreach ($categoria as $value){
            if($value->nombre==$nombre){
                 $agregar=true;

             }else{
                 $agregar=false;
            }
        }
        if(!$agregar){
                    $this->model->AgregarCategoria($_POST['nombre'],$_POST['descripcion'],$_POST['foto']);
                    header("Location: " .BASE_URL."categorias");
         }else{
                 $this->view->displayError("ya existe una categoria con ese nombre ");
    }
    }
    public function editarcat($params = null) {
        $id_cat =$params[':ID'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $foto = $_POST['foto'];
        if (!empty($nombre)) {
             $this->model->editarcat($id_cat,$nombre,$descripcion,$foto);
                header("Location: " . BASE_URL."categorias");
        } else {
            $this->view->displayError("debe completar los campos de categoria,nombre y precio OBLIGATORIOS");
        }
    }
    
    public function precargarcat($params = null){
        $id = $params[':ID'];
        $categoria = $this->model->precargarcat($id);
        $this->view->precargarcat($categoria);
    }

    public function getProducto($params = null) {
        $id = $params[':ID'];
        $Categoria = $this->model->get($id);

        if ($Categoria) // si existe la cat
            $this->view->showCategoria($Categoria);
        else
            $this->view->displayError("no existen productos con esa categoria ");
    }
    public function borrarCat($params = null){
        $id=$params[':ID'];
        $producto = $this->model->get($id);
        if (!$producto){
           $this->model->borrarCat($id);
             header("Location: " .BASE_URL."categorias");
            }else{
                $this->view->displayError("no puede borrar esta categoria porque existen productos asociados ");

        }
    }
}
