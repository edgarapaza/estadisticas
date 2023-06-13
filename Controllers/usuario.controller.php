<?php

require '../Models/usuario.models.php';
date_default_timezone_set('America/Los_Angeles');

 //instanciar a la clase para Registrar
$consulta = new Consulta();

$id				= $_POST['id'];
$uss		    = $_POST['user'];
$contrasena		= $_POST['password'];

echo $id;
echo $uss;
echo $contrasena;

 //llamar a la funcion Registrar
$respuesta = $consulta->Consultar($id, $uss, $contrasena);
if($respuesta == true)
	header("Location: ../View/formulario.php");
else
    header("Location: ../View/error.php");
