<?php

require '../Models/formulario.models.php';

 //instanciar a la clase para Registrar
$registro = new Producto();

echo $fecharecepcion = $_POST['fecharecepcion'];
echo $numsoli		= $_POST['numsoli'];
echo $nombre 		= $_POST['txtnombre'];
echo $notario 		= $_POST['notario'];
echo $tipodoc		= $_POST['tipodoc'];
echo $fechaatendida 	= $_POST['fechaatendida'];
echo $observacion 	= $_POST['observacion'];
echo $estado			= $_POST['estado'];


//llamar a la funcion Registrar

$respuesta = $registro->Registrar($fecharecepcion,$numsoli,$nombre,$notario,$tipodoc,$fechaatendida,$observacion,$estado,'');

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