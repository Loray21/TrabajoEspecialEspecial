<?php
        require_once ".\Model\ComentarioModel.php";
require_once("./api/apiController.php");
require_once("./api/JSONView.php");




class ComentarioApiController extends ApiController{

        public function AgregarComentario($params = []) {     
            $body = $this->getData();
    

            // inserta la tarea
            $id_producto = $body->id_producto;
            $usuario = $body->usuario;
            $comentario = $body->comentario;
            $producto = $this->model->AgregarProducto($id_producto,$usuario,$comentario );
        }
        public function GetComentarios($params=null){
            $comentario = $this->model->getComentarios();
            $this->view->response($comentario, 200);



        }
        public function BorrarComentario($params = []) {
            $id = $params[':ID'];
            $comentario = $this->model->GetComentario($id);
    
            if ($comentario) {
                $this->model->BorrarComentario($id);
                $this->view->response("producto id=$id eliminada con éxito", 200);
            }
            else 
                $this->view->response("producto id=$id not found", 404);
        }
    }
    
        


   