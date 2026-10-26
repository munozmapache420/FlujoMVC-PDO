<?php
require_once __DIR__ . '/../../config/database.php';


class Categoria
{
    public $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }
    public function getAll()
    {
        $sql = "SELECT * FROM categorias";
        $consulta = $this->conn->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
public function guardar($nombre, $descripcion, $precio)
{
    try {

        $sql = "INSERT INTO categorias (nombre,descripcion,precio) VALUES (:nombre,:descripcion,:precio)";
        $consulta = $this->conn->prepare($sql);
        $consulta->bindParam(':nombre', $nombre);
        $consulta->bindParam(':descripcion', $descripcion);
        $consulta->bindParam(':precio', $precio);

        return $consulta->execute();
    } catch (PDOException $e) {
        echo "Error CATEGORIA: " . $nombre . " ERROR SQL: " . $e->getMessage();
    }
}



    public function crearCategoria($datos)
    {
        $query = "INSERT INTO categorias (nombre, descripcion, precio) VALUES (:nombre, :descripcion, :precio)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([
            ':nombre'      => $datos['nombre'],
            ':descripcion' => $datos['descripcion'] ?? null,
            ':precio'      => $datos['precio'] ?? 0
        ]);
    }

    public function actualizarCategoria($id, $datos)
    {
        $query = "UPDATE categorias SET nombre = :nombre, descripcion = :descripcion, precio = :precio WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([
            ':id'          => $id,
            ':nombre'      => $datos['nombre'],
            ':descripcion' => $datos['descripcion'] ?? null,
            ':precio'      => $datos['precio'] ?? 0
        ]);
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT * FROM categorias WHERE id = :id";

            $consulta = $this->conn->prepare($sql);
            $consulta->bindParam(':id', $id);
            $consulta->execute();
            return $consulta->fetch(PDO::FETCH_OBJ);

        } catch (PDOException $e) {
            echo "Error al buscar la CATEGORIA con ID: " . $e->getMessage();
        }
    }

    public function actualizar($id, $nombre, $descripcion, $precio)
    {
        try {
            $sql = "UPDATE categorias SET
                    nombre = :nombre,
                    descripcion = :descripcion,
                    precio = :precio
                WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            return $stmt->execute([
            ':id' => $id,
            ':nombre' => $nombre,
            ':descripcion' => $descripcion,
            ':precio' => $precio
            ]);

        } catch (PDOException $e) {
            echo "Error al actualizar la CATEGORIA: " . $e->getMessage();
            return false;
        }
    }
    public function eliminar($id){
        $sql = "DELETE FROM categorias ";
    }

}
