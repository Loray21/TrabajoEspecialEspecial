<?php
require_once('Controllers\ProductoController.php');
require_once("Controllers\CategoriaController.php");
require_once('Controllers\usuarioController.php');

require_once('Router.php');
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", BASE_URL . 'login');


    $r = new Router();

    // rutas
    $r->addRoute("login", "GET", "LoginController", "showLogin");
    $r->addRoute("verify", "POST", "LoginController", "verifyUser");
    $r->addRoute("logout", "GET", "LoginController", "logout");
    $r->addRoute("producto", "GET", "ProductoController", "GetP");
    $r->addRoute("borrar/:ID", "GET", "ProductoController", "BorrarProducto");
    $r->addRoute("precargar/:ID", "GET", "ProductoController", "precargar");
    $r->addRoute("editarProducto/:ID", "POST", "ProductoController", "editarProducto");
    $r->addRoute("Agregar", "POST", "ProductoController", "AgregarProducto");
    $r->addRoute("AgregarCategoria", "POST", "CategoriaController", "AgregarCategoria");
    $r->addRoute("insertar", "POST", "ProductoController", "AgregarComentario");
    $r->addRoute("categorias", "GET", "CategoriaController", "GetCategoria");
    $r->addRoute("agregar", "POST", "ProductoController", "AgregarProducto");
    $r->addRoute("inicio", "GET", "ProductoController", "home");
    $r->addRoute("nosotros", "GET", "ProductoController", "nosotros");
    $r->addRoute("lacteos", "GET", "CategoriaController", "lacteos");
    $r->addRoute("Productos", "GET", "ProductoController", "getcat");
    $r->addRoute("OrdenarPorPrecio", "GET", "ProductoController", "ordenar");
    $r->addRoute("borrarCat/:ID", "GET", "CategoriaController", "borrarCat");
    $r->addRoute("Categoria/:ID", "GET", "CategoriaController", "getProducto");
    $r->addRoute("producto/:ID", "GET", "ProductoController", "getProducto");
    $r->addRoute("precargarcat/:ID", "GET", "CategoriaController", "precargarcat");
    $r->addRoute("editarcat/:ID", "POST", "CategoriaController", "editarcat");
    $r->addRoute("getComentariosCSR", "GET", "ProductoController", "GETcomentarios");




    //Ruta por defecto.
    $r->setDefaultRoute("ProductoController", "home");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>