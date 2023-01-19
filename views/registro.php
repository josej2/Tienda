<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./public/styles.css">
    <title>Tienda</title>
  </head>
  <body>

    <div class="cuerpo_menu cuerpo_registro">

      <header class="cabecera">
        <h1>TIENDA</h1>
      </header>

      <div class="contenedor_registro">
        <div class="caja_de_registro">
            <form class="registro" method="post" action="/registro">
              <input type="text" placeholder="Nombres" name="Nombres">
              <input type="text" placeholder="Apellidos" name="Apellidos">
              <input type="text" placeholder="Correo" name="Correo">
              <input type="text" placeholder="Direccion" name="Direccion">
              <input type="text" placeholder="Ciudad" name="Ciudad">
              <input type="text" placeholder="Barrio" name="Barrio">
              <input type="password" placeholder="Contraseña" name="Contraseña">
              <input type="text" placeholder="Telefono" name="Telefono">
              <input type="text" placeholder="Cedula" name="Cedula">
              <button>REGISTRO</button>
              <a href="/login">Login</a>
            </form>
        </div>
      </div>

    </div>
  </body>
</html>
