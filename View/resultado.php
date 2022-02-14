<?php

require '../Models/Conexion.php';

class Producto
{
    private $conn;

    function __construct()
    {
        $this->conn = new Conexion();
        return $this->conn;
    }
    public function Cantidad() 
    {
        $sql = "SELECT SUM(nombre) as Cantidad from solicitudes;";
        
        if(!$result = $this->conn->query($sql))
        {
        echo "Error Consulta. " . mysqli_error($this->conn);
        }

        $dato = $result->fetch_array(MYSQLI_ASSOC);
        return $dato;
        mysqli_close($this->conn);
        
    }
    public function Listar()
    {
        $sql = "SELECT * FROM solicitudes";
         
        if(!$result = $this->conn->query($sql))
        {
            echo "Error Consulta. " . mysqli_error($this->conn);
        }

        return $result;
        mysqli_close($this->conn);
    }

   
}

   
    