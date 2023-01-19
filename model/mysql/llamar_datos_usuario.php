
<?php

function llamarDatos_login ($conexion, $correo){

  $consulta = $conexion->query("select * from usuarios where correo='$correo'");
  // array la consulta al ser recorrida
  $resultados = [];

  $posicionador = 0 ;

  //se inserta cada registro en el array $resultados[]
  while($fila = $consulta->fetch_assoc()){
    $resultados[$posicionador] = $fila;
    $posicionador ++;
  }
  mysqli_close($conexion);
  return $resultados;
}
