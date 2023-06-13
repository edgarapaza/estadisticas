<?php
require "../Models/buscar.models.php";

 //instanciar a la clase para Registrar
$consulta = new Consulta();
$numsoli   = $_POST['numsoli'];


$resultado = $consulta->ConsultaAtencion($numsoli);
?> 
     <table class="table table-striped">
               
                    <tr>
                        <th>Num</th>
                        <th>Fecha Recepcion</th>
                        <th>Numero de Solicitud</th>
                        <th>Nombre</th>
                        <th>Notario</th>
                        <th>Serie</th>
                        <th>Fecha emision</th>
                        <th>Observacion</th>
                    </tr>
<?php
while ($fila = $resultado->fetch_array(MYSQLI_ASSOC)) 
    { ?>
                <tbody>

    <tr>
        <td><?php echo $fila['idsol'];?></td>
        <td><?php echo $fila['fecharecepcion']; ?></td>
        <td><?php echo $fila['numsoli']; ?></td>
        <td><?php echo $fila['nombre']; ?></td>
        <td><?php echo $fila['notario']; ?></td>
        <td><?php echo $fila['tipodoc']; ?></td>
        <td><?php echo $fila['fechaatendida']; ?></td>
        <td><?php echo $fila['observacion']; ?></td>
    </tr>
    <?php         
}
?>
</table>
