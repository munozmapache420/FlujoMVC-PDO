<?php

$rutas = [
    "GET" => [
    
        "/productos"        => ['productoController', 'index'],
        "/productos/crear"  => ['productoController', 'crear'],
       
        "/usuarios"         => ['UsuarioController', 'index'],
        "/usuarios/crear"   => ['UsuarioController', 'crear'],
    
        "/categorias"       => ['categoriaController', 'index'],
        "/categorias/crear" => ['categoriaController', 'crear'],
      
        "/clientes"         => ['clienteController', 'index'],
        "/clientes/crear"   => ['clienteController', 'crear'],

        "/ventas"           => ['ventaController', 'index'],
        "/ventas/crear"     => ['ventaController', 'crear'],
    ],
    "POST" => [
        "/productos/guardar"    => ['productoController', 'guardar'],
        "/productos/actualizar" => ['productoController', 'actualizar'],
        "/productos/eliminar"   => ['productoController', 'eliminar'],

        "/usuarios/guardar"     => ['UsuarioController', 'guardar'],
        "/usuarios/actualizar"  => ['UsuarioController', 'actualizar'],
        "/usuarios/eliminar"    => ['UsuarioController', 'eliminar'],

        "/categorias/guardar"    => ['categoriaController', 'guardar'],
        "/categorias/actualizar" => ['categoriaController', 'actualizar'],
        "/categorias/eliminar"   => ['categoriaController', 'eliminar'],

        "/clientes/guardar"     => ['clienteController', 'guardar'],
        "/clientes/actualizar"  => ['clienteController', 'actualizar'],
        "/clientes/eliminar"    => ['clienteController', 'eliminar'],

        "/ventas/guardar"       => ['ventaController', 'guardar'],
        "/ventas/actualizar"    => ['ventaController', 'actualizar'],
        "/ventas/eliminar"      => ['ventaController', 'eliminar'],
    ]
];

return $rutas;
