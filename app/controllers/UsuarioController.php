<?php
require_once __DIR__ . '/../models/Usuario.php';

class UsuarioController {
    public $usuario;

    public function __construct() {
        $this->usuario = new Usuario();
    }

    public function index() {
          $usuarios = $this->usuario->getAll();

    require_once __DIR__ . '/../views/usuarios/index.php';
}
    public function guardar()
{
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $cargo = $_POST['cargo'];
    $activo = $_POST['activo'];
    $rol_id = $_POST['rol_id'];

    $usuario = new Usuario();
    $resultado = $usuario->guardar(
        $nombre,
        $correo,
        $password,
        $cargo,
        $activo,
        $rol_id
    );
    if ($resultado) {
        echo "usuario guardado correctamente";
        $this->index();
    } else {
    echo "error al guardar el usuario";
    }
}



    public function crear() {
     require_once __DIR__ . '/../views/usuarios/crear.php';
    }


    public function eliminar($id) {
        try {
            return $this->usuario->eliminar($id);
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                echo "<script>
                    alert('No se puede eliminar este usuario porque tiene ventas registradas asociadas.');
                    window.location.href = '../../../public/index.php';
                </script>";
                exit;
            }
            throw $e;
        }
    }

    public function roles() {
        $conn = (new Database())->getConnection();
        $stmt = $conn->query("SELECT * FROM roles ORDER BY nombre");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function editar() {

        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if (!$id) {
            header('Location: /usuarios');
            exit;
        }

        $usuario = $this->usuario->getById($id);

        if (!$usuario) {
            echo "Usuario no encontrado";
            return;
        }

        require_once __DIR__ . '/../views/usuarios/editar.php';
    }

    public function actualizar() {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $id = $_POST['id'] ?? null;
            $nombre = $_POST['nombre'] ?? '';
            $correo = $_POST['correo'] ?? '';
            $password = $_POST['password'] ?? '';
            $cargo = $_POST['cargo'] ?? '';
            $activo = $_POST['activo'] ?? 1;
            $rol_id = $_POST['rol_id'] ?? null;

            if (!$id) {
                echo "Error: falta el ID";
                return;
            }

            $resultado = $this->usuario->actualizar(
                $id,
                $nombre,
                $correo,
                $password,
                $cargo,
                $activo,
                $rol_id
            );

            if ($resultado) {
                header('Location: /usuarios');
                exit;
            } else {
                echo "Error al actualizar";
            }
        }
    }

}
