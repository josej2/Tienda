
<?php

function editar_datos ($conexion, $datos, $id){
  # recibe en la variable $datos una cadena de valores a modificar.
  # incluye sugiriendo el campo de tabla y el valor asigado
  $consulta = $conexion->query("update usuarios set $datos where id = $id ");
  #no se sierra la consulta ya que esta funcion se llama solo una vez
  #seguido de una que actualiza y cierra
}
