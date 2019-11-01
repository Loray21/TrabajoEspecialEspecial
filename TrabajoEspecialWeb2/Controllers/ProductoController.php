        <?php
        require_once ".\Model\ProductoModel.php";
        require_once "view\Productoview.php";
        require_once "view\homeview.php";
        require_once "view\Nosotrosview.php";
        include_once('helpers/auth.helper.php');


        class ProductoController {

            private $model;
            private $view;
            private $view1;
            private $view2;

            function __construct(){
                        // barrera para usuario logueado

                $this->model = new ProductoModel();
                $this->view = new  Productoview();
                $this->view1 = new  homeview();
                $this->view2 = new  nosotrosview();
                $authHelper = new AuthHelper();

            }
            public function home(){
                $this->view1->home();
        }

            public function nosotros(){
                $this->view2->nosotros();

            }
            
            public function GetP(){
                $Producto = $this->model->GetProducto();
                $cat = $this->model->get();
                $this->view->DisplayProductos($Producto,$cat);


            }
            public function getProducto($params = null) {
                $id = $params[':ID'];
                $producto = $this->model->getp($id);
                 $this->view->showProducto($producto);
              
            }
            public function ordenar(){
                $ordenar = $this->model->ordenarporprecio();
                $this->view->ordenar($ordenar);
                
            }
            public function AgregarProducto() {

                $id_categoria =$_POST['id_categoria'];
                $nombre = $_POST['nombre'];
                $precio = $_POST['precio'];
                $descripcion = $_POST['descripcion'];
                $foto = $_POST['foto'];

                if (!empty($id_categoria) && !empty($nombre)&& !empty($precio)) {
                    $agregar = true;
                    if ($agregar){
                    $this->model->AgregarProducto($id_categoria,$nombre, $precio, $descripcion,$foto);
                    header("Location: " . BASE_URL . "producto");

                    }
                } else {
                    $this->view->showError("debe completar los campos de categoria,nombre y precio OBLIGATORIOS");
                }
            }

            
            
            public function precargar($params = null){

                $id = $params[':ID'];
                $producto = $this->model->precargar($id);
                $this->view->precargar($producto);


            }

            public function editarProducto($params = null) {
                 
                $id_producto =$params[':ID'];
                $nombre = $_POST['nombre'];
                $precio = $_POST['precio'];
                $descripcion = $_POST['descripcion'];
                $foto = $_POST['foto'];
                if (!empty($nombre)&& !empty($precio)) {
                    $this->model->editar($id_producto,$nombre, $precio, $descripcion,$foto);
                    header("Location: " . BASE_URL."producto");

                } else {
                    $this->view->showError("debe completar los campos de categoria,nombre y precio OBLIGATORIOS");
                }
            }
            public function BorrarProducto($params = null){
                $id = $params[':ID'];
                $this->model->BorrarProducto($id);
                header("Location: " . BASE_URL."producto");
            }
        }