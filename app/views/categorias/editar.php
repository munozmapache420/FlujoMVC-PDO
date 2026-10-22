<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoría</title>
    <link rel="stylesheet" href="../../../css/style.css">
</head>
<style>
     
</style>
<body>

    <h1 style="color: red; text-align:center;background-color:darkgray;">Editar Categoría</h1>

    <div class="users-form">
        <form action="/categorias/actualizar" method="POST" border="2" style="text-align: center;background-color:darkgray;">

            <input type="hidden" name="id" value="<?= $categoria->id ?>">

            <label for="nombre">Nombre</label><br>
            <input type="text" id="nombre" name="nombre" value="<?= $categoria->nombre ?>" required style="background-color:#FFFDD0">
            <br>

            <label for="descripcion">Descripción</label><br>
            <input type="text" id="descripcion" name="descripcion" value="<?= $categoria->descripcion ?>" style="background-color: #FFFDD0;">
            <br>
            <label for="precio">Precio de referencia</label><br>
            <input type="number" id="precio" name="precio" value="<?= $categoria->precio ?>" required style="background-color: #FFFDD0;">
            <br><br>
            <section>
                <button type="submit" style="color: red;">Guardar cambios</button>
                <br>
                <a href="/categorias">Cancelar</a>
            </section>


        </form>

    </div>

    
</body>
</html>