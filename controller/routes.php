

<?php

//requiere un enrutador
require('libs/router.php');
//requerimiento de funciones y procesos a hacer para cada ruta
require('model/index.php');


/*
  las siguientes rutas destinadas para cada metodo Yaf_Request_Http
  tienen asociadas una funcion que sirve como middleware proceso o
  funcion propia de la ruta o direccion
*/


/***********************
        RUTAS GET
    *******************/
$router->get('/', 'cargarMenu');
$router->get('/registro', 'cargarRegistro');
$router->get('/login', 'cargarLogin');
$router->get('/perfil', 'cargarPefil');


/***********************
        RUTAS POST
    *******************/
$router->post('/','cargarMenu');
$router->post('/registro','registrarUsuario');
$router->post('/login', 'validarSesion');
$router->post('/cerrar_sesion','cerrarSesion');
$router->post('/editar_perfil', 'editar_perfil');
