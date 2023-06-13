<?php
require 'Conexion.php';

class Modificacion
{
    private $conn;

    private $fecharecepcion;
    private $nombre;
    private $apepat;
    private $apemat;
    private $notario;
    private $tipodoc;
    private $emision;
    private $observacion;

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
        $sql = "SELECT * FROM solicitudes";
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
