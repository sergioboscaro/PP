<?php
$conexiontabla = mysqli_connect('localhost','root','','datospozos');

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="asset/css/estilopantalla.css" rel="stylesheet" type="text/css">
    </head>
    
    <body style="background-color: lightgray">
            <table border="2" >
                <tr style="color: blue">
                        <td>POZO</td>
                        <td>DESCRIPCION</td>
                        <td>FLUIDO</td>
                        <td>SECO</td>
                        <td>GAS</td>
                        <td>SEASACADO</td>
                        <td>SEABAJADO</td>
                </tr>
                
                <?php
                
                $sql = "SELECT * FROM datosfallas ORDER BY Pozo";
                $result = mysqli_query ($conexiontabla,$sql);
                while($mostrar = mysqli_fetch_array($result)){
                    
                ?>
                    
                <tr>
                    <td><?php echo $mostrar['Pozo'] ?></td>
                    <td><?php echo $mostrar['Descripcion'] ?></td>
                    <td><?php echo $mostrar['Fluido'] ?></td>
                    <td><?php echo $mostrar['Seco'] ?></td>
                    <td><?php echo $mostrar['Gas'] ?></td>
                    <td><?php echo $mostrar['SeaSacado'] ?></td>
                    <td><?php echo $mostrar['SeaBajado'] ?></td>
                </tr>    
                <?php    
                }
                ?>
                
            </table><br><br>
        
      
            
        <button class="btn" onclick= "location.href='http://localhost/BASEFALLAS/index.html'">Volver pagina</button><br>
        
            
            
      
           
    </body>
</html>