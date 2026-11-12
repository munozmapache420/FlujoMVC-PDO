<?php
require_once __DIR__ . '/../app/controllers/UsuarioController.php';
require_once __DIR__ . '/../app/controllers/productoController.php';
require_once __DIR__ . '/../app/controllers/ventaController.php';
require_once __DIR__ . '/../app/controllers/categoriaController.php';
require_once __DIR__ . '/../app/controllers/clienteController.php';

/* $controller = new UsuarioController();
$usuarios = $controller->index();
$roles = $controller->roles(); */
$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$ruta = parse_url($uri, PHP_URL_PATH);

$metodo= $_SERVER['REQUEST_METHOD'];

$uri = parse_url(
    $_SERVER['REQUEST_URI'],
    PHP_URL_PATH
);

switch($ruta){
    case"/productos/editar":
        if($metodo === "GET"){
        $productoController = new ProductoController();
        $productoController->editar();
        }
    break;
    case"/productos/editar":
        if($metodo === "POST"){
        $productoController = new ProductoController();
        $productoController->editar();
        }
    break;

    case"/productos/crear":
        if($metodo === "GET"){
        $productoController = new ProductoController();
        $productoController->editar();
        }
    break;
    case"/productos/crear":
        if($metodo === "POST"){
        $productoController = new ProductoController();
        $productoController->editar();
        }
    break;
    case"/productos/actualizar":
        if($metodo === "GET"){
    $productoController = new ProductoController();
    $productoController->actualizar();
        }
    break;
    case"/productos/actualizar":
        if($metodo === "POST"){
    $productoController = new ProductoController();
    $productoController->actualizar();
        }
    break;

    default:
    echo "Ruta no encontrada";
}


if ($ruta === "/productos/editar" && $method === "GET") {
    $productoController = new ProductoController();
    $productoController->editar();
}
if ($ruta === "/productos/editar" && $method === "POST") {
    $productoController = new ProductoController();
    $productoController->editar();
}
if ($ruta === "/productos/editar" && $method === "POST") {
    $productoController = new ProductoController();
    $productoController->editar();
}
if ($ruta === "/productos/editar" && $method === "POST") {
    $productoController = new ProductoController();
    $productoController->editar();
}
if ($ruta === "/productos/actualizar" && $method === "GET") {
    $productoController = new ProductoController();
    $productoController->actualizar();
}
if ($ruta === "/productos/actualizar" && $method === "POST") {
    $productoController = new ProductoController();
    $productoController->actualizar();
}
if ($method === 'GET' && $uri === '/productos') {

    $productoController = new productoController();
    $productoController->index();

}

if ($ruta === "/categorias/editar" && $method === "GET") {
    $categoriaController = new CategoriaController();
    $categoriaController->editar();
}
if ($ruta === "/categorias/actualizar" && $method === "POST") {
    $categoriaController = new CategoriaController();
    $categoriaController->actualizar();
}
if ($ruta === "/clientes/editar" && $method === "GET") {
    $clienteController = new ClienteController();
    $clienteController->editar();
}
if ($ruta === "/clientes/actualizar" && $method === "POST") {
    $clienteController = new ClienteController();
    $clienteController->actualizar();
}
if ($ruta === "/usuarios/editar" && $method === "GET") {
    $usuarioController = new UsuarioController();
    $usuarioController->editar();
}
if ($ruta === "/usuarios/actualizar" && $method === "POST") {
    $usuarioController = new UsuarioController();
    $usuarioController->actualizar();
}
if ($ruta === "/ventas/editar" && $method === "GET") {
    $ventaController = new VentaController();
    $ventaController->editar();
}
if ($ruta === "/ventas/actualizar" && $method === "POST") {
    $ventaController = new VentaController();
    $ventaController->actualizar();
}




if ($method === 'GET' && $uri === '/usuarios') {

    $usuarioController = new UsuarioController();
    $usuarioController->index();

}

if ($method === 'GET' && $uri === '/categorias') {

    $categoriaController = new categoriaController();
    $categoriaController->index();

}

if ($method === 'GET' && $uri === '/ventas') {

    $ventaController = new ventaController();
    $ventaController->index();

}
if ($method === 'GET' && $uri === '/clientes') {

    $clienteController= new clienteController();
    $clienteController->index();

}
if ($method === 'GET' && $uri === '/productos/crear'){
    $productoController = new productoController();
    $productoController->crear();
}

if ($method === 'POST' && $uri === '/productos'){
    $productoController = new productoController();
    $productoController->guardar();
}
if ($method === 'GET' && $uri === '/categorias/crear'){
    $categoriaController = new categoriaController();
    $categoriaController->crear();
}
if ($method === 'POST' && $uri === '/categorias'){
    $categoriaController = new categoriaController();
    $categoriaController->guardar();
}
if ($method === 'GET' && $uri === '/usuarios/crear'){
    $usuarioController = new UsuarioController();
    $usuarioController->crear();
}
if ($method === 'POST' && $uri === '/usuarios'){
    $usuarioController = new UsuarioController();
    $usuarioController->guardar();
}
if ($method === 'GET' && $uri === '/ventas/crear'){
    $ventaController = new VentaController();
    $ventaController->crear();
}
if ($method === 'POST' && $uri === '/ventas'){
    $ventaController = new Venta();
    $ventaController->guardar();
}

?>

<a href="/productos">productos</a>
<br>
<a href="/usuarios">usuarios</a>
<br>
<a href="/categorias">categorias</a>
<br>
<a href="/clientes">clientes</a>
<br>
<a href="/ventas">ventas</a>
<br>
<a href="/productos/crear">creacionProductoBB</a>
<br>
<a href="/categorias/crear">creacionCategoria</a>
<br>
<a href="/usuarios/crear">creacionUsuario</a>
<br>
<a href="/ventas/crear">creacionVentas</a>



  <!-- //////////////////////*// ejercicios extras //////////**///// */ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
          
    <h1>Arreglos en PHP </h1> 
</body>
</html>

<?php


echo "<h3>Ejercicio 1: Arreglo indexado de animales</h3>";
$animales = ["perro", "gato", "loro"];
echo "Primer animal: " . $animales[0] . "<br>";
echo "Segundo animal: " . $animales[1] . "<br>";
echo "Tercer animal: " . $animales[2] . "<br>";

echo "<br><br>";

echo "<h3>Ejercicio 2: Arreglo indexado de frutas</h3>";
$frutas = [
    "Manzana",
    "Pera",
    "Banano",
    "Uva",
    "Manzana"
];
echo "Fruta 1: " . $frutas[0] . "<br>";
echo "Fruta 2: " . $frutas[1] . "<br>";
echo "Fruta 3: " . $frutas[2] . "<br>";
echo "Fruta 4: " . $frutas[3] . "<br>";
echo "Fruta 5: " . $frutas[4] . "<br>";

echo "<br><br>";

echo "<h3>Ejercicio 3: Arreglo asociativo de tienda</h3>";
$tienda = [
    "Producto1" => "Jabon",
    "Producto2" => "Arroz",
    "Producto3" => "Shampoo",
    "Producto4" => "Salchichon"
];
echo "Producto 1: " . $tienda["Producto1"] . "<br>";
echo "Producto 2: " . $tienda["Producto2"] . "<br>";
echo "Producto 3: " . $tienda["Producto3"] . "<br>";
echo "Producto 4: " . $tienda["Producto4"] . "<br>";

echo "<br><br>";

echo "<h3>Ejercicio 4: Arreglo asociativo con arreglo interno </h3>";
$productos = [
    "Producto1" => [
        "nombre" => "Mouse",
        "precio" => 3500,
        "stock"  => 10
    ],
    "Producto2" => [
        "nombre" => "Teclado",
        "precio" => 6000,
        "stock"  => 15
    ]
];
echo "Producto 1: " . $productos["Producto1"]["nombre"] . " | Precio: $" . $productos["Producto1"]["precio"] . " | Stock: " . $productos["Producto1"]["stock"] . "<br>";
echo "Producto 2: " . $productos["Producto2"]["nombre"] . " | Precio: $" . $productos["Producto2"]["precio"] . " | Stock: " . $productos["Producto2"]["stock"] . "<br>";

echo "<br><br>";

echo "<h3>Ejercicio 5: Arreglo indexado con arreglos internos (Estudiantes)</h3>";
$estudiantes = [
    ["Ana", 20, "Ingenieria"],
    ["Carlos", 22, "Medicina"],
    ["Sofia", 19, "Derecho"]
];
echo "Estudiante 1: " . $estudiantes[0][0] . " | Edad: " . $estudiantes[0][1] . " | Carrera: " . $estudiantes[0][2] . "<br>";
echo "Estudiante 2: " . $estudiantes[1][0] . " | Edad: " . $estudiantes[1][1] . " | Carrera: " . $estudiantes[1][2] . "<br>";
echo "Estudiante 3: " . $estudiantes[2][0] . " | Edad: " . $estudiantes[2][1] . " | Carrera: " . $estudiantes[2][2] . "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style= color:red;>ejercicios 12/11/2026 alas 2:57 de la tarde </h1> 
    <h1>ejemplo guiado 1 </h1> 
</body>
</html>

<?php
$opcion= 2;

switch($opcion){
    case 1: 
        echo "Registrar producto";
        break;
    case 2:
        echo "consultar productos";
        break;
    case 3:
        echo "eliminar producto";
        break;
    default:
    echo "opcion no valia";
}
echo "ejercicio practico 1";
$diaSemana= 2;

switch($diaSemana){
    case 1: 
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Sabado";
        break;
    case 7:
        echo "Domingo";
        break;

    default:
    echo "dia no valido";
}

echo "ejemplo guiado 2";

$accion = "listar";

if($accion === "crear") {
    echo "formulario de crear";
}elseif($accion === "listar") {
    echo"Listado de productos";
}elseif($accion === "eliminar"){
    echo "eliminar producto";
}else {
    echo "Accion no encontrada";
}

$accion = "listar";  

switch ($accion) {     
    case "crear":         
        echo "Formulario de creación";         
        break;      
    case "listar":         
        echo "Listado de productos";         
        break;      
    case "eliminar":         
        echo "Eliminar producto";         
        break;      
    default:         
        echo "Acción no encontrada"; 
}

$inventario= 3;

if($inventario === "registrar") {
    echo "formulario de registrar";
}elseif($accion === "consultar") {
    echo"Listado de consultar";
}elseif($accion === "Actualizacion"){
    echo "actualizaste producto";
}elseif($accion === "eliminar"){
    echo "eliminar producto";
}else {
    echo "Accion no encontrada";
}

switch ($inventario) {     
    case "registrar":         
        echo "Formulario de registrara";         
        break;      
    case "consultar":         
        echo "Listado de consultar";         
        break;      
    case "actualizacion":         
        echo "actualizacion";         
        break;      
    case "eliminar":         
        echo "producto eliminado";         
        break;      
    default:         
        echo "Acción no encontrada"; 
}

echo "ejemplo guiado 3";

$metodo = $_SERVER['REQUEST_METHOD'];

$uri= parse_url(
    $_SERVER['REQUEST_URI'],
    PHP_URL_PATH
);

echo "Metodo HTTP: ". $metodo;
echo "<br>";
echo"ruta solicitada: ". $uri;

echo "<h3 style=color:red> ejemplo 4 </h3>";

$metodo= $_SERVER['REQUEST_METHOD'];

$uri = parse_url(
    $_SERVER['REQUEST_URI'],
    PHP_URL_PATH
);

switch($uri){
    case"/productos":
        if($metodo === "GET"){
            echo "Listado de productos";
        }
    break;

    case"/productos/crear":
        if($metodo === "GET"){
            echo "formulario de creacion";
        }
    break;

    case"/productos/guardar":

        if($metodo ==="POST"){
            echo "procesando registro del producto";
        }
    break;

    default:
    echo "Ruta no encontrada";
}

echo "<h3 style=color:red> ejercicio practico 3</h3>";

$metodo= $_SERVER['REQUEST_METHOD'];

$uri = parse_url(
    $_SERVER['REQUEST_URI'],
    PHP_URL_PATH
);

switch($uri){
    case"/proovedores":
        if($metodo === "GET"){
            echo "Listado de proovedores";
        }
    break;

    case"/proovedores/crear":
        if($metodo === "GET"){
            echo "formulario de creacion";
        }
    break;

    case"/proovedores/guardar":

        if($metodo ==="POST"){
            echo "procesando registro del proovedores";
        }
    break;

    default:
    echo "Ruta no encontrada";
}



?>