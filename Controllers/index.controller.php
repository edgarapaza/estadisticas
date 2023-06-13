<?php

require '../Models/index.models.php';

 //instanciar a la clase para Registrar
$registro = new Registro();

$usuario 		= $_POST['user'];
$contrasena		= $_POST['pw'];

echo $usuario;
echo $contrasena;


 //llamar a la funcion Registrar
$respuesta = $registro->Registrar($usuario, $contrasena);
if($respuesta == true)
	header("Location: ../View/formulario.php");
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