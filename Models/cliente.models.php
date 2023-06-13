
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



    ///////////////registrar
    class Registro
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
        
        public function Registrar($nombre,$apellidos,$dni,$cel)
        {
            $sql = ("INSERT INTO clientes (cli_nom,cli_ape,cli_dni,cli_cel) VALUES
             ('$nombre','$apellidos','$dni','$cel')");
            
            
            if(!$this->conn->query($sql))
            {
                echo "Error Consulta. " . mysqli_error($this->conn);
                return false;
            }
    
            return true;
            mysqli_close($this->conn);
            
        }
    }

//////////////////Eliminacion
class Eliminacion
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
    
    public function Eliminar ($id,$nombre,$apellidos,$dni,$cel)
    {
        $sql = ("DELETE FROM productos WHERE $id =cli_id");

        
        if(!$result = $this->conn->query($sql))
        {
            echo "Error Modificar. " . mysqli_error($this->conn);
        }

        return $result;
        mysqli_close($this->conn);
        
    }
}
    



