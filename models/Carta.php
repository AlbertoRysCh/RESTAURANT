<?php
require_once 'ModeloBase.php';
class Carta extends ModeloBase{
    public $id_carta;
    public $nombre;
    public $precio;
    public function __construct(){
        parent::__construct();
    }
    public function getIdCarta(){
        return $this->id_carta;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    public function getPrecio(){
        return $this->precio;
    }
    public  function setId($id_carta){
        $this->id_carta = $id_carta;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setPrecio($precio){
        $this->precio = $precio;
    }
   
    function guardarCarta($datos){
        $db = new ModeloBase();
        $insertar = $db->insertar('t_carta', $datos);
        if($insertar == true){
            $_SESSION['mensaje'] = 'Registro exitoso';
        }
     }
     function updateCarta($datos,$value,$id){
         $db = new ModeloBase();
         $insertar = $db->update('t_carta',$datos,$value,$id);
         if($insertar == true){
             $_SESSION['mensaje'] = 'editado exitoso';
         }
      }
     function eliminarCarta($datos,$value){
         $db = new ModeloBase();
         $insertar = $db->delete('t_carta', $datos,$value);
         if($insertar == true){
             $_SESSION['mensaje'] = 'Eliminado correctamente';
         }
      }
     function consultaCarta(){
         $db = new ModeloBase();
         $query = "SELECT * FROM t_carta";
         $resultado = $db->obtenerTodos($query);
         return $resultado;
     }
}
?>