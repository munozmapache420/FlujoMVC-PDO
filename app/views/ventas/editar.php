<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Venta</title>
    <link rel="stylesheet" href="../../../css/style.css">
</head>

<body>

    <h1 style="color: red; text-align:center; background-color:darkgray;">Editar Venta</h1>

    <div class="users-form">
        <form action="/ventas/actualizar" method="POST" style="text-align:center;background-color:darkgray">

            <input type="hidden" name="id" value="<?= $venta->id ?>">

            <label for="fecha">Fecha</label><br>
            <input type="date" id="fecha" name="fecha" value="<?= $venta->fecha ?>" required style="background-color: lightgoldenrodyellow;"><br>

            <label for="total">Total</label><br>
            <input type="number" id="total" name="total" value="<?= $venta->total ?>" required style="background-color: lightgoldenrodyellow;"><br>

            <label for="cliente_id">ID del Cliente</label><br>
            <input type="number" id="cliente_id" name="cliente_id" value="<?= $venta->cliente_id ?>" required style="background-color: lightgoldenrodyellow;"><br>

            <label for="usuario_id">ID del Usuario</label><br>
            <input type="number" id="usuario_id" name="usuario_id" value="<?= $venta->usuario_id ?>" required style="background-color: lightgoldenrodyellow;"><br><br>


            <section>
                <button type="submit" style="color: red;">Guardar cambios</button>
                <br><br>
                <a href="/ventas">Cancelar</a>
            </section>


        </form>

    </div>

</body>

</html>