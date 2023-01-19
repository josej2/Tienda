
<?php

$GLOBALS['server'] = "localhost";
$GLOBALS['database'] = "Tienda";
$GLOBALS['username'] = "root";
$GLOBALS['password'] = "Somalie19*";

function conectar_Mysql (){
  #genera una conexion con mysql
  $conexion = mysqli_connect($GLOBALS['server'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['database']);

  if (!$conexion) { #Busca la existencia de errores de conexion con mysql
    die("Error de conexion mysql ".mysqli_connect_error());
  }else{ #En caso de exito en la conexion con mysql la retornara
    return $conexion;
  }
}
