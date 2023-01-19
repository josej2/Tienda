
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
        <div class="caja_de_registro caja_login">
            <form class="registro" method="post" action="/login">
              <input type="text" placeholder="Correo" name="Correo">
              <input type="password" placeholder="Contraseña" name="Contraseña">
              <button>Ingresar</button>

            </form>
            <a href="/registro">Registrarse</a>
        </div>
      </div>

    </div>
  </body>
</html>
