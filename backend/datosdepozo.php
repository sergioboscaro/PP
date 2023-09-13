<?php

include '../class/basedatos.php';
include '../class/datosdepozo.php';

$datosguardados = datosdepozo::listar();
include './view/listadodatos.html';