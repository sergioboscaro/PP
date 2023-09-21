<?php
$conexiontabla = mysqli_connect('localhost','root','','datospozos');

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="asset/css/estilopantalla.css" rel="stylesheet" type="text/css">
    
    <style>
        table{
            border-style: solid;
            width:100%
        }
        th, td{
            text-align: center;
            padding: 8px;
        }
        tr:nth-child(even){background-color: #04AA6D}
        th{background-color: #04AA6D;}
        
    </style>
    
    </head>
    <body>
       
            
        
        <h1>TABLA DATOS POZOS</h1><br>
        
            <table>
                <tr>
                        <td>ID</td>                    
                        <td>POZO</td>
                        <td>DESCRIPCION</td>
                        <td>FLUIDO</td>
                        <td>SECO</td>
                        <td>GAS</td>
                        <td>SEASACADO</td>
                        <td>SEABAJADO</td>
                        <td>FECHA</td>
                </tr>
                
                <?php
                
                $sql = "SELECT * FROM datosfallas ORDER BY id ASC";
                $result = mysqli_query ($conexiontabla,$sql);
                while($mostrar = mysqli_fetch_array($result)){
                    
                ?>
                    
                <tr>
                    <td><?php echo $mostrar['id'] ?></td>
                    <td><?php echo $mostrar['Pozo'] ?></td>
                    <td><?php echo $mostrar['Descripcion'] ?></td>
                    <td><?php echo $mostrar['Fluido'] ?></td>
                    <td><?php echo $mostrar['Seco'] ?></td>
                    <td><?php echo $mostrar['Gas'] ?></td>
                    <td><?php echo $mostrar['SeaSacado'] ?></td>
                    <td><?php echo $mostrar['SeaBajado'] ?></td>
                    <td><?php echo $mostrar['Fecha'] ?></td>
                </tr>    
                <?php    
                }
                ?>
                
            </table><br><br>
        
      
            
        <button onclick= "location.href='http://localhost/BASEFALLAS/index.html'">Volver pagina</button><br>
        
            
            
      
           
    </body>
</html>