<?php


class  basedatos{ 
    private $gbd;   
    
    function __construct($driver, $basedatos, $host, $user, $pass) {
            $conection = $driver.":dbname=".$basedatos.";host=$host";
            $this->gbd = new PDO($conection, $user, $pass);
            if (!$this->gbd){
                    throw new Exception("No se ha podido realizar la conexión");
            }
        }        
    
 
    function select($tabla, $filtros = null, $arr_prepare = null, $orden = null, $limit = null){
            $sql = "SELECT * FROM ".$tabla;
            if ($filtros != null){
                $sql .= " WHERE ".$filtros;
        }
        if ($orden != null){
                $sql .= " ORDER BY ".$orden;
        }
        if ($limit != null){
                $sql .= " LIMIT ".$limit;
        }

        $resourse = $this->gbd->prepare($sql);
        $resourse->execute($arr_prepare);
        if ($resourse){
                return $resourse->fetchAll(PDO::FETCH_ASSOC);
        } else {
                throw new Exception ("No se pudo realizar la consulta de selección");
        }
    }  
    
    
    function delete($tabla, $filtros = null, $arr_prepare = null){
        
        $sql = "DELETE FROM ".$tabla;
        if ($filtros != null){
            $sql .= " WHERE ".$filtros;
        }
        $resourse = $this->gbd->prepare($sql);
        $resourse->execute($arr_prepare);
        var_dump( $resourse);
        if ($resourse){
                return $resourse->fetchAll(PDO::FETCH_ASSOC);
        } else {
                throw new Exception ("No se pudo realizar la consulta de selección");
        }
}   



    
    function insert($tabla, $campos, $valores, $arr_prepare = null){
        $sql = "INSERT INTO ".$tabla." (".$campos.") VALUES ($valores)";
        $resourse = $this->gbd->prepare($sql);        
        if ($resourse->execute($arr_prepare)){
            return $this->gbd->lastInsertId();
        } else {
            throw new Exception ("No se pudo realizar la consulta de seleccion");
        }
    }   
    
    
    function update($tabla, $campos, $filtros, $arr_prepare = null){
         
         $sql = "UPDATE " . $tabla . " SET " . $campos . " WHERE ". $filtros;
         $resourse = $this->gbd->prepare($sql);
         if( $resourse->execute($arr_prepare)){
               return true;
         } else {
              throw new Exception ("No se pudo realizar la consulta de selección");
         }
    }   
}
