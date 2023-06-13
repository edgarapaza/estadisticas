<?php

require 'Conexion.php';
//////////////////MODIFICACION
class Modificacion
{
    private $conn;

    private $pro_id;
    private $pro_nom;
    private $pro_mar;
    private $pro_cos;
    private $pro_pre;
    private $pro_can;
    private $pro_img;
   

    function __construct()
    {
        $conn = new Conexion();
        $this->conn = $conn->Conectar();
        return $this->conn;
    }
    
    public function Modificar($id,$producto,$marca,$costo,$precio,$cantidad,$imagen)
    {
        $sql = ("UPDATE productos SET pro_nom = '$producto', pro_mar = '$marca', pro_cos = '$costo', pro_pre = '$precio', pro_can = '$cantidad',pro_img='$imagen'
        WHERE pro_id=$id;");
        
        
        if(!$result = $this->conn->query($sql))
        {
            echo "Error Modificar. " . mysqli_error($this->conn);
        }

        return $result;
        mysqli_close($this->conn);
        
    }
}
