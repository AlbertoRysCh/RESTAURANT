<?php
require('core/request.php');
session_start();
  require_once 'controllers/mesaControler.php';

  $consulta = new mesaControler();
  $query = $consulta->consultaMesa(); 

  
  if(isset($_POST['registrar'])){
      $datos = array(
          'mesa' => $_POST['mesa'],
      );
      $objeto->guardarMesa($datos);

    header('Location:index.php?page=mesa');
  }
  if(isset($_POST['editar'])){
       $id= $_POST['id'];
      $mesa = $_POST['mesa'];
    //   var_dump($id);
       $datos = array(
          "mesa = :mesa",
    );
    $idd = array(
        "id_mesa = :id_mesa",
       );
      $values = array(
          'id_mesa'=>$id,
          'mesa' => $mesa
      );
     $objeto->updateMesa($datos,$values,$idd);

     header('Location:index.php?page=mesa');
}
    if(isset($_GET['id'])){
    $id=$_GET['id'];
    $datos = array(
        'id_mesa' => $id,
    );
    var_dump($id);
    $objeto->eliminarMesa($datos,$id);

    header('Location:index.php?page=mesa');
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
                if(isset($_GET['idu']) && isset($_GET['mesa'])){
                    $id=$_GET['idu'];
                    $mesa=$_GET['mesa'];                
                    include('crud/editar.php');

                }
                 
                ?>
                  
           
       </div>
       </div>
   
   
     
           