<?php
require '../Models/formulario.models.php';

 //instanciar a la clase para Registrar
$formulario = new Formulario();

$fecharecepcion = $_POST['fecharecepcion'];
$numsoli		= $_POST['numsoli'];
$nombre 		= $_POST['txtnombre'];
$notario 		= $_POST['notario'];
$tipodoc		= $_POST['tipodoc'];
$fechaatendida  = $_POST['fechaatendida'];
$observacion 	= $_POST['observacion'];
$estado		    = $_POST['estado'];


//llamar a la funcion Registrar

$res = $formulario->Duplicado($numsoli, $fecharecepcion);
if($res['cantidad']>0){
	echo "DUPLICADO";
	header("Location: ../View/error.php");
}else{
	echo "No registrado";
	$formulario->Registrar($fecharecepcion,$numsoli,$nombre,$notario,$tipodoc,$fechaatendida,$observacion,$estado);
	header("Location: ../View/principal.php?msg=Guardado Correctamente");
}
