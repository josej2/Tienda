
<?php

/****************         *
*    funciones que cargan *
*    archivos o vistas    *
*       *******************/

function cargarMenu() {
  //carga menu de compras
  require './views/index.php';
}

function cargarRegistro(){
  #dado el caso que no haya una sesion redireccionara hacia el registro
  #dado el caso que exita una sesion  redireccionara hacia el perfil
  (empty($_SESSION))? require './views/registro.php' : cargarPefil();

}

function cargarLogin(){
  #dado el caso que no haya una sesion redireccionara hacia el login
  #dado el caso que exita una sesion  redireccionara hacia el perfil
  (empty($_SESSION)) ? require('views/login.php') : cargarPefil();
}

function cargarPefil(){
  #dado el caso que no haya una sesion redireccionara hacia el login
  #dado el caso que exita una sesion  redireccionara hacia el perfil
  ( empty($_SESSION) ) ? cargarLogin() : require 'views/perfil.php';
}
