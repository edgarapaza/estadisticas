<?php
require 'Conexion.php';

class Principal
{
    private $conn;

    function __construct()
    {
        $this->conn = new Conexion();
        return $this->conn;
    }
   
    function Modificar($recepcion,$nombre,$apepat,$apemat,$notario,$tipodoc,$emision,$observacion)
    {
        $sql = "UPDATE solicitudes SET fecharecepcion = '$recepcion', nombre = '$nombre', apepat='$apepat', apemat='$apemat', notario = '$notario', tipodoc = '$tipodoc', fechaatendida = '$emision',observacion='$observacion' WHERE nombre='$nombre';";
        
        $res = $this->conn->ConsultaSinRetorno($sql);
        return $res;
        mysqli_close($this->conn);
        
    }

    function Listar()
    {
        $fecha = date('Y-m-d');
        $sql = "SELECT * FROM estadistica.solicitudes WHERE fechaatendida LIKE '$fecha'";
        $result = $this->conn->ConsultaConRetorno($sql);
        return $result;
        mysqli_close($this->conn);
    }

    function Eliminar  ($recepcion,$nombre,$apepat,$apemat,$notario,$tipodoc,$emision,$observacion)
    {
        $sql = "DELETE FROM solicitudes WHERE nombre ='$nombre'";

        $res = $this->conn->ConsultaSinRetorno($sql);
        return $res;
        mysqli_close($this->conn);
        
    }
}
