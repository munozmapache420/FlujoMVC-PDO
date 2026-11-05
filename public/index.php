<?php
$frutas = ["manazana", "pera","mango"];
echo "<h1>ALMACEN</h1>";

echo "<br>";
echo $frutas[0];

echo "<br>";

echo $frutas[2];

echo "<h1>LENGUAJES</h1>";

echo "<br>","<br>";

$lenguajes = ["php", "python", "java", "c++","html"];

echo $lenguajes[1];
echo "<br>";
echo $lenguajes[4];
echo "<br>";
echo $lenguajes[0];

echo "<br>";

echo "<h1>CATREGORIA DE LAS TIENDAS</h1>";

$categorias_tienda=["Alimentos no perecederos", "bebidas", "alimentos pedecederos"];
echo "<br>";
echo $categorias_tienda[1];
echo "<br>";
echo "<br>";

echo "<h1>PARTE 2 ASOCIATIVOS </h1>";
echo "<br>";

$producto = [ 
    "nombre" => "Mouse", 
    "precio" => 35000, 
    "stock" => 12 
    ]; 
    
    echo $producto["nombre"]; 
    echo "<br>"; 
    echo $producto["precio"]; 

    echo "<h1>ESTUDIANTE</h1>";
$estudiante =[
    "nombre" => "huber uMapache",
    "ficha" => 3230905,
    "edad" => 21
];
echo $estudiante["nombre"];
echo "<br>"; 
echo $estudiante["ficha"];
echo "<br>"; 
echo $estudiante["edad"];
echo "<br>"; 
echo "<h1>PROVEEDOR DE TIENDA </h1>";
echo "<br>"; 
$proveedor=[
    "nombre"=>"mapache el proveedor",
    "ciudad"=>"La Dorada C.",
    "teléfono"=> 3123598868,
    "correo electrónico." =>"munozmapache420@gmail.com"
];
echo $proveedor["nombre"];
echo "<br>"; 
echo $proveedor["ciudad"];

echo "<br>"; 
echo "<h1>PARTE 3 </h1>";
echo "<br>"; 
echo "<h1>TIENDA </h1>";
"nombre, precio y cantidad;";
$tienda=[
    "nombre"=>"sal",
    "precio"=>2000,
    "cantidad"=> 22
];
$tienda["precio"]=1500;
$tienda["categoria"]="comida no pedecedera";
echo $tienda["nombre"]; 
echo "<br>"; 
echo $tienda["precio"];
echo "<br>";
echo $tienda["categoria"]; 


echo "<h1>COMPUTADORES </h1>";

$computadores = ["lenovo", "apple", "hp"];


$computadores[] = "dell";
$computadores[] = "asus";

echo $computadores[0] . "<br>";
echo $computadores[1] . "<br>";
echo $computadores[2] . "<br>";
echo $computadores[3] . "<br>";
echo $computadores[4] . "<br>";


echo "<h1>PARTE 4 </h1>";
echo "<br>";
echo "<h1>productos combinados</h1>";

$productos=[
    ["nombre"=>"PLay station",
    "precio"=>5000000,
    "cantidad"=>22],
    ["nombre"=>"xbox",
    "precio"=>4000000,
    "cantidad"=>12],
    ["nombre"=>"nintendo switch",
    "precio"=>13000000,
    "cantidad"=>10]
];
echo $productos[1]["nombre"];
echo "<br>";
echo $productos[2]["precio"];
echo "<br>";
echo $productos[0]["cantidad"];
echo "<br>";

echo "<h1>instructor</h1>";

$if_aprendices=[
    ["nombre"=>"mapache",
    "ficha"=>3230905,
    "programa de formación."=>"ADSO"],
    ["nombre"=>"Uribe",
    "ficha"=>3238868,
    "programa de formación."=>"FIT"],
    ["nombre"=>"petro",
    "ficha"=>3221222,
    "programa de formación."=>"CYPA"],
];
echo $if_aprendices[2]["nombre"];
echo "<br>";
echo $if_aprendices[0]["ficha"];

echo "<h1>parte 5</h1>";
$producto = [ 
    "nombre" => "Monitor", 
    "precio" => 750000, 
    "proveedor" => [ "nombre" => "Tecnología SAS", 
    "ciudad" => "Bogotá" 
    ]
    ];
    echo $producto["nombre"]; 
    echo "<br>"; 
    echo $producto["proveedor"]["nombre"]; 
    echo "<br>"; 
echo $producto["proveedor"]["ciudad"]; 

echo "<h1>aprendices</h1>";
$aprendizes= [
    "nombre" => "Huber",
    "edad" => 20,

    "contacto" => [
        "correo" => "huber@gmail.com",
        "telefono" => "3001234567"
    ]
];

echo "Nombre: " . $aprendizes["nombre"] . "<br>";
echo "Correo: " . $aprendizes["contacto"]["correo"];

echo "<h1>almacen</h1>";
$producto = [
    "nombre" => "Computador Lenovo",
    "precio" => 2500000,

    "fabricante" => [
        "nombre" => "Lenovo",
        "pais" => "China"
    ]
];

echo "Producto: " . $producto["nombre"] . "<br>";
echo "País de origen: " . $producto["fabricante"]["pais"];

?>
?>