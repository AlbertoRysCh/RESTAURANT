<?php
require_once 'ModeloBase.php';
class Mesa extends ModeloBase{
    public $id_mesa;
    public $mesa;
    public function __construct(){
        parent::__construct();
    }
    public function getIdMesa(){
        return $this->id_mesa;
    }
    
    public function getMesa(){
        return $this->mesa;
    }
    public  function setId($id_mesa){
        $this->id_mesa = $id_mesa;
    }
    public function setNombre($mesa){
        $this->mesa = $mesa;
    }

    function guardarMesa($datos){
       $db = new ModeloBase();
       $insertar = $db->insertar('t_mesa', $datos);
       if($insertar == true){
           $_SESSION['mensaje'] = 'Registro exitoso';
       }
    }
    function updateMesa($datos,$value,$id){
        $db = new ModeloBase();
        $insertar = $db->update('t_mesa',$datos,$value,$id);
        if($insertar == true){
            $_SESSION['mensaje'] = 'editado exitoso';
        }
     }
    function eliminarMesa($datos,$value){
        $db = new ModeloBase();
        $insertar = $db->delete('t_mesa', $datos,$value);
        if($insertar == true){
            $_SESSION['mensaje'] = 'Eliminado correctamente';
        }
     }
    function consultaMesa(){
        $db = new ModeloBase();
		$query = "SELECT * FROM t_mesa";
		$resultado = $db->obtenerTodos($query);
        return $resultado;
    }
}
?>