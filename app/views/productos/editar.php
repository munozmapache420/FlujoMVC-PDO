<?php
require_once __DIR__ . '/../../controllers/ProductoController.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="../../../css/style.css">
</head>

<body>

    <h1>Editar Producto</h1>

    <div class="users-form">
        <form action="/productos/editar" method="POST">

            <input type="hidden" name="id" value="<?= $productos->id ?? '' ?>">

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="<?= $productos->nombre ?? '' ?>" required>

            <label for="descripcion">Descripción</label>
            <input type="text"  name="descripcion" value="<?= $productos->descripcion ?? '' ?>">

            <label for="categoria">Categoría</label>
            <input type="text" name="categoria" value="<?= $productos->categoria ?? '' ?>">

            <label for="precio_compra">Precio de compra</label>
            <input type="number" name="precio_compra" value="<?= $productos->precio_compra ?? '' ?>" required>

            <label for="stock">Stock</label>
            <input type="number" name="stock" value="<?= $productos->stock ?? '' ?>" required>

            <label for="stock_minimo">Stock mínimo</label>
            <input type="number" name="stock_minimo" value="<?= $productos->stock_minimo ?? '' ?>">

            <label for="estado">Estado</label>
            <input type="text" name="estado" value="<?= $productos->estado ?? '' ?>">

            <button type="submit">Guardar cambios</button>

            <a href="/productos">Cancelar</a>

        </form>
    </div>

</body>

</html>