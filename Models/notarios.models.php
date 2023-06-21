<?php
require_once "Conexion.php";

class Notarios
{
    private $conn;
    function __construct()
    {
        $this->conn = new Conexion();
        return $this->conn;
    }

    function MostrarNotarios()
    {
        $sql = "SELECT cod_not, concat(nom_not,' ',pat_not,' ',mat_not) as notario FROM recepcion.notarios;";
        $result = $this->conn->ConsultaCon($sql);
        return $result;
    }
}

