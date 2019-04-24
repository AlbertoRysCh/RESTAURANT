<table class="table table-hover table-sm">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Mesa</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Editar Eliminar</th>
                 
                    </tr>
                </thead>
                <tbody>
                <?php
                 
                  if (!empty($query)) {
                    foreach ($query as $r) {  
                    ?>
                    <tr>
                    <td scope="row"><?php echo $r['id_carta'];?></td>
                    <td scope="row"><?php echo $r['nombre'];?></td>
                    <td scope="row"><?php echo $r['precio'];?></td>
                    <td colspan="2">
                        <a  class="btn btn-success btn-sm " href="index.php?page=carta&idu=<?php echo $r['id_carta'];?>&nombre=<?php echo $r['nombre'];?>&precio=<?php echo $r['precio'];?>">editar</a>
                        <a class="btn btn-danger btn-sm" href="index.php?page=carta&id=<?php echo $r['id_carta'];?>">borrar</a>
                    </td>
                 
                    </tr>
                   
                   
                    <?php
                           }
                        }

                   ?>
                </tbody>
                </table>