
<?php

function cerrarSesion (){
  ($_SESSION['usuario']) ? eliminar_seccion() : anunciar_inexistencia()  ;
}

function eliminar_seccion(){
  //elimina del array $_SESSION el objeto o array llamado usuario
  unset($_SESSION['usuario']);
  cargarLogin();
}

function anunciar_inexistencia (){
  cargarLogin();
  echo "No Existe una sesion para ser cerrada";
}
