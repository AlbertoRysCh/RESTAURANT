<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Registrar Deposito
</button>

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

      <form action="index.php?page=carta" method="post">
            <div class="form-group">
                <label for="inputMesa">Nombre</label>
                <input type="Text" name="nombre" class="form-control" id="inputMesa"  placeholder="Ingrese nombre de nombre">
            </div>
            <div class="form-group">
            <label for="inputMesa">Precio</label>
                <input type="Text" name="precio" class="form-control" id="inputMesa"  placeholder="Ingrese nombre de precio">
         
            </div>
           
           <br>
          
                   <button type="submit" name="registrar" class="btn btn-primary">Registrar</button> </div>
        </form>
      </div>
     
  </div>
</div>