<?php
require 'header.php';
require_once '../Models/principal.models.php';

$principal = new Principal(); // Instancia a la Clase
$data = $principal->Listar();
?>

    <div class="grid-x grid-margin-x">
        <div class="cell medium-12">
            <h2>LISTA DE SOLICITUDES DE USUARIOS ATENDIDOS</h2>
        </div>
        <div class="cell medium-1">
            Buscar por Fechas
        </div>
        <div class="cell medium-4">
            <label for="">Fecha Inicial
                <input type="date" name="fechaInicio" class="form-control">
            </label>
        </div>
        <div class="cell medium-4">
            <label for="">Fecha Final
                <input type="date" name="fechaInicio" class="form-control">
            </label>
        </div>
        <div class="cell medium-2">
            <button type="submit" name="btnBuscar" class="button">Buscar</button>
        </div>
    </div>
    
    <div class="grid-x grid-margin">

        <div class="cell medium-4">
            <div class="alert">
                <?php echo @$msg = $_REQUEST['msg'];?>
            </div>    
        </div>

        <table class="hover stack">
                <thead>
                    <tr>
                        <th>Num</th>
                        <th>Fecha Recepcion</th>
                        <th>Numero de Solicitud</th>
                        <th>Nombre</th>
                        <th>Notario</th>
                        <th>Serie</th>
                        <th>Fecha Atención</th>
                       <th colspan="2">Opciones</th>
                    </tr>
                </thead>
                <tbody>
              
                    <?php 
                    $i =1;
                    while($fila = $data->fetch_array(MYSQLI_ASSOC)):
                    
                    ?>
                        <tr>
                            <td><?php echo $i;  $fila['idsol'];?></td>
                            <td><?php echo $fila['fecharecepcion']; ?></td>
                            <td><?php echo $fila['numsoli']; ?></td>
                            <td><?php echo $fila['nombre']; ?></td>
                            <td><?php echo $fila['notario']; ?></td>
                            <td><?php echo $fila['tipodoc']; ?></td>
                            <td><?php echo $fila['fechaatendida']; ?></td>
                                                        <td>
                                 <a href="edit-formulario.php?idsol=<?php echo $fila['idsol'];?>">Modificar</a>
                            </td>

                            <td>
                                  <a href="eliminar-formulario.php?idsol=<?php echo $fila['idsol'];?>">Eliminar</a>
                            </td>


                    
                        </tr>
                        <?php 
                        $i++;
                        endwhile;
                        ?>
                </tbody> 
            </table>
        
    </div>

    
<?php require 'footer.php'; ?>