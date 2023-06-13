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
        


    function ConsultaAtencion($numsoli)
    {
        $sql  = "SELECT * FROM solicitudes WHERE numsoli = '$numsoli'";
        $data = $this->conn->ConsultaConRetorno($sql);
        return $data;
    }
    
    function ConsultaAtencionNombre($nombre)
    {
        $sql  = "SELECT * FROM solicitudes WHERE nombre LIKE '%$nombre%'";
        $data = $this->conn->ConsultaConRetorno($sql);
        return $data;
    }
   

 

     
}    

