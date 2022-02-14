<?php
require "../Models/consulta1.models.php";

 //instanciar a la clase para Registrar
$consulta    = new Consulta();
$fechainicio = $_POST['fechainicio'];
$fechafinal  = $_POST['fechafinal'];


$total = $consulta->ConsultaSemanalTotal($fechainicio,$fechafinal);
$resultado = $consulta->ConsultaSemanal($fechainicio,$fechafinal);
?> 
<h4>hola</h4>
<br><br>
    <h3>Total de Registros: <?php echo $total['total'];?></h3>

     <table class="table table-striped">
               
                    <tr>
                        <th>Num</th>
                        <th>Fecha emision</th>
                        <th>Numero de Solicitud</th>
                        <th>Nombre</th>
                        <th>Notario</th>
                        <th>Serie</th>
                        
                        <th>Observacion</th>
                    </tr>
<?php
while ($fila = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                <tbody>

    <tr>
        <td><?php echo $fila['idsol'];?></td>
        <td><?php echo $fila['fechaatendida']; ?></td>
        <td><?php echo $fila['numsoli']; ?></td>
        <td><?php echo $fila['nombre']; ?></td>
        <td><?php echo $fila['notario']; ?></td>
        <td><?php echo $fila['tipodoc']; ?></td>
        <td><?php echo $fila['observacion']; ?></td>
    </tr>
    <?php         
}
?>
</table>

 