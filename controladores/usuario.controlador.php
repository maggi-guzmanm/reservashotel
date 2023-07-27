<?php
Class ControladorUsuarios{

	/*=============================================
	REGISTRO DE USUARIO
	=============================================*/

	public function ctrRegistroUsuario(){

		if(isset($_POST["registroNombre"])){

			if(preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["registroNombre"]) &&
			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["registroEmail"]) &&
			    preg_match('/^[a-zA-Z0-9]+$/', $_POST["registroPassword"])
				){

				$encriptarPassword = crypt($_POST["registroPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				$encriptarEmail = md5($_POST["registroEmail"]);

				$tabla = "usuarios";

				$datos = array( "nombre" => $_POST["registroNombre"],
								"password" => $encriptarPassword,
								"email"=> $_POST["registroEmail"],
								"foto" => "",
								"modo" => "directo",
								"verificacion" => 0,
								"email_encriptado" => $encriptarEmail);

				$respuesta = ModeloUsuarios::mdlRegistroUsuario($tabla, $datos);
				if($respuesta == "ok"){
					echo "Usuario registrado con exito";
					}
				}
			}
		}
	}