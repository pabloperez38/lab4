<?php

class ControladorProductos{

static public function ctrMostrarProductos(){

    $tabla = "productos";
    $respuesta = ModeloProductos::mdlMostrarProductos($tabla);
    return $respuesta;
    }
}