

<?php
//se requieren las rutas creadas por el desarrollador
require('routes.php');


/************************************************************\
*                 CONTROLADOR DE RUTAS                       *
\************************************************************/


###############################################################
// trae el metodo http que el cliente solicita al servidor
$metodo_solicitado = $_SERVER['REQUEST_METHOD'];
// trae la url que el cliente solicita al servidor
$uri = $_SERVER['REQUEST_URI'];
###############################################################



if ($metodo_solicitado==="GET") {#comprueba metodo es get
  comprovarRutaexistente($router->array_peticiones_get, $uri);

}elseif ($metodo_solicitado==="POST") {#comprueba metodo es post
  comprovarRutaexistente($router->array_peticiones_post, $uri);

}elseif ($metodo_solicitado==="DELETE"){#comprueba metodo es delete
  comprovarRutaexistente($router->array_peticiones_delete, $uri);

}elseif ($metodo_solicitado==="UPDATE") {#comprueba metodo es update
  comprovarRutaexistente($router->array_peticiones_update, $uri);

}else {// determina si el metodo no es valida
echo $metodo_solicitado. "No aplica el metodo";
}



/*
comprueba que la ruta ingresada por
el usuario exista en el servidor        */
function comprovarRutaexistente ($array_de_rutas, $uri) {
    if( array_key_exists($uri, $array_de_rutas)){
        $array_de_rutas[$uri]();
    }
    else echo "no existe la ruta <br/> ".$uri;
}
