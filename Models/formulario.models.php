<?php
require_once 'Conexion.php';
class Producto
{
    private $conn;

    function __construct()
    {
        $this->conn = new Conexion();
        return $this->conn;
    }
      
    function Registrar($fecharecepcion,$numsoli,$nombre,$notario,$tipodoc,$fechaatendida,$observacion,$estado)
    {
            $sql = "INSERT INTO estadistica.solicitudes VALUES (null,'$fecharecepcion','$numsoli','$nombre','$notario','$tipodoc','$fechaatendida','$observacion','$estado',NULL);";
            $result = $this->conn->ConsultaSinRetorno($sql);
            return $result;
            mysqli_close($this->conn);
    }

    function Edit($idsol, $fecharecepcion,$soli,$nombre,$notario,$tipodoc,$fechaatendida,$observacion,$estado)
    {
            $sql = "UPDATE solicitudes SET fecharecepcion = '$fecharecepcion', numsoli = '$soli', nombre = '$nombre', notario = '$notario', tipodoc = '$tipodoc', fechaatendida = '$fechaatendida', observacion = '$observacion', estado='$estado' WHERE idsol = ". $idsol;
            
            $result = $this->conn->ConsultaSinRetorno($sql);
            return $result;
            mysqli_close($this->conn);       
    }

    function Eliminar($idsol)
    {
        $sql = "DELETE FROM solicitudes WHERE idsol ='$idsol'";

        $resultado = $this->conn->ConsultaSinRetorno($sql);
        return $resultado;
        mysqli_close($this->conn);
        
    }

}