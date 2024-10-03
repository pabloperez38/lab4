<?php

try {
    
class Conexion{

	static public function conectar(){	

		$link = new PDO("mysql:host=localhost;dbname=tp13", "root", "");
		$link->exec("set names utf8");
		return $link;
	}
}
 
} catch (Exception $e) {
  return "Error: " .$e ->getMessage();
}