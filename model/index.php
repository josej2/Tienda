
<?php
                    /*************************************************
                          FUNCIONES PARA RUTAS DEL SERVIDOR
      ********************************************************/

/**************************                    *
*  recursos que ejecutan procesos especificos  *
*     y apoyan a los procesos generales        *
*         solicitados por las rutas            *
*           ************************************/

require('mysql/conexion_mysql.php');// provee la conexion con mysql
require('mysql/llamar_datos_usuario.php');// provee todos los datos de un usuario desde mysql
require('mysql/editar_datos_usuario_mysql.php');// provee una funcion para editar datos de usuario de mysql
require('vistas_y_middlewares.php'); //provee metodos para llamar vistas
require('comparar_contraseñas.php');//compara dos contraseñas, un en string y otra en hash
require('mysql/agregar_ruta_foto.php'); //agrega la ruta de foto de perfil en la base de datos
require('mysql/nuevo_registro_mysql.php'); //genera un nuevo registro en mysql tabla usuarios

/***************************                 *
*  recursos que ejecutan procesos generales  *
*           solicitados por las rutas        *
*             ********************************/
require('validar_sesion.php');
require('cerrar_sesion.php');
require('editar_perfil.php');
require('registro.php');

$GLOBALS['conexion'] = conectar_Mysql();//guarda la conexion mysql de forma global
session_start();
