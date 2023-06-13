<?php

require '../Models/formulario.models.php';

 //instanciar a la clase para Registrar
$eliminacion = new Producto();

$idsol          = $_POST['idsol'];
$fecharecepcion = $_POST['fecharecepcion'];
$soli           = $_POST['numsoli'];
$nombre         = $_POST['nombre'];
$notario        = $_POST['notario'];
$tipodoc        = $_POST['tipodoc'];
$fechaatendida  = $_POST['fechaatendida'];
$observacion    = $_POST['observacion'];


 //llamar a la funcion Registrar
$respuesta = $eliminacion->Eliminar($idsol, $fecharecepcion,$soli,$nombre,$notario,$tipodoc,$fechaatendida,$observacion);

if($respuesta == true)
	header("Location: ../View/principal.php?msg=Dato Eliminado :((");
else
    header("Location: ../View/error.php");
