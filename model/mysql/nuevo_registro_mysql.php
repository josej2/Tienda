
<?php


function registrar_Usuario_mysql($conexion, $valores){


    if (!$conexion) {
      die("fallo en la conexion mysql" . mysqli_connect_error());
    }
    else{
      //campos donde se ingresaran valores
      $campos = 'nombres, apellidos, correo, direccion, ciudad, barrio, contraseña, telefono, cedula';
      //inserta los valores que recibe como parametros en los campos establecidos
      $resultado = $conexion->query("insert into usuarios ($campos) values ($valores)");
      mysqli_close($conexion);
    }
}



/*
if ($resultado) {
  var_dump($resultado);
  echo "todo bien";
}
else echo  mysqli_error($conexion);
*/
