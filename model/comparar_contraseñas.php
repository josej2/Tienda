

<?php

//compara dos contraseñas, una hasheada y la otra en String
function compararContraseña($contraseña, $hash){
  
  return password_verify($contraseña, $hash);
}
