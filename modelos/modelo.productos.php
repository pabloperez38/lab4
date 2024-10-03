<?php

require_once 'conexion.php';

class ModeloProductos{

    static public function mdlMostrarProductos($tabla)
    {
        try {
            $productos = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $productos->execute();
            return $productos->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $e) {
            return "Error: " .$e ->getMessage();
        }

    }
    
}