
<?php

function validarSesion(){
  //consulta el correo ingresado por el usuario
  $consulta = llamarDatos_login($GLOBALS['conexion'], $_POST['Correo']);
  //verifica existencia en los registros de mysql
  if (empty($consulta)) {
    echo "no esta registrado";

  }else {
    # debe traer solo un registro por lo tanto se toma el indece 0
    $consulta = $consulta[0];
    # se comparan las contraseñas
    if(compararContraseña($_POST['Contraseña'], $consulta['Contraseña'])) {
      # se defina la session aquí cuando se validan los dato
      $_SESSION['usuario'] = array();
      # se asignan los valores de sesion
      asignarValores_de_sesion($consulta);
      cargarPefil();

    }else{
      cargarLogin();
      echo "no coinciden las contraseñas";
    }
  }
}

// recibe una consulta general de datos de usuario en mysql para
// insertarlos en las variables de $_SESSION
function asignarValores_de_sesion ($consulta){
  $_SESSION['usuario']['nombres'] = $consulta['nombres'];
  $_SESSION['usuario']['id'] = $consulta['id'];
  $_SESSION['usuario']['apellidos'] = $consulta['apellidos'];
  $_SESSION['usuario']['correo'] = $consulta['correo'];
  $_SESSION['usuario']['direccion'] = $consulta['direccion'];
  $_SESSION['usuario']['barrio'] = $consulta['barrio'];
  $_SESSION['usuario']['ciudad'] = $consulta['ciudad'];
  $_SESSION['usuario']['telefono'] = $consulta['Telefono'];
  $_SESSION['usuario']['cedula'] = $consulta['cedula'];
  $_SESSION['usuario']['alpha'] = $consulta['Contraseña'];
  $_SESSION['usuario']['foto'] = $consulta['foto'];
}
