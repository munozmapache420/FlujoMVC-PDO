<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="../../../css/style.css">
</head>

<body>

    <h1 style="color: red; text-align:center;background-color:darkgray;">Editar Cliente</h1>

    <div class="users-form">
        <form action="/clientes/actualizar" method="POST" border="1" style="text-align: center;background-color:darkgray;">

            <input type="hidden" name="id" value="<?= $cliente->id ?>"><br>

            <label for="nombre">Nombre</label><br>
            <input type="text" id="nombre" name="nombre" value="<?= $cliente->nombre ?>" required style="background-color: lightgoldenrodyellow;">
            <br>
            <label for="telefono">Teléfono</label><br>
            <input type="text" id="telefono" name="telefono" value="<?= $cliente->telefono ?>" style="background-color: lightgoldenrodyellow;">
            <br>
            <label for="direccion">Dirección</label><br>
            <input type="text" id="direccion" name="direccion" value="<?= $cliente->direccion ?>" style="background-color: lightgoldenrodyellow">
            <br>
            <br>
            <section>
            <button type="submit" style="color: red;">Guardar cambios</button><br><br>
            <a href="/clientes">Cancelar</a>
            </section>

        </form>

    </div>

</body>
</html>