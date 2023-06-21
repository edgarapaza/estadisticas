}<?php
require '../Models/formulario.models.php';

 //instanciar a la clase para Registrar
$registro = new Producto();

$fecharecepcion = $_POST['fecharecepcion'];
$numsoli		= $_POST['numsoli'];
$nombre 		= $_POST['txtnombre'];
$notario 		= $_POST['notario'];
$tipodoc		= $_POST['tipodoc'];
$fechaatendida 	= $_POST['fechaatendida'];
$observacion 	= $_POST['observacion'];
$estado			= $_POST['estado'];

//llamar a la funcion Registrar

$respuesta = $registro->Registrar($fecharecepcion,$numsoli,$nombre,$notario,$tipodoc,$fechaatendida,$observacion,$estado,null);

if($respuesta)
{
   header("Location: ../View/principal.php?msg=Guardado Correctamente");
}else{
   header("Location: ../View/error.php");
}
