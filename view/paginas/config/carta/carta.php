<?php
require('core/request.php');
session_start();
  require_once 'controllers/cartaControler.php';

  $consulta = new cartaControler();
  $query = $consulta->consultaCarta(); 

  
  if(isset($_POST['registrar'])){
      $datos = array(
          'nombre' => $_POST['nombre'],
          'precio' => $_POST['precio'],
      );
      $objeto->guardarCarta($datos);

    header('Location:index.php?page=carta');
  }
  if(isset($_POST['editar'])){
       $id= $_POST['id'];
      $nombre = $_POST['nombre'];
      $precio = $_POST['precio'];
    //   var_dump($id);
       $datos = array(
          "nombre = :nombre",
          "precio = :precio"
    );
    $idd = array(
        "id_carta = :id_carta",
       );
      $values = array(
          'id_carta'=>$id,
          'nombre' => $nombre,
          'precio' => $precio
      );
     $objeto->updateCarta($datos,$values,$idd);

     header('Location:index.php?page=carta');
}
    if(isset($_GET['id'])){
    $id=$_GET['id'];
    $datos = array(
        'id_carta' => $id,
    );
    var_dump($id);
    $objeto->eliminarCarta($datos,$id);

    header('Location:index.php?page=carta');
    }

?>
 



    <div class="container  ">
        <div class="row">
        <div class="col-md-12">
        <?php
            include('crud/registrar.php')
            ?>
        </div>
      
      </div>
     

        <div class="row mt-2">
       <div class="col-md-7 col-sm-12">
       <div class="table-responsive-xl table-responsive-lg table-responsive-md  table-responsive-sm  table-wrapper-scroll-y" >
            <?php
            include('crud/consulta.php');
            ?>
       </div>
       </div>
       

             
                <?php
                if(isset($_GET['idu']) && isset($_GET['nombre'])&& isset($_GET['precio'])){
                    $id=$_GET['idu'];
                    $nombre=$_GET['nombre'];
                    $precio=$_GET['precio'];
                    include('crud/editar.php');

                }
                 
                ?>
                  
           
       </div>
       </div>