<?php

require '../Models/formulario.models.php';

 //instanciar a la clase para Registrar
$registro = new Producto();

$recepcion 		= $_POST['fecharecepcion'];
$soli			= $_POST['numsoli'];
$estado			= $_POST['estado'];
$nombre 		= $_POST['txtnombre'];
$notario 		= $_POST['notario'];
$tipodoc		 = $_POST['tipodoc'];
$emision 		= $_POST['fechaatendida'];
$observacion 	= $_POST['observacion'];


 //llamar a la funcion Registrar
$respuesta = $registro->Registrar($recepcion,$soli,$nombre,$notario,$tipodoc,$emision,$observacion,$estado);

if($respuesta == true)
	header("Location: ../View/principal.php?msg=Guardado Correctamente");
else
    header("Location: ../View/error.php");




//Instancias a la clase para Eliminacion
//$eliminacion = new Eliminacion();

//Llamar a la funcion Eliminar

//$respuesta = $eliminacion->Eliminar($id,$producto,$marca,$costo,$precio,$cantidad,$imagen);
//if($respuesta == true)
//	header("Location: ../View/principal.php");
//else
	//header("Location: ../View/error.php");