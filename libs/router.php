

<?php

class Router{
  /*
  En los siguientes arrays se guardan las rutas del servidor
  y se clasifica por solicitudes http
  */
  public $array_peticiones_get = array();
  public $array_peticiones_post = array();
  public $array_peticiones_delete = array();
  public $array_peticiones_update = array();


  function __construct(){
    $this->array_peticiones_post;
    $this->array_peticiones_get;
  }

      /***********************************************\
                      METODOS DE CLASE
                      protocolos http
      \***********************************************/

  public function get ($ruta, $callback){
    # se agrega la ruta al respectivo array de metodo http
    # el callback sirve como middleware y funcion a ejecutar para cada ruta
    $this->array_peticiones_get[$ruta] = $callback;
  }

  public function post ($ruta, $callback){
    # se agrega la ruta al respectivo array de metodo http
    # el callback sirve como middleware y funcion a ejecutar para cada ruta
    $this->array_peticiones_post[$ruta] = $callback;
  }

  public function delete ($ruta, $callback){
    # se agrega la ruta al respectivo array de metodo http
    # el callback sirve como middleware y funcion a ejecutar para cada ruta
    $this->array_peticiones_delete[$ruta] = $callback;
  }

  public function update ($ruta, $callback){
    # se agrega la ruta al respectivo array de metodo http
    # el callback sirve como middleware y funcion a ejecutar para cada ruta
    $this->array_peticiones_update[$ruta] = $callback;
  }
}

//objeto de tipo router el cual administrara las rutas cada que se llame el servidor
$router = new Router();



//$callback1() ? $callback2() : null;
