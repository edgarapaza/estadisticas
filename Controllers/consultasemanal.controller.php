<?php
require "../Models/consulta1.models.php";

 //instanciar a la clase para Registrar
$consulta    = new Consulta();
$fechainicio = $_POST['fechainicio'];
$fechafinal  = $_POST['fechafinal'];
$tipodoc     = $_POST['tipodoc'];

$total = $consulta->ConsultaSemanalTotal($fechainicio,$fechafinal,$tipodoc);
$resultado = $consulta->ConsultaSemanal($fechainicio,$fechafinal,$tipodoc);

$i=1;
?>
 

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
        <td><?php echo $i; //$fila['idsol'];?></td>
        <td><?php echo $fila['fechaatendida']; ?></td>
        <td><?php echo $fila['numsoli']; ?></td>
        <td><?php echo $fila['nombre']; ?></td>
        <td><?php echo $fila['notario']; ?></td>
        <td><?php echo $fila['tipodoc']; ?></td>
        <td><?php echo $fila['observacion']; ?></td>
    </tr>
    <?php         
    	$i++;
		}
	?>
</table>

 