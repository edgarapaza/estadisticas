<?php

require '../Models/modificacion.cliente.models.php';

//Instancias a la clase para Modificacion
$modificacion = new Modificacion();


$id         = $_POST['cli_id'];
$nombre     = $_POST['cli_nom'];
$apellidos  = $_POST['cli_ape'];
$dni        = $_POST['cli_dni'];
$cel        = $_POST['cli_cel'];


echo $id;
echo $nombre;
echo $apellidos;
echo $dni;
echo $cel;

//Llamar a la funcion Modificar

$respuesta = $modificacion->Modificar($id,$nombre,$apellidos,$dni,$cel);
if($respuesta == true)
	header("Location: ../View/principalclientes.php");
else
    header("Location: ../View/error.php");


