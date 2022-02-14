<?php

require 'Conexion.php';



    ///////////////registrar
    class Registro
    {
        function __construct()
        {
            $conn = new Conexion();
            $this->conn = $conn->Conectar();
            return $this->conn;
        }
   
        public function Registrar($usuario,$contrasena)
        {
            $sql = ("SELECT $usuario,$contrasena FROM login WHERE
             $usuario= 'arp' AND $contrasena= 143218");
            
            
            if(!$this->conn->query($sql))
            {
                echo "Error Consulta. " . mysqli_error($this->conn);
                return false;
            }
    
            return true;
            mysqli_close($this->conn);
            
        }
    }

