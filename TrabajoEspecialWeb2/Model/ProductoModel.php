    <?php

    class ProductoModel {

        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=supermecado;charset=utf8', 'root', '');
        }
        public function Geth(){
            // prepara la consulta
            $sentencia = $this->db->prepare( "select * from producto");//HACER JOIN ACAA
            // ejecuta la consulta
            $sentencia->execute();
            //if(!$ok){
            // var_dump($sentencia->errorInfo());
            //die();
            // obtiene los resultados en un arreglo ($productos es un arreglo de productos)
            $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);

            return $productos;
        }

        public function getp($id){
            $sentencia=$this->db->prepare('SELECT * FROM producto where id_producto=?');
            $sentencia->execute(array($id));
            return $sentencia->fetch(PDO::FETCH_OBJ);

        }
        public function ordenarporprecio() {
            $query = $this->db->prepare('SELECT * FROM producto order by precio ASC');
            $query->execute();
        $orden=$query->fetchAll(PDO::FETCH_OBJ);
        return $orden;
        }
        public function GetProducto(){
            $sentencia=$this->db->prepare("SELECT p.*, c.nombre as categoria FROM producto p JOIN categoria c ON c.id_categoria = p.id_categoria");
            $sentencia->execute();
            var_dump($sentencia->errorInfo());
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
        public function get() {
            $query = $this->db->prepare('SELECT DISTINCT * FROM categoria');
            $query->execute();
        $categorias=$query->fetchAll(PDO::FETCH_OBJ);
        return $categorias;
        }
        public function AgregarProducto($id_categoria,$nombre,$precio,$descripcion,$imagen = null ){
            $filepath = null;
            if ($imagen)
                $filepath = $this->moveFile($imagen);
            $sentencia = $this->db->prepare("INSERT INTO producto(id_categoria,nombre,precio,descripcion, imagen) VALUES(?,?,?,?,?)");
            $sentencia->execute(array($id_categoria,$nombre,$precio,$descripcion,$filepath));
        }
        private function moveFile($imagen) {
            $filepath = "img/" . uniqid() . "." . strtolower(pathinfo($imagen['name'], PATHINFO_EXTENSION));  
            move_uploaded_file($imagen['tmp_name'], $filepath);
            return $filepath;
        }
        public function BorrarProducto($id){
            $sentencia = $this->db->prepare("DELETE FROM producto WHERE id_producto=?");
            $sentencia->execute(array($id));
        }
        function precargar($id) {
            $query = $this->db->prepare('SELECT * FROM producto WHERE id_producto=?');
            $query->execute(array($id));

            return $query->fetch(PDO::FETCH_OBJ);
        }
        public function editar($id_producto, $nombre,$precio, $descripcion,$id_categoria, $imagen){
            $sentencia =  $this->db->prepare("UPDATE producto SET nombre=?,precio=?, descripcion=?,id_categoria=?, imagen=? WHERE id_producto=?");
            $sentencia->execute(array($nombre,$precio ,$descripcion,$id_categoria, $imagen,$id_producto));
        }

    }


