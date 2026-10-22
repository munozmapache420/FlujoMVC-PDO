<?php
require_once __DIR__ . '/../models/Cliente.php';

class ClienteController {
    public $cliente;

    public function __construct() {
        $this->cliente = new Cliente();
    }

public function index()
{
    $clientes = $this->cliente->getAll();
    require_once __DIR__ . '/../views/clientes/index.php';
}



    public function crear($datos) {
        try {
            return $this->cliente->registroUnico($datos);
        } catch (PDOException $e) {
            echo "<script>alert('Error al registrar el cliente: " . addslashes($e->getMessage()) . "'); window.history.back();</script>";
            exit;
        }
    }

    public function obtenerPorId($id) {
        return $this->cliente->leerUno((int)$id);
    }

    public function eliminar($id) {
        try {
            return $this->cliente->eliminar((int)$id);
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                echo "<script>
                    alert('No se puede eliminar este cliente porque tiene ventas asociadas.');
                    window.location.href = 'index.php';
                </script>";
                exit;
            }
            throw $e;
        }
    }

    public function editar() {

        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if (!$id) {
            header('Location: /clientes');
            exit;
        }

        $cliente = $this->cliente->getById($id);

        if (!$cliente) {
            echo "Cliente no encontrado";
            return;
        }

        require_once __DIR__ . '/../views/clientes/editar.php';
    }

    public function actualizar() {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $id = $_POST['id'] ?? null;
            $nombre = $_POST['nombre'] ?? '';
            $telefono = $_POST['telefono'] ?? '';
            $direccion = $_POST['direccion'] ?? '';

            if (!$id) {
                echo "Error: falta el ID";
                return;
            }

            $resultado = $this->cliente->actualizar(
                $id,
                $nombre,
                $telefono,
                $direccion
            );

            if ($resultado) {
                header('Location: /clientes');
                exit;
            } else {
                echo "Error al actualizar";
            }
        }
    }

}
