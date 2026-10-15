<?php
require_once __DIR__ . '/../../../app/controllers/VentaController.php';
?>

<body>

    <div class="users-form">

        <form action="/ventas" method="POST" style="text-align: center;">

            <h2>Crear Venta</h2>

            <label for="fecha">Fecha:</label><br>
            <input type="date" id="fecha" name="fecha" required
                   style="background-color:#FFFDD0;"><br>

            <label for="total">Total:</label><br>
            <input type="number" id="total" name="total"
                   placeholder="Total de la venta" min="0" step="0.01"
                   required style="background-color:#FFFDD0;"><br>

            <label for="cliente_id">ID del Cliente:</label><br>
            <input type="number" id="cliente_id" name="cliente_id"
                   placeholder="ID del cliente" min="1"
                   required style="background-color:#FFFDD0;"><br>

            <label for="usuario_id">ID del Usuario:</label><br>
            <input type="number" id="usuario_id" name="usuario_id"
                   placeholder="ID del usuario" min="1"
                   required style="background-color:#FFFDD0;"><br>

            <br>

            <button type="submit" style="background-color:#F0F8FF;">
                Agregar Venta
            </button>

        </form>

    </div>

</body>