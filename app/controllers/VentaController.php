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


}
