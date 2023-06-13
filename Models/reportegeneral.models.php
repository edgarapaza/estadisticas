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
        
    


    function ConsultaSemanalTotal($fechainicio, $fechafinal)
    {
        $sql  = "SELECT COUNT(*) AS total FROM solicitudes WHERE fechaatendida >= '$fechainicio' and fechaatendida <= '$fechafinal';";
        $data = $this->conn->ConsultaArray($sql);
        return $data;
    }

    function ConsultaSemanal($fechainicio, $fechafinal)
    {
        $sql  = "SELECT * FROM solicitudes WHERE fechaatendida >= '$fechainicio' and fechaatendida <= '$fechafinal';";
        $data = $this->conn->ConsultaConRetorno($sql);
        return $data;
    }


}    

