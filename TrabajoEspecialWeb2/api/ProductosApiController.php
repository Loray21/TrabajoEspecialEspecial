<?php
        require_once ".\Model\ProductoModel.php";
require_once("./api/apiController.php");
require_once("./api/JSONView.php");




class ProductosApiController extends ApiController{

        public function getProducto($params = null) {
            $id = $params[':ID'];
            $producto = $this->model->getp($id);
            if ($producto) {
                $this->view->response($producto, 200);   
            } else {
                $this->view->response("No existe la tarea con el id={$id}", 404);
            }
        }
        public function AgregarProducto($params = []) {     
            $body = $this->getData();
    

            // inserta la tarea
            $id_categoria = $body->id_categoria;
            $nombre = $body->nombre;
            $descripcion = $body->descripcion;
            $precio = $body->precio;
            $producto = $this->model->AgregarProducto($id_categoria,$nombre,$precio,$descripcion );
        }
        public function GetP($params=null){
            $Producto = $this->model->GetProducto();
            $cat = $this->model->get();
            $categoria=$this->model->obtenerNombreCat();
            $this->view->response($Producto, 200);



        }
        public function BorrarProducto($params = []) {
            $id = $params[':ID'];
            $producto = $this->model->GetP($id);
    
            if ($producto) {
                $this->model->BorrarProducto($id);
                $this->view->response("producto id=$id eliminada con éxito", 200);
            }
            else 
                $this->view->response("producto id=$id not found", 404);
        }
    
        public function editarProducto($params = []) {
            $id = $params[':ID'];
            $producto = $this->model->GetP($id);
    
            if ($producto) {
                $body = $this->getData();
                $id_categoria = $body->id_categoria;
                $nombre = $body->nombre;
                $descripcion = $body->descripcion;
                $precio = $body->precio;
              
                $producto = $this->model->editar($id_categoria,$nombre,$precio,$descripcion,$foto);
                $this->view->response("producto id=$id actualizada con éxito", 200);
            }
            else 
                $this->view->response("producto id=$id not found", 404);
        }
          
    }


   