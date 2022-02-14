<?php
require '../Models/anotaciones.models.php';
date_default_timezone_set('America/Los_Angeles');

$registro = new Anotacion();

$fecharecepcion = $_POST['fecharecepcion'];
$numofi			= $_POST['numofi'];
$nombre 		= $_POST['nombre'];
$escritura	    = $_POST['escritura'];
$notario	    = $_POST['notario'];
$fechaatendida 	= $_POST['fechaatendida'];
$estado 	    = $_POST['estado'];

 //llamar a la funcion Registrar
$respuesta = $registro->Registrar($fecharecepcion,$numofi,$nombre,$escritura,$notario,$fechaatendida,$estado);

if($respuesta == true)
	header("Location: ../View/anotacionreporte.php?msg=Guardado Correctamente");
else
    header("Location: ../View/error.php");
