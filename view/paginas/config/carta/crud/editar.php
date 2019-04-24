<div class="col-md-5 col-sm-12 mt-3">
            <div class="card">
                <div class="card-body">

<form action="" method="post">
            <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $id ?>" >
            </div>
            <div class="form-group">
            <label for="inputMesa">Nombre</label> 
                <input type="Text" name="nombre" class="form-control" id="inputMesa" value="<?php echo $nombre ?>">
            </div>
            <label for="inputMesa">Precio</label> 
                <input type="Text" name="precio" class="form-control" id="inputMesa" value="<?php echo $precio ?>">
            </div>
           <br>
          
                   <button type="submit" name="editar" class="btn btn-primary">Editar</button> </div>
        </form>
        </div>
                </div>