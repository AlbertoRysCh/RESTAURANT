<?php
  require_once 'controllers/DepositoController.php';

  $consulta = new DepositoController();
  $query = $consulta->consultaDeposito(); 

?>
 
<div class="container">

<?php
include_once 'deposito.php'
?>
<br>
<br>
     <div class="card">
        <div  class="card-header">
        Listado de deposito
        </div>
        <div class="card-body">
            <p class="card-text">
             <div class="registro_pedido" >
             <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDO</th>
                    <th scope="col">MONTO</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                 
                  if (!empty($query)) {
                    foreach ($query as $r) {  
                    ?>
                    <tr>
                    <td scope="row"><?php echo $r['id'];?></td>
                    <td scope="row"><?php echo $r['nombre'];?></td>
                    <td scope="row"><?php echo $r['dni'];?></td>
                    <td scope="row"><?php echo $r['monto'];?></td>
                    </tr>
                   
                   
                    <?php
                           }
                        }

                   ?>
                </tbody>
                </table>
             </div>

               
            </p>
        </div>
     </div>
    
    </div>
