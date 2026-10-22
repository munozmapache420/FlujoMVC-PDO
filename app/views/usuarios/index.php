<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gestión de Usuarios</title>

    <link rel="stylesheet" href="../../../css/style.css">

</head>

<body>


<!-- MENÚ -->

<nav>

    <a href="index.php">
        <strong>Usuarios</strong>
    </a>

    <a href="../productos/index.php">
        Productos
    </a>

    <a href="../categorias/index.php">
        Categorías
    </a>

    <a href="../clientes/index.php">
        Clientes
    </a>

    <a href="../ventas/index.php">
        Ventas
    </a>

</nav>


<h1 style="text-align: center;color:red">Gestión de Usuarios</h1>


<h2 style="background-color: lightskyblue;">Usuarios Registrados</h2>


<?php if (!empty($usuarios)): ?>

    <p style="background-color: lightskyblue;">
        Total de usuarios:
        <strong><?= count($usuarios) ?></strong>
    </p>


    <div class="users-table">

        <table border="1">

            <thead>

                <tr>

                    <th>ID</th>

                    <th>Nombre</th>

                    <th>Correo</th>

                    <th>Password</th>

                    <th>Cargo</th>

                    <th>Activo</th>

                    <th>Rol ID</th>

                    <th>Acciones</th>

                </tr>

            </thead>


            <tbody>

                <?php foreach ($usuarios as $u): ?>

                    <tr>

                        <td>
                            <?= $u['id'] ?>
                        </td>

                        <td>
                            <?= $u['nombre'] ?>
                        </td>

                        <td>
                            <?= $u['correo'] ?>
                        </td>

                        <td>
                            <?= $u['password'] ?>
                        </td>

                        <td>
                            <?= $u['cargo'] ?>
                        </td>

                        <td>
                            <?= $u['activo'] ?>
                        </td>

                        <td>
                            <?= $u['rol_id'] ?>
                        </td>

                        <td>

                            <a
                                href="/usuarios/editar?id=<?= $u['id'] ?>"
                                class="users-table--edit"
                            >
                                Editar
                            </a>

                            <a
                                href="eliminar.php?id=<?= $u['id'] ?>"
                                class="users-table--delete"
                                onclick="return confirm('¿Seguro que deseas eliminar este usuario?')"
                            >
                                Eliminar
                            </a>

                        </td>

                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>


<?php else: ?>

    <p>
        No hay usuarios registrados.
    </p>

<?php endif; ?>


</body>

</html>
