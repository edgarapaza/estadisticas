<?php

require 'Conexion.php';

class Anotacion
{
    private $conn;

    private $fecharecepcion;
    private $numofi;
    private $nombre;
    private $escritura;
    private $notario;
    private $fechaatendida;
    private $estado;

    function __construct()
    {
        $this->conn = new Conexion();
        return $this->conn;
    }
      
    function Registrar($fecharecepcion,$numofi,$nombre,$escritura,$notario,$fechaatendida,$estado)
    {
            $sql = "INSERT INTO anotaciones(fecharecepcion,numofi,nombre,escritura,notario,fechaatendida,estado) VALUES
             ('$fecharecepcion','$numofi','$nombre','$escritura','$notario','$fechaatendida','$estado')";
            
            
            $result = $this->conn->ConsultaSinRetorno($sql);
            return $result;
            mysqli_close($this->conn);
    }

    function Edit($idsol, $fecharecepcion,$soli,$nombre,$notario,$tipodoc,$fechaatendida,$observacion)
    {
            $sql = "UPDATE solicitudes SET fecharecepcion = '$fecharecepcion', numsoli = '$soli', nombre = '$nombre', notario = '$notario', tipodoc = '$tipodoc', fechaatendida = '$fechaatendida', observacion = '$observacion' WHERE idsol = ". $idsol;
            
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
        function Listar()
    {
        $sql = "SELECT * FROM anotaciones";
        $result = $this->conn->ConsultaConRetorno($sql);
        return $result;
        mysqli_close($this->conn);
    }

}