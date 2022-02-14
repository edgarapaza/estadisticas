<?php
require '../Models/oficio.models.php';
date_default_timezone_set('America/Los_Angeles');

$registro = new Oficio();

$fecharecepcion = $_POST['fecharecepcion'];
$numofi			= $_POST['numofi'];
$nombre 		= $_POST['nombre'];
$tipodoc	    = $_POST['tipodoc'];
$emision 		= $_POST['fechaatendida'];
$estado 	    = $_POST['estado'];

 //llamar a la funcion Registrar
$respuesta = $registro->Registrar($fecharecepcion,$numofi,$nombre,$tipodoc,$emision,$estado);

if($respuesta == true)
	header("Location: ../View/oficioreporte.php?msg=Guardado Correctamente");
else
    header("Location: ../View/error.php");
