<?php

require 'Conexion.php';
//////////////////MODIFICACION
class Modificacion
{
    private $conn;

    private $cli_id;
    private $cli_nom;
    private $cli_ape;
    private $cli_dni;
    private $cli_cel;
   

    function __construct()
    {
        $conn = new Conexion();
        $this->conn = $conn->Conectar();
        return $this->conn;
    }
    
    public function Modificar($id,$nombre,$apellidos,$dni,$cel)
    {
        $sql = ("UPDATE clientes SET cli_nom = '$nombre', cli_ape = '$apellidos', cli_dni = '$dni', cli_cel = '$cel'
        WHERE cli_id=$id;");
        
        

        if(!$result = $this->conn->query($sql))
        {
            echo "Error Modificar. " . mysqli_error($this->conn);
        }

        return $result;

        mysqli_close($this->conn);
        
    }
}


