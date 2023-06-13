<?php

require 'Conexion2.php';

class Search2
{    
    private $conn;

    function __construct()
    {
        $this->conn = new Conexion2();
        return $this->conn;
    }
        
    function SearchUsuarioRecepcion($idsolicitud)
    {
        $sql1 = "SELECT s.codTipSol,s.codUsu FROM recepcion.solicitudes as s WHERE s.codSol = " .$idsolicitud;

        $datSolicitud = $this->conn->ConsultaArray($sql1);
    	
    	#$datSolicitud['codTipSol']."<br>";
    	#$datSolicitud['codUsu']."<br>";
    	
        $sql2 = "SELECT concat(nombre,' ',apePat,' ',apeMat) as nom_usuario, numDoc FROM recepcion.usuarios WHERE codUsu = " . $datSolicitud['codUsu'];
        $datUsuario = $this->conn->ConsultaArray($sql2);

        return $datUsuario;
    }
 }
