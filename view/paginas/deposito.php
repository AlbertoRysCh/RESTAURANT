<?php
        require('core/request.php');
        session_start();
        if(isset($_POST['registrar'])){
            $datos = array(
                'nombre' => $_POST['nombre'],
                'dni'    => $_POST['dni'],
                'monto'  => $_POST['monto'],
            );
            $objeto->guardarDeposito($datos);

          header('Location:index.php?page=consulta');
        }

?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Registrar Deposito
</button>
<?php
              if (isset($_SESSION['mensaje'])) {
                  echo "<div class='alert alert-primary' role='alert'>".$_SESSION['mensaje']."</div>";
            }
             ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="index.php?page=deposito" method="post">
            <div class="form-group">
                <label for="inputNombre">Nombre</label>
                <input type="Text" name="nombre" class="form-control" id="inputNombre"  placeholder="Ingrese nombre">
            </div>
            <div class="form-group">
                <label for="inputDni">DNI</label>
                <input type="Text" name="dni" class="form-control" id="inputDni" placeholder="Ingrese su DNI">
            </div>
            <div class="form-group">
              <label for="inputMonto">Monto</label>
              <input type="text" name="monto" class="form-control" id="inputMonto" placeholder="Ingrese su monto">
            </div>
           <br>
          
                   <button type="submit" name="registrar" class="btn btn-primary">Registrar</button> </div>
        </form>
      </div>
     
  </div>
</div>
       
  