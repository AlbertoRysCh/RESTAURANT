<?php
require_once 'models/Registro_dia.php';
class pedidoControler {
    public function registro_dia(){
        require_once('./view/includes/cabecera.php');
        require_once('./view/paginas/registro_dia.php');
        require_once('./view/includes/pie.php');
    }
    public function cierres(){
        require_once('./view/includes/cabecera.php');
        require_once('./view/paginas/config/cierres.php');
        require_once('./view/includes/pie.php');
    }
    public function pedido(){
        require_once('./view/includes/cabecera.php');
        require_once('./view/paginas/config/pedido/pedido.php');
        require_once('./view/includes/pie.php');
    }
}