

<?php

function registrarUsuario(){
  # realiza un hash de la contraseña ingresara por el usuario
  $_POST['Contraseña'] = password_hash($_POST['Contraseña'], PASSWORD_DEFAULT, [15]);

  # contatena los valores para ser insertados, el orden aquí importa
  $valores ="'". $_POST['Nombres']."', '".$_POST['Apellidos']."','".$_POST['Correo']."',";
  $valores .="'". $_POST['Direccion']."', '".$_POST['Ciudad']."', '".$_POST['Barrio']."',";
  $valores .="'". $_POST['Contraseña']."',".$_POST['Telefono'].','.$_POST['Cedula'];

  registrar_Usuario_mysql( $GLOBALS['conexion'],  $valores );

  # después de registrar el nuevo usuario cargará el login
  cargarLogin();

}
