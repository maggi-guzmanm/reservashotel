<?php
Class ControladorPlanes{

       /*==================================
    mostrar planes
    ==================================*/
    static public function ctrMostrarPlanes(){
        $tabla= "planes";
        $respuesta =    ModeloPlanes::mdlMostrarPlanes($tabla);
        return $respuesta;
    
        }
    
    
}