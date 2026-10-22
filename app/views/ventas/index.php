<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gestión de Ventas</title>

    <link rel="stylesheet" href="../../../css/style.css">
</head>

<body>

    <!-- MENÚ -->

    <nav>

        <a href="../usuarios/index.php">
            Usuarios
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

        <a href="index.php">
            <strong>Ventas</strong>
        </a>

    </nav>

    <h1 style="text-align:center;color:red">Gestión de Ventas</h1>

    <h2 style="background-color: lightskyblue;">Ventas Registradas</h2>

    <?php if (!empty($ventas)): ?>

        <p style="background-color: lightskyblue;">
            Total de ventas:
            <strong><?= count($ventas) ?></strong>
        </p>

        <div class="users-table">

            <table border="1">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fecha</th>
                        <th>Total</th>
                        <th>Cliente ID</th>
                        <th>Usuario ID</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($ventas as $v): ?>

                        <tr>

                            <td>
                                <?= $v['id'] ?>
                            </td>

                            <td>
                                <?= $v['fecha'] ?>
                            </td>

                            <td>
                                <?= $v['total'] ?>
                            </td>

                            <td>
                                <?= $v['cliente_id'] ?>
                            </td>

                            <td>
                                <?= $v['usuario_id'] ?>
                            </td>

                            <td>

                                <a
                                    href="/ventas/editar?id=<?= $v['id'] ?>"
                                    class="users-table--edit">
                                    Editar
                                </a>

                                <a
                                    href="eliminar.php?id=<?= $v['id'] ?>"
                                    class="users-table--delete"
                                    onclick="return confirm('¿Seguro que deseas eliminar esta venta?')">
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
            No hay ventas registradas.
        </p>

    <?php endif; ?>

</body>

</html>
