
<?php


function insertarImagen($conexion, $direccion, $id){
  //da una direccion de donde se guardo la imagen en el servidor para el campo foto de la tabla usuarios
  $resultado = $conexion->query("update usuarios set foto='$direccion' where id =$id");
  mysqli_close($conexion);
  return $resultado;
}


#NOTA
/**********************
  se debe corregir campo
  fotos de mysql
************************/
