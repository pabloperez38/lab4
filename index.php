<?php

require_once 'controladores/controlador.plantilla.php';

require_once 'controladores/controlador.productos.php';
require_once 'modelos/modelo.productos.php';

$plantilla = new ControladorPlantilla();
$plantilla -> ctrMostrarPlantilla();