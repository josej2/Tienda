
<?php

  $nombre_completo = $_SESSION['usuario']['nombres']." ".$_SESSION['usuario']['apellidos'];
  $correo = $_SESSION['usuario']['correo'];
  $nombres = $_SESSION['usuario']['nombres'];
  $apellidos = $_SESSION['usuario']['apellidos'];
  $direccion = $_SESSION['usuario']['direccion'];
  $barrio = $_SESSION['usuario']['barrio'];
  $ciudad = $_SESSION['usuario']['ciudad'];
  $telefono = $_SESSION['usuario']['telefono'];
  $cedula = $_SESSION['usuario']['cedula'];
  $foto = $_SESSION['usuario']['foto'];

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./public/styles.css">
    <title>Tienda</title>
  </head>
  <body>

    <div class="cuerpo_menu cuerpo_registro">
      <header class="cabecera cabecer_perfil">
        <h1>TIENDA</h1>
        <div class="foto_perfil">

          <?php
            if($foto != "" && $foto !=null ){
              echo "<img class='foto' src='$foto'>";
            }
            else echo "<img class='foto' src='model/base_de_datos_imagenes/sin_foto.png'>";

          ?>

          <button id="abrir_menu"class="opciones"></button>
        </div>
      </header>

      <div class="contenedor_perfil">

        <div class="menu_de_opciones" id="menu_de_opciones">
          <button id="abri_modal_editar">Editar Perfil </button>
          <form class="" action="/cerrar_sesion" method="post">
                <button>cerrarSesion</button>
          </form>
        </div>

        <div class="perfil" id="perfil">

          <?php
            echo "<h2> $nombre_completo</h2>"; ?>
            <hr id="separador_nombre_completo">

          <?php
            echo "<div class='informacion' > ";
            echo "<label><h4>Correo: </h4>$correo</label>";
            echo "<label><h4>Nombres: </h4>$nombres</label>";
            echo "<label><h4>Apellidos: </h4>$apellidos</label>";
            echo "</div>";

            echo "<hr>";

            echo "<div class='informacion' > ";
            echo "<label><h4>Direccion: </h4>$direccion</label>";
            echo "<label><h4>Barrio: </h4>$barrio</label>";
            echo "<label><h4>Ciudad: </h4>$ciudad</label>";
            echo "</div>";
            echo "<hr>";

            echo "<div class='informacion' > ";
            echo "<label><h4>Telefono: </h4>$telefono</label>";
            echo "<label><h4>Cedula: </h4>$cedula</label>";
            echo "</div>";
            echo "<hr>";
          ?>
        </div>
        <div class="caja_de_editar perfil" id="caja_de_editar">
            <hr id="separador_nombre_completo">
            <form action="/editar_perfil" method="post" enctype="multipart/form-data" >
          <?php
            echo "<div class='informacion' > ";
            echo "<label><h4>Correo: </h4> <input type='text' name='correo' value='$correo'></label>";
            echo "<label><h4>Nombres: </h4>   <input type='text' name='nombres' value='$nombres'></label>";
            echo "<label><h4>Apellidos: </h4>  <input type='text' name='apellidos' value='$apellidos'></label>";
            echo "</div>";

            echo "<hr>";

            echo "<div class='informacion' > ";
            echo "<label><h4>Direccion: </h4><input type='text' name='direccion' value='$direccion'></label>";
            echo "<label><h4>Barrio: </h4><input type='text' name='barrio' value='$barrio'></label>";
            echo "<label><h4>Ciudad: </h4><input type='text' name='ciudad' value='$ciudad'></label>";
            echo "</div>";
            echo "<hr>";

            echo "<div class='informacion' > ";
            echo "<label><h4>Telefono: </h4><input type='text' name='telefono' value='$telefono'></label>";
            echo "<label><h4>Cedula: </h4><input type='text' name='cedula' value='$cedula'></label>";
            echo "<label><h4>contraseña: </h4><input type='password' name='contraseña' value=''></label>";
            echo "</div>";
            echo "<hr>";
            echo "<div class='informacion' > ";
            echo "<label><h4>foto de perfil: </h4><input type='file' name='foto' value='foto'></label>";
            echo "</div>";
          ?>

            <button>Guardar cambios</button>
          </form>
          <button id="cancelar">cancelar</button>
        </div>

      </div>
    </div>


    <script type="text/javascript">
      //let boton = document.getElmentById('abrir_menu');

        let click = 1;
      abrir_menu.addEventListener('click', () =>{

        if (click==0) {
          menu_de_opciones.style.display = "none";

          click = 1;
        }else if (click==1){
          menu_de_opciones.style.display = "grid";

          click = 0;
        }
      })

        let click2 = 1;

      abri_modal_editar.addEventListener('click', ()=>{



        if (click2==0) {
          caja_de_editar.style.display = "none";
          perfil.style.display = "";
          click2 = 1;
        }else if (click2==1){
        caja_de_editar.style.display = "grid";
        perfil.style.display = "none"
          click2 = 0;
        }
      })


      cancelar.addEventListener('click', ()=>{

        if (click2==0) {
          caja_de_editar.style.display = "none";
          perfil.style.display = "";
          click2 = 1;
        }else if (click2==1){
        caja_de_editar.style.display = "grid";
        perfil.style.display = "none"
          click2 = 0;
        }
      })

    </script>




  </body>
</html>
