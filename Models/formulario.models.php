<?php

require 'Conexion.php';

class Producto
{
    private $conn;

    private $fecharecepcion;
    private $soli;
    private $nombre;
    private $notario;
    private $tipodoc;
    private $emision;
    private $observacion;

    function __construct()
    {
        $this->conn = new Conexion();
        return $this->conn;
    }
      
    function Registrar($recepcion,$soli,$nombre,$notario,$tipodoc,$emision,$observacion)
    {
            $sql = "INSERT INTO solicitudes(fecharecepcion,numsoli,nombre,notario,tipodoc,fechaatendida,observacion) VALUES
             ('$recepcion','$soli','$nombre','$notario','$tipodoc','$emision','$observacion')";
            
            
            $result = $this->conn->ConsultaSinRetorno($sql);
            return $result;
            mysqli_close($this->conn);
    }

    function Edit($idsol, $fecharecepcion,$soli,$nombre,$notario,$tipodoc,$fechaatendida,$observacion)
    {
            $sql = "UPDATE solicitudes SET fecharecepcion = '$fecharecepcion', numsoli = '$soli', nombre = '$nombre', notario = '$notario', tipodoc = '$tipodoc', fechaatendida = '$fechaatendida', observacion = '$observacion' WHERE idsol = ". $idsol;
            
            $result = $this->conn->ConsultaSinRetorno($sql);
            return $result;
            mysqli_close($this->conn);       
    }

    function Eliminar($idsol)
    {
        $sql = "DELETE FROM solicitudes WHERE idsol ='$idsol'";

        $resultado = $this->conn->ConsultaSinRetorno($sql);
        return $resultado;
        mysqli_close($this->conn);
        
    }

}