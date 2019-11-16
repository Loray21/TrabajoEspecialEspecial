<?php
require_once("Router.php");
require_once("./api/ComentarioApiController.php");

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

// recurso solicitado
$resource = $_GET["resource"];

// método utilizado
$method = $_SERVER["REQUEST_METHOD"];

// instancia el router
$router = new Router();

// arma la tabla de ruteo
  // rutas
  $router->addRoute("Agregar", "POST", "ComentarioApiController", "AgregarProducto");
  $router->addRoute("comentarios", "GET", "ComentarioApiController", "GetComentarios");
  $router->addRoute("Borrar/:ID", "GET", "ComentarioApiController", "BorrarComentario");


// rutea
$router->route($resource, $method);
