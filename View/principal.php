<?php
require 'header.php';
require_once '../Models/principal.models.php';

$lista = new Modificacion(); // Instancia a la Clase
$data = $lista->Listar();
?>

<html>
<body style="margin: 0px; background: #008080; height: 100%">

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <center> <img src="img/fpatrias.jpg"></center>
            <center><h6>   LISTA DE SOLICITUDES DE USUARIOS ATENDIDOS</h6> </center>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-primary">
                <?php echo @$msg = $_REQUEST['msg'];?>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Num</th>
                        <th>Fecha Recepcion</th>
                        <th>Numero de Solicitud</th>
                        <th>Nombre</th>
                        <th>Notario</th>
                        <th>Serie</th>
                        <th>Fecha emision</th>
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
    </div>
</div>
    
<?php require 'footer.php'; ?>
</body>
</html>