
<?php
	require '../Models/principal.models.php';
	date_default_timezone_set('America/Los_Angeles');

$eliminacion = new Eliminacion();

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
$respuesta = $eliminacion->Eliminar($recepcion,$nombre,$apellido1,$apellido2, $notario,$tipodoc,$emision,$observacion);
if($respuesta == true)
	header("Location: ../View/eliminar.php");
else
    header("Location: ../View/error.php");
