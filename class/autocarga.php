<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class autocarga {
    
    static public function cargar_clase ($clase) {
        $arrayClase = array();
        $arrayClase['basedatos'] = 'class/basedatos.php';
        $arrayClase['datosdepozo'] = 'class/datosdepozo.php';
        
        if(isset ($arrayClase[$clase])){
            if(file_exists($arrayClase[$clase])){
            include $arrayClase[$clase];
            }
            else{
            throw new Exception("Archivo de clase no encontrado [{$arrayClase[$clase]}]");
            }
        }
    }
    
}

spl_autoload_register('autocarga::cargar_clase');