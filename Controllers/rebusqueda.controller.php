<?php

require "../Models/consulta.php";

$consulta = new Consulta();
$datos = $consulta->mostrarSolicitudRebusqueda(467);
# ,numsoli,nombre,notario,tipodoc,fechaatendida,estado
echo $datos['fecharecepcion']."<br>";
echo $datos['numsoli']."<br>";
echo $datos['nombre']."<br>";
echo $datos['notario']."<br>";
echo $datos['tipodoc']."<br>";
echo $datos['fechaatendida']."<br>";
echo $datos['estado']."<br>";
