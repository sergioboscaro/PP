<?php

include 'class/autocarga.php';

//$pozo = new datosdepozo(2);
//$pozo->mostrar();//

//$ddd = new basedatos('mysql', 'datospozos', '127.0.0.1', 'root', '');//
                
$bb = new datosdepozo(1);
$bb->Pozo = 'PR-921';
$bb->Descripcion = 'fallabomba';
$bb->Fluido = 55;
$bb->Seco = 4;
$bb->Gas = 30000;
$bb->guardar();

$lista = datosdepozo::listar();

echo '<pre>';
print_r($lista);
echo '<pre>';
