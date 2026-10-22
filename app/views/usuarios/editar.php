<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="../../../css/style.css">
</head>

<body>

    <h1 style="text-align: center; color:red;background-color:darkgray;">Editar Usuario</h1>

    <div class="users-form">
        <form action="/usuarios/actualizar" method="POST" style="text-align: center;background-color:darkgray;">

            <input type="hidden" name="id" value="<?= $usuario->id ?>"><br>

            <label for="nombre">Nombre</label><br>
            <input type="text" id="nombre" name="nombre" value="<?=  $usuario->nombre ?>" required style="background-color: lightgoldenrodyellow;"><br>

            <label for="correo">Correo</label><br>
            <input type="email" id="correo" name="correo" value="<?= $usuario->correo ?>" required style="background-color: lightgoldenrodyellow;"><br>

            <label for="password">Password</label><br>
            <input type="password" id="password" name="password" value="<?=  $usuario->password ?>" required style="background-color: lightgoldenrodyellow;"><br>

            <label for="cargo">Cargo</label><br>
            <input type="text" id="cargo" name="cargo" value="<?= $usuario->cargo ?>" style="background-color: lightgoldenrodyellow;"><br>

            <label for="activo">Activo</label><br>
            <select id="activo" name="activo" style="background-color: lightgoldenrodyellow;">
                <option value="1" <?= $usuario->activo == 1 ? 'selected' : '' ?>> Activo </option>
                <option value="0" <?= $usuario->activo == 0 ? 'selected' : '' ?>> Inactivo </option>
            </select><br>

            <label for="rol_id">ID de Rol</label><br>
            <input type="number" id="rol_id" name="rol_id" value="<?=  $usuario->rol_id ?>" required style="background-color: lightgoldenrodyellow;"><br><br>

            <section>
            <button type="submit" style="color: red;">Guardar cambios</button>
<br><br>
            <a href="/usuarios">Cancelar</a>
            </section>


        </form>

    </div>

</body>

</html>