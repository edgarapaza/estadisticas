<?php
require 'Conexion.php';

class Lista {
    function __construct()
        {
            $conn = new Conexion();
            $this->conn = $conn->Conectar();
            return $this->conn;
        }

    public function Listar()
    {
        $sql = "SELECT * FROM clientes";
         
        if(!$result = $this->conn->query($sql))
        {
            echo "Error Consulta. " . mysqli_error($this->conn);
        }
   
        return $result;
        mysqli_close($this->conn);
    }

}