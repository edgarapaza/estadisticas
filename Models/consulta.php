<?php
require 'Conexion.php';

class Consulta
{    
    private $conn;

    function __construct()
    {
        $this->conn = new Conexion();
        return $this->conn;
    }
    
    function mostrarSolicitud($idsol)
    {
        $sql = "SELECT fecharecepcion,numsoli,nombre,notario,tipodoc,fechaatendida,estado FROM solicitudes WHERE idsol = " .$idsol;

        $data = $this->conn->ConsultaArray($sql);
        return $data;
     
    }

    function mostrarSolicitudRebusqueda($numsolicitud)
    {
        $sql = "SELECT fecharecepcion,numsoli,nombre,notario,tipodoc,fechaatendida,estado,fecRebusqueda FROM solicitudes WHERE numsoli = " .$numsolicitud;

        $data = $this->conn->ConsultaArray($sql);
        return $data;
     
    }

    function ConsultaAtencion($fechaatendida)
    {
        $sql ="SELECT * FROM solicitudes WHERE fechaatendida = '$fechaatendida';";
        $data = $this->conn->ConsultaConRetorno($sql);
        return $data;
        
    }
}    

