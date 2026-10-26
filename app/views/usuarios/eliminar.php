<?php
require_once __DIR__ . '/../../controllers/UsuarioController.php';

$id = $_GET['id'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new UsuarioController();
    $controller->eliminar($id);
}

header('Location: ../../../public/index.php');
exit;
