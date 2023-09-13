<?php

class datosdepozo{
   
    private $id;
    public $Pozo;
    public $Descripcion;
    public $Fluido;
    public $Seco;
    public $Gas;
    private $exists = false;
            
    function __construct($id = null){
        if($id != null){
        $db = self::conexion();
        $resp = $db->select("datosfallas", "id= ?", array($id));

           if(isset($resp [0]['id'])){
              $this->id = $resp  [0]['id'];
              $this->Pozo = $resp[0]['Pozo'];
              $this->Descripcion = $resp[0]['Descripcion'];
              $this->Fluido = $resp[0]['Fluido'];
              $this->Seco = $resp[0]['Seco'];
              $this->Gas = $resp[0]['Gas'];
              $this->exists = true;
            }
        }    
    }

    static private function conexion(){
        return new basedatos("mysql", "datospozos", "127.0.0.1", "root", "");
    }
 
    public function mostrar(){
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }
    
    public function guardar(){
        if($this->exists){
            return $this->insertar();
        }
        else{
            return $this->actualizar();
        }
        
    }
    
    public function eliminar() {
        $db = self::conexion();
        return $db->delete("datosfallas", "id = ".$this->id);
        
    }
    
    private function insertar() {
        $db = self::conexion(); 
        $resp = $db->insert ("datosfallas","id,Pozo,Descripcion,Fluido,Seco,Gas","?,?,?,?,?,?", array($this->Pozo, $this->id, $this->Descripcion, $this->Fluido, $this->Seco, $this->Gas));
        if($resp){
            $this->id=$resp;
            $this->exists = true;
            return true;
        }else {
            return false;
        }
    }
    
    private function actualizar() {
        $db = self::conexion();
        return $db->update("datosfallas", "id = ?","Pozo = ?","Descripcion = ?","Fluido = ?","Seco = ?","Gas = ?", array( $this->Pozo, $this->id, $this->Descripcion, $this->Fluido, $this->Seco, $this->Gas));
    
    }

    static public function listar(){
        $db = self::conexion();
        return $db->select("datosfallas"); 
    }
    
}