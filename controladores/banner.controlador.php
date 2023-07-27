<?php

Class ControladorBanner{

      /*==================================
    mostrar banner
    ==================================*/
    static public function ctrMostrarBanner(){
    $tabla= "banner";
    $respuesta =    ModeloBanner::mdlMostrarBanner($tabla);
    return $respuesta;

    }

}