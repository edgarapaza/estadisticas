<?php
require_once 'Conexion.php';
class Formulario
{
    private $conn;

    function __construct()
    {
        $this->conn = new Conexion();
        return $this->conn;
    }
      
    function Registrar($fecharecepcion,$numsoli,$nombre,$notario,$tipodoc,$fechaatendida,$observacion,$estado)
    {
            $sql = "INSERT INTO estadistica.solicitudes VALUES (NULL,'$fecharecepcion','$numsoli','$nombre','$notario','$tipodoc','$fechaatendida','$observacion','$estado','$fechaatendida');";
            $this->conn->ConsultaSin($sql);
    }

    function Duplicado($idsol)
    {
        $sql = "SELECT count(idsol) as cantidad FROM estadistica.solicitudes WHERE fecharecepcion LIKE '2021-06-28%' AND numsoli =".$idsol;
        $res = $this->conn->ConsultaArray($sql);
        return $res;
    }

    function Edit($idsol, $fecharecepcion,$soli,$nombre,$notario,$tipodoc,$fechaatendida,$observacion,$estado)
    {
            $sql = "UPDATE solicitudes SET fecharecepcion = '$fecharecepcion', numsoli = '$soli', nombre = '$nombre', notario = '$notario', tipodoc = '$tipodoc', fechaatendida = '$fechaatendida', observacion = '$observacion', estado='$estado' WHERE idsol = ". $idsol;
            $this->conn->ConsultaSin($sql);
    }

    function Eliminar($idsol)
    {
        $sql = "DELETE FROM solicitudes WHERE idsol ='$idsol'";
        $this->conn->ConsultaSin($sql);
        
    }

}