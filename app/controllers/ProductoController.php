
<?php
require_once __DIR__ . '/../models/Producto.php';
require_once __DIR__ . '/../models/Categoria.php';

class ProductoController {

    public $producto;

    public function __construct() {
        $this->producto = new Producto();
    }

    public function index() {
        $productos = $this->producto->getAll();
        require_once __DIR__ . '/../views/productos/index.php';
    }

    public function crear() {
        require_once __DIR__ . '/../views/productos/crear.php';
    }

    public function guardar() {

        $nombre = $_POST['nombre'] ?? 'mapache';
        $descripcion = $_POST['descripcion'] ?? '';
        $categoria_id = $_POST['categoria_id'] ?? null;
        $id_inventario = $_POST['id_inventario'] ?? null;
        $stock_minimo = $_POST['stock_minimo'] ?? 0;
        $estado = $_POST['estado'] ?? 'activo';
        $precio_compra = $_POST['precio_compra'] ?? 0;
        $precio_venta = $_POST['precio_venta'] ?? 0;
        $stock = $_POST['stock'] ?? 0;

        $resultado = $this->producto->guardar(
            $nombre,
            $descripcion,
            $categoria_id,
            $id_inventario,
            $precio_compra,
            $precio_venta,
            $stock,
            $stock_minimo,
            $estado
        );

        if ($resultado) {
            header('Location: /productos');
            exit;
        } else {
            echo "Error al guardar el producto";
        }
    }

    public function actualizar() {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $categoria_id = $_POST['categoria_id'] ?? null;
            $id_inventario = $_POST['id_inventario'] ?? null;
            $stock_minimo = $_POST['stock_minimo'] ?? 0;
            $estado = $_POST['estado'] ?? 'activo';
            $precio_compra = $_POST['precio_compra'] ?? 0;
            $precio_venta = $_POST['precio_venta'] ?? 0;
            $stock = $_POST['stock'] ?? 0;

            if (!$id) {
                echo "Error: falta el ID del producto";
                return;
            }

            $resultado = $this->producto->actualizar(
                $id,
                $nombre,
                $descripcion,
                $categoria_id,
                $id_inventario,
                $stock_minimo,
                $estado,
                $precio_compra,
                $precio_venta,
                $stock
            );

            if ($resultado) {
                header('Location: /productos');
                exit;
            } else {
                echo "Error al actualizar el producto";
            }
        }
    }

    public function eliminar(){
        $id =$_POST['id'];
        $producto = $this->producto->getById($id);
        require_once __DIR__ . '/../views/productos/eliminar.php';
    }

    public function editar() {
    
    $id = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
    $id =$_GET['id'];
    $productos= $this->producto->getById($id);
    require_once __DIR__ . '/../views/productos/editar.php';
    }
}
