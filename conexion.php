<?php

$conexion = mysqli_connect('127.0.0.1','root','','datospozos')
        or die(mysql_error($mysqli));

function diferencia($conexion){
    if(isset($_POST['enviar'])){
        insertar($conexion);
    }
    
}

insertar($conexion);

function insertar ($conexion){
    
    
    $pozo = $_POST['nombre_pozo'];
    $descripcion = $_POST['descripcion'];
    $fluido = $_POST['fluido'];
    $seco = $_POST['seco'];
    $gas = $_POST['gas'];
    
    $consulta = "INSERT INTO datosfallas(Pozo,Descripcion,Fluido,Seco,Gas)
    VALUES ('$pozo','$descripcion','$fluido','$seco','$gas')";
    mysqli_query($conexion,$consulta);
    mysqli_close($conexion);
    
   
}

function cargartabla($conexion){
    $consulta = "SELECT * FROM datosfallas";
    $resultado = mysqli_query($conexion,$consulta);
    
    while($fila = mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>".$fila['nombre_pozo'];
        echo "<td>".$fila['descripcion'];
        echo "<td>".$fila['fluido'];
        echo "<td>".$fila['seco'];
        echo "<td>".$fila['gas'];
        echo "<tr>";
    }
    mysqli_close($conexion);
}
?>

