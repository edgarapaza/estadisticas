<?php
require "../Models/notarios.models.php";

$notarios = new Notarios();
$data = $notarios->MostrarNotarios();

$combo = "
<select name='cbonotario' id='cbonotario' >
<option value='' disabled selected>[Seleccionar]</option>
";

while($fila = $data->fetch_array(MYSQLI_ASSOC))
{
    $combo .= "<option value='".$fila['cod_not']."'>".$fila['notario']."</option>";
    
}
$combo .="</select>";

echo $combo;
?>

