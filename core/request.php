<?php
require_once 'config.php';

$page = $_GET['page'];
if(!empty($page)){
    $data= array(
      'carta' => array('model'=>'Carta', 'view'=>'carta','controller'=>'cartaControler'),
      'mesa' => array('model'=>'Mesa', 'view'=>'mesa','controller'=>'mesaControler'),
      'punto_pedido' => array('model'=>'Mesa', 'view'=>'punto_pedido','controller'=>'mesaControler'),
      'pedido' => array('model'=>'Pedido', 'view'=>'pedido','controller'=>'pedidoControler'),
      'registro_dia' => array('model'=>'Registro_dia', 'view'=>'registro_dia','controller'=>'pedidoControler'),
      'cierres' => array('model'=>'Cierre', 'view'=>'cierres','controller'=>'pedidoControler'),
    );

foreach($data as $key =>$components){
 if($page == $key){
     $model = $components['model'];
     $view = $components['view'];
     $controller = $components['controller'];
     break;
 }
}
if(isset($model)){
    require_once 'controllers/'.$controller.'.php';
    $objeto = new $controller;
    $objeto->$view();
}
} else {
    header('Location: index.php?page=punto_pedido');
  }
?>