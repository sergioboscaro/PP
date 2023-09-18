<?php
$conexiontabla = mysqli_connect('localhost','root','','datospozos');

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/main.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
            <table border="2" >
                <tr style="color: darkorange">
                        <td>POZO</td>
                        <td>DESCRIPCION</td>
                        <td>FLUIDO</td>
                        <td>SECO</td>
                        <td>GAS</td>
                </tr>
                
                <?php
                
                $sql = "SELECT * FROM datosfallas";
                $result = mysqli_query ($conexiontabla,$sql);
                while($mostrar = mysqli_fetch_array($result)){
                    
                ?>
                    
                <tr>
                    <td><?php echo $mostrar['Pozo'] ?></td>
                    <td><?php echo $mostrar['Descripcion'] ?></td>
                    <td><?php echo $mostrar['Fluido'] ?></td>
                    <td><?php echo $mostrar['Seco'] ?></td>
                    <td><?php echo $mostrar['Gas'] ?></td>
                </tr>    
                <?php    
                }
                ?>
                
            </table><br><br>
        
      
            
        <button onclick= "location.href='http://localhost/BASEFALLAS/index.html'">Volver pagina</button><br>
        
            
            
      
           
    </body>
</html>