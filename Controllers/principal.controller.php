
<?php
require '../Models/principal.models.php';
date_default_timezone_set('America/Los_Angeles');

$modificacion = new Modificacion();

$recepcion 		= $_POST['fecharecepcion'];
$nombre 		= $_POST['nombre'];
$apellido1 		= $_POST['apepat'];
$apellido2		 = $_POST['apemat'];
$notario 		= $_POST['notario'];
$tipodoc		 = $_POST['tipodoc'];
$emision 		= $_POST['fechaatendida'];
$observacion 	= $_POST['observacion'];

echo $recepcion;
echo $nombre;
echo $apellido1;
echo $apellido2;
echo $notario;
echo $tipodoc;
echo $emision;
echo $observacion;


 //llamar a la funcion Modificar
$respuesta = $modificacion->Modificar($recepcion,$nombre,$apellido1,$apellido2, $notario,$tipodoc,$emision,$observacion);
if($respuesta == true)
	header("Location: ../View/nuevo.php");
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



 /*
  Comentario en varias líneas.
  Compatible con el estándar SQL99
 instanciar a la clase para Eliminar
$eliminacion = new Eliminacion();
$fecharecepcion 	= $_POST['fecharecepcion'];
$nombre 			= $_POST['nombre'];
$notario 			= $_POST['notario'];
$tipodoc		 	= $_POST['tipodoc'];
$fechaatendida 		= $_POST['fechaatendida'];
$observacion 		= $_POST['observacion'];

echo $fecharecepcion;
echo $nombre;
echo $notario;
echo $tipodoc;
echo $fechaatendida; 	
echo $observacion;

 //llamar a la funcion Eliminar
$respuesta = $eliminacion->eliminar($fecharecepcion,$nombre,$notario,$tipodoc,$fechaatendida,$observacion);
if($respuesta == true)
	header("Location: ../View/principal.php");
else
    header("Location: ../View/error.php");*/