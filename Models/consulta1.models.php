<?php
require 'Conexion.php';

class Consulta extends Conexion
{    
    private $conn;

    function __construct()
    {
        $this->conn = new Conexion();
        return $this->conn;
    }
        
    function mostrarSolicitud($idsol)
    {
        $sql = "SELECT fecharecepcion,numsoli,nombre,notario,tipodoc,fechaatendida,observacion FROM solicitudes WHERE idsol = " .$idsol;

        $data = $this->conn->ConsultaArray($sql);
        return $data;
     
    }

    function ConsultaAtencion($fecha)
    {
        $sql  = "SELECT * FROM solicitudes WHERE fechaatendida = '$fecha'";
        $data = $this->conn->ConsultaConRetorno($sql);
        return $data;
    }

    function ConsultaSemanalTotal($fechainicio, $fechafinal, $tipodoc)
    {
        $sql  = "SELECT COUNT(*) AS total FROM solicitudes WHERE fechaatendida >= '$fechainicio' and fechaatendida <= '$fechafinal' and tipodoc='$tipodoc';";
        $data = $this->conn->ConsultaArray($sql);
        return $data;
    }

    function ConsultaSemanal($fechainicio, $fechafinal,$tipodoc)
    {
        $sql  = "SELECT * FROM solicitudes WHERE fechaatendida >= '$fechainicio' and fechaatendida <= '$fechafinal' and tipodoc='$tipodoc';";
        $data = $this->conn->ConsultaConRetorno($sql);
        return $data;
    }

    function ConsultaSemanalGlobal($fechainicio, $fechafinal)
    {
        $sql  = "SELECT * FROM solicitudes WHERE fechaatendida >= '$fechainicio' and fechaatendida <= '$fechafinal';";
        $data = $this->conn->ConsultaConRetorno($sql);
        return $data;
    }
}    

