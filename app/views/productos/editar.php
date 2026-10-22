<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="../../../css/style.css">
</head>

<body>

    <h1 style="color: red; text-align: center;background-color:darkgray;">Editar Producto</h1>

    <div class="users-form">
        <form action="/productos/actualizar" method="POST" border="2" style="text-align: center;background-color:darkgray;">

            <input type="hidden" name="id" value="<?= $producto->id ?>" style="background-color: lightgoldenrodyellow;"><br>

            <label for="nombre">Nombre</label><br>
            <input type="text" name="nombre" value="<?= $producto->nombre  ?>" required style="background-color: lightgoldenrodyellow;"> <br>

            <label for="descripcion">Descripción</label><br>
            <input type="text" name="descripcion" value="<?= $producto->descripcion  ?>" style="background-color: lightgoldenrodyellow;"><br>

            <label for="categoria_id">Categoría (ID)</label><br>
            <input type="number" id="categoria_id" name="categoria_id" value="<?= $producto->categoria_id ?>" required style="background-color: lightgoldenrodyellow;"><br>

            <label for="id_inventario">id_inventario</label><br>
            <input type="text" name="id_inventario" value="<?= $producto->id_inventario ?>" style="background-color: lightgoldenrodyellow;"><br>


            <label for="stock_minimo">Stock mínimo</label><br>
            <input type="text" name="stock_minimo" value="<?= $producto->stock_minimo ?>" style="background-color: lightgoldenrodyellow;"><br>

            <label for="estado:">estado</label><br>
            <select id="estado" name="estado" default="activo" style="background-color: lightblue;">
                <option value="activo"> Activo </option>
                <option value="inactivo"> Inactivo </option>
            </select><br>

            <label for="precio_compra">Precio de compra</label><br>
            <input type="text" name="precio_compra" value="<?= $producto->precio_compra  ?>" required style="background-color:lightgoldenrodyellow"><br>

            <label for="precio_venta">precio_venta</label><br>
            <input type="text" name="precio_venta" value="<?= $producto->precio_venta ?>" style="background-color: lightgoldenrodyellow;"><br>

            <label for="stock">Stock</label><br>
            <input type="text" name="stock" value="<?= $producto->stock  ?>" required style="background-color: lightgoldenrodyellow;"><br><br>

            <section>
            <button type="submit" style="color: red;">Guardar cambios</button>
<br><br>
            <a href="/productos">Cancelar</a>
            </section>



        </form>

    </div>

</body>

</html>