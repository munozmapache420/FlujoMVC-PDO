<?php
require_once __DIR__ . '/../../controllers/CategoriaController.php';

$id = $_GET['id'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new CategoriaController();
    $controller->eliminar($id);
}

header('Location: index.php');
exit;
