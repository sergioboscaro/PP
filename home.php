<?php

include './class/basedatos.php';
include './class/datosdepozo.php';


                
$bb = new datosdepozo();
$bb->Pozo = 'PR-32';
$bb->guardar();

$lista = datosdepozo::listar();

echo '<pre>';
print_r($lista);
echo '<pre>';
