<table class="table table-hover table-sm">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Mesa</th>
                    <th scope="col">Editar Eliminar</th>
                 
                    </tr>
                </thead>
                <tbody>
                <?php
                 
                  if (!empty($query)) {
                    foreach ($query as $r) {  
                    ?>
                    <tr>
                    <td scope="row"><?php echo $r['id_mesa'];?></td>
                    <td scope="row"><?php echo $r['mesa'];?></td>
                    <td colspan="2">
                        <a  class="btn btn-success btn-sm " href="index.php?page=mesa&idu=<?php echo $r['id_mesa'];?>&mesa=<?php echo $r['mesa'];?> ">editar</a>
                        <a class="btn btn-danger btn-sm" href="index.php?page=mesa&id=<?php echo $r['id_mesa'];?>">borrar</a>
                    </td>
                 
                    </tr>
                   
                   
                    <?php
                           }
                        }

                   ?>
                </tbody>
                </table>