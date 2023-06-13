<?php
session_start();
date_default_timezone_set('America/Los_Angeles');
require "../Models/validacion.model.php";

$user   = $_REQUEST['user'];
$passwd = $_POST['passwd'];


$validacion = new Validacion();
$data = $validacion->Validar($user, $passwd);


if($data['idlogin'] > 0)
{
    header("Location: ../View/formulario.php");
    if($data['estado'] == 1){
        $_SESSION['personal'] = $data['idusuario'];
    }else{
        header("Location: ../index.html");    
    }

}else{
    header("Location: ../index.html");
}
