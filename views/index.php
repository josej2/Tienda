<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./public/styles.css">
    <title>Tienda</title>
  </head>
  <body>

    <div class="cuerpo_menu">

      <header class="cabecera">
        <h1>TIENDA</h1>
        <input type="text">
        <div class="foto_perfil foto_perfil_menu">
          <img class="foto " src="https://vader.news/__export/1646342455651/sites/gadgets/img/2022/03/03/vikingos1_valhalla_por_este_motivo_ragnar_lothbrok_sigue_siendo_un_guerrero_importante.jpg_1774227709.jpg">
          <button id="abrir_menu"class="opciones"></button>
        </div>
      </header>

      <div class="">

        <div class="menu_de_opciones" id="menu_de_opciones">
          <button id="abri_modal_editar">Editar Perfil </button>
          <form class="" action="/cerrar_sesion" method="post">
                <button>cerrarSesion</button>
          </form>
        </div>

        <div class="contenedor_carrito">
          <div class="">
            <img class="carrito" src="./public/imagenes/carrito.jpg" alt="">
            <button class="boton_carrito"></button>
          </div>
        </div>
        <div class="">

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
