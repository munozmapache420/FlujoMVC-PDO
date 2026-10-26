<?php
require_once __DIR__ . '/../../controllers/ProductoController.php';

$id = $_GET['id'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new ProductoController();
    $controller->eliminar($id);
}

header('Location: index.php');
exit;