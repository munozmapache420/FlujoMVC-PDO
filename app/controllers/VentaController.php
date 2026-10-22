<?php
require_once __DIR__ . '/../models/Venta.php';
require_once __DIR__ . '/../models/DetalleVenta.php';
require_once __DIR__ . '/../models/MetodoPago.php';
require_once __DIR__ . '/../models/Producto.php';
require_once __DIR__ . '/../models/Cliente.php';
require_once __DIR__ . '/../models/Usuario.php';

class VentaController {
    public $venta;

    public function __construct() {
        $this->venta = new Venta();
    }


    public function index() {
    $ventas = $this->venta->getAll();
    require_once __DIR__ . '/../views/ventas/index.php';
    }

        public function crear() {
     require_once __DIR__ . '/../views/ventas/crear.php';
    }

public function guardar() {

    $fecha = $_POST['fecha'];
    $total = $_POST['total'];
    $cliente_id = $_POST['cliente_id'];
    $usuario_id = $_POST['usuario_id'];

    $venta = new Venta();

    $resultado = $venta->guardar(
        $fecha,
        $total,
        $cliente_id,
        $usuario_id
    );

    if ($resultado) {
        echo "Venta guardada correctamente";
        $this->index();

    } else {
        echo "Error al guardar la venta";
    }}

    

    public function anular($id) {
        return $this->venta->anularVenta((int)$id);
    }

    public function editar() {

        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if (!$id) {
            header('Location: /ventas');
            exit;
        }

        $venta = $this->venta->getById($id);

        if (!$venta) {
            echo "Venta no encontrado";
            return;
        }

        require_once __DIR__ . '/../views/ventas/editar.php';
    }

    public function actualizar() {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $id = $_POST['id'] ?? null;
            $fecha = $_POST['fecha'] ?? '';
            $total = $_POST['total'] ?? 0;
            $cliente_id = $_POST['cliente_id'] ?? null;
            $usuario_id = $_POST['usuario_id'] ?? null;

            if (!$id) {
                echo "Error: falta el ID";
                return;
            }

            $resultado = $this->venta->actualizar(
                $id,
                $fecha,
                $total,
                $cliente_id,
                $usuario_id
            );

            if ($resultado) {
                header('Location: /ventas');
                exit;
            } else {
                echo "Error al actualizar";
            }
        }
    }

}
