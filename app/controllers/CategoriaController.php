<?php
require_once __DIR__ . '/../models/Categoria.php';

class CategoriaController {
    public $categoria;

    public function __construct() {
        $this->categoria = new Categoria();
    }

public function index()
{
    $categorias = $this->categoria->getAll();
    require_once __DIR__ . '/../views/categorias/index.php';
}


    public function crear() {
     require_once __DIR__ . '/../views/categorias/crear.php';
    }

    public function guardar()
{
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];

    $categoria = new Categoria();

    $resultado = $categoria->guardar($nombre, $descripcion, $precio);
    if ($resultado) {
        echo "categoria guardada correctamente";
        $this->index();
    } else {
        echo "error al guardar la categoria";
    }
}

    public function editar() {

        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if (!$id) {
            header('Location: /categorias');
            exit;
        }

        $categoria = $this->categoria->getById($id);

        if (!$categoria) {
            echo "Categoría no encontrado";
            return;
        }

        require_once __DIR__ . '/../views/categorias/editar.php';
    }

    public function actualizar() {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $id = $_POST['id'] ?? null;
            $nombre = $_POST['nombre'] ?? '';
            $descripcion = $_POST['descripcion'] ?? '';
            $precio = $_POST['precio'] ?? 0;

            if (!$id) {
                echo "Error: falta el ID";
                return;
            }

            $resultado = $this->categoria->actualizar(
                $id,
                $nombre,
                $descripcion,
                $precio
            );

            if ($resultado) {
                header('Location: /categorias');
                exit;
            } else {
                echo "Error al actualizar";
            }
        }
    }

}
