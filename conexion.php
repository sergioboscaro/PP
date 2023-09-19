<?php

$conexion = mysqli_connect('127.0.0.1','root','','datospozos')
        or die(mysql_error($mysqli));

diferencia($conexion);

function diferencia($conexion){
    
    if(isset($_POST['enviar'])){
        insertar($conexion);
    }
    if(isset($_POST['eliminar'])){
        eliminar($conexion);
    }
 
}

function insertar ($conexion){
    
    
    $pozo = $_POST['nombre_pozo'];
    $descripcion = $_POST['descripcion'];
    $fluido = $_POST['fluido'];
    $seco = $_POST['seco'];
    $gas = $_POST['gas'];
    $sea = $_POST['seas'];
    $sea1= $_POST['seas1'];        
    $fecha = $_POST['fecha'];
    
    $consulta = "INSERT INTO datosfallas(Pozo,Descripcion,Fluido,Seco,Gas,SeaSacado,SeaBajado,Fecha)
    VALUES ('$pozo','$descripcion','$fluido','$seco','$gas','$sea','$sea1','$fecha')";
    mysqli_query($conexion,$consulta);
    mysqli_close($conexion);
    header("Location: index.html");
    
   
}

function eliminar ($conexion){
    
    
    $pozo = $_POST['nombre_pozo'];
    
    
    $consulta = "DELETE FROM datosfallas WHERE Pozo='$pozo'";
    mysqli_query($conexion,$consulta);
    mysqli_close($conexion);
    header("Location: index.html");
    
   
}

?>

