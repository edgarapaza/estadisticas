<?php

require '../Models/cliente.models.php';

// instanciar a la clase para Registrar
$registro = new Registro();

$id = $_POST['cli_id'];
$nombre = $_POST['cli_nom'];
$apellidos = $_POST['cli_ape'];
$dni = $_POST['cli_dni'];
$cel = $_POST['cli_cel'];


echo $id;
echo $nombre;
echo $apelidos;
echo $dni;
echo $cel;

// llamar a la funcion Registrar
$respuesta = $registro->Registrar($nombre, $apellidos, $dni,$cel);
if($respuesta == true)
	header("Location: ../View/principalclientes.php");
else
	header("Location: ../View/error.php");


	
	
//Instancias a la clase para Eliminacion
$eliminacion = new Eliminacion();

//Llamar a la funcion Eliminar

$respuesta = $eliminacion->Eliminar($id,$nombre,$apellidos,$dni,$cel);
if($respuesta == true)
	header("Location: ../View/principal.clientes.php");
else
	header("Location: ../View/error.php");
