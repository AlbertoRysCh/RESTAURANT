<?php
require_once 'models/Carta.php';
class cartaControler{
  public function carta(){
      require_once('./view/includes/cabecera.php');
      require_once('./view/paginas/config/carta/carta.php');
      require_once('./view/includes/pie.php');
  }
  public function consulta(){
    require_once('./view/includes/cabecera.php');
    require_once('./view/paginas/consulta.php');
    require_once('./view/includes/pie.php');
}
public function guardarCarta($datos){
  $mesa = new Carta();
  $mesa->guardarCarta($datos);
  // session_destroy();
    
}
public function updateCarta($datos,$value,$id){
  $mesa = new Carta();
  $mesa->updateCarta($datos,$value,$id);
}

public function eliminarCarta($datos,$value){
  $mesa = new Carta();
  $mesa->eliminarCarta($datos,$value);
  // session_destroy();
    
}
public function consultaCarta(){
  $resultado = new Carta();
  return $resultado->consultaCarta();   
}
}
?>