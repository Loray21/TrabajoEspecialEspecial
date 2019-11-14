<?php
require_once("Router.php");
require_once("./api/ProductosApiController.php");

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

// recurso solicitado
$resource = $_GET["resource"];

// método utilizado
$method = $_SERVER["REQUEST_METHOD"];

// instancia el router
$router = new Router();

// arma la tabla de ruteo
  // rutas
  $router->addRoute("producto/:ID", "GET", "ProductosApiController", "getProducto");
  $router->addRoute("Agregar", "POST", "ProductosApiController", "AgregarProducto");
  $router->addRoute("producto", "GET", "ProductosApiController", "GetP");
  $router->addRoute("borrar/:ID", "GET", "ProductosApiController", "BorrarProducto");
  $router->addRoute("editarProducto/:ID", "POST", "ProductosApiController", "editarProducto");


// rutea
$router->route($resource, $method);

