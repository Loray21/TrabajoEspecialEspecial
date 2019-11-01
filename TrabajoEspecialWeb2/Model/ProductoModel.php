    <?php

    class ProductoModel {

        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=supermecado;charset=utf8', 'root', '');
        }
        public function GetProducto(){
            // prepara la consulta
            $sentencia = $this->db->prepare( "select * from producto");
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
            $sentencia=$this->db->prepare('SELECT * FROM producto where id=?');
            $sentencia->execute(array($id));
            return $sentencia->fetchAll(PDO::FETCH_OBJ);

        }
        public function ordenarporprecio() {
            $query = $this->db->prepare('SELECT * FROM producto order by precio ASC');
            $query->execute();
        $orden=$query->fetchAll(PDO::FETCH_OBJ);
        return $orden;
        }
        public function get() {
            $query = $this->db->prepare('SELECT DISTINCT * FROM categoria');
            $query->execute();
        $categorias=$query->fetchAll(PDO::FETCH_OBJ);
        return $categorias;
        }
        public function AgregarProducto($id_categoria,$nombre,$precio,$descripcion,$foto ){
            $sentencia = $this->db->prepare("INSERT INTO producto(id_categoria,nombre,precio,descripcion,foto) VALUES(?,?,?,?,?)");
            $sentencia->execute(array($id_categoria,$nombre,$precio,$descripcion,$foto));
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
        public function editar($id_producto, $nombre,$precio, $descripcion, $foto){
            $sentencia =  $this->db->prepare("UPDATE producto SET nombre=?,precio=?, descripcion=?, foto=? WHERE id_producto=?");
            $sentencia->execute(array($nombre,$precio ,$descripcion, $foto,$id_producto));

        }

    }


