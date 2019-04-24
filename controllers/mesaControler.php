<?php
require_once 'models/Mesa.php';
class mesaControler {
    public function punto_pedido(){
        // require_once('./view/includes/cabecera.php');
        require_once('./view/paginas/punto_pedido.php');
        require_once('./view/includes/pie.php');
    }
    public function mesa(){
        require_once('./view/includes/cabecera.php');
        require_once('./view/paginas/config/mesa/mesa.php');
        require_once('./view/includes/pie.php');
    }
    public function guardarMesa($datos){
        $mesa = new Mesa();
        $mesa->guardarMesa($datos);
        // session_destroy();
          
      }
      public function updateMesa($datos,$value,$id){
        $mesa = new Mesa();
        $mesa->updateMesa($datos,$value,$id);
      }
      
      public function eliminarMesa($datos,$value){
        $mesa = new Mesa();
        $mesa->eliminarMesa($datos,$value);
        // session_destroy();
          
      }
      public function consultaMesa(){
        $resultado = new Mesa();
        return $resultado->consultaMesa();   
      }
}