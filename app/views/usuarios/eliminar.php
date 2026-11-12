<?php
require_once __DIR__ . '/../../controllers/UsuarioController.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form eliminar</title>
</head>
<body>
    <form action="/productos/eliminar" method="post" onsubmit="return confirm('¿estas seguro de eliminar este producto?')">
    <input type="hidden" name="id" value="<?=$productos['id']?>">
    <button type="submit">eliminar</button>
    </form>
</body>
</html>

