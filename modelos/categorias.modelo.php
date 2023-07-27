<?php

require_once "conexion.php";

Class ModeloCategorias{

	/*=============================================
	mostrar Categorias
	=============================================*/
	
	static public function mdlMostrarCategorias($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id DESC LIMIT 3");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;

	}
}