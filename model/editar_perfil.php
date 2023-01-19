
<?php

function editar_perfil(){
  /*
  en el apartado de editar contraseña no se refleja la contraseña actual
  por lo tanto el campo (contrasña) del arreglo formado por el formulario
  llegara vacio en el post en caso de que el usuario no realice un cambio,
  así surge esta condicion
  */

  #dado el caso que no haya un cambio de contraseña entonces se mantedra la actual
  #dado el caso que haya un cambio de contraseña entonces se convierte en hash y se guarda el campo del post designado para la misma
  $_POST['contraseña'] = (empty($_POST['contraseña'])) ? $_SESSION['usuario']['alpha'] : password_hash($_POST['contraseña'], PASSWORD_DEFAULT, [15]);

  //recibe los datos del archivo seleccionado
  $foto = $_FILES['foto'];

  $nombre_tmp = $foto['tmp_name'];
  $file_imagen = $foto['name'];
  $tipo_imagen = $foto['type'];

  //valida que se haya subido una foto para alterar el campo foto de mysql
  if ( $foto['tmp_name'] != "" && $foto['name'] != "" && $foto['type'] != "" ) {
    //valida el tipo de imagenes que puede recibir
    if ( strpos($tipo_imagen, "jpg") || strpos($tipo_imagen, "png") || strpos($tipo_imagen, "jpeg") ) {
      //se indica el directorio del servidor donde se guardara la imagen
      $destino = "model/base_de_datos_imagenes/fotos_usuarios/$file_imagen";
      //se valida la descarga o el traspaso de la imagen en el directorio
      if( move_uploaded_file($nombre_tmp, $destino)){
        //se inserta la direccion y nombre de la imagen en el mysql
        insertarImagen($GLOBALS['conexion'], $destino, $_SESSION['usuario']['id']);
      }else echo "no se ha subido el archivof";

    }else echo "formato de imagen no aceptado";
  }


  #se arreglan los datos para que queden así. ( nombre = 'ejempo', telefono = 111111111 )
  $datos = "nombres ='".$_POST['nombres']."', apellidos ='".$_POST['apellidos'];
  $datos .= "', correo ='".$_POST['correo']."', direccion ='".$_POST['direccion'];
  $datos .= "', barrio ='".$_POST['barrio']."', ciudad ='".$_POST['ciudad'];
  $datos .= "', telefono =".$_POST['telefono'].", cedula =".$_POST['cedula'];
  $datos .= ", contraseña ='".$_POST['contraseña']."'";

  // se invoca funcion que recibe una conexion mysql y un id del registro a modificar
  editar_datos($GLOBALS['conexion'], $datos, $_SESSION['usuario']['id']);
  // realiza una consulta de todos los datos de usuario de la sesion actual, para actualizarlos
  $consulta = llamarDatos_login($GLOBALS['conexion'], $_POST['correo']);
  asignarValores_de_sesion($consulta[0]);

  cargarPefil();
}
