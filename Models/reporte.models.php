<?php
require 'Conexion.php';

class Consulta
{    
    private $conn;

    function __construct()
    {
        $conn = new Conexion();
        $this->conn = $conn->Conectar();
        return $this->conn;
    }
    public function Consultar($palabra)
    {
        ///////////////////////valores iniciales//////////bin
        /*
        $query = "SELECT * FROM productos ORDER BY pro_id";
        if($result = $this->conn->query($query))
        {
            echo "bien";
        }else{
            echo "mal";
        }
            */

///LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA

    
    $q = $this->conn->real_escape_string($palabra);
    $query = "SELECT fecharecepcion, nombre, apepat, apemat, notario, tipodoc, fechaatendida, observacion FROM solicitudes WHERE 
    
    fecharecepcion LIKE '%" .$q. "%' OR
    nombre         LIKE '%" .$q. "%' OR
    apepat         LIKE '%" .$q. "%' OR
    apemat         LIKE '%" .$q. "%' OR
    notario        LIKE '%" .$q. "%' OR
    tipodoc        LIKE '%" .$q. "%' OR
    fechaatendida  LIKE '%" .$q. "%' OR
    observacion    LIKE '%" .$q. "%'  ";
    
    $buscarProductos = $this->conn->query($query);
    if($buscarProductos->num_rows > 0)
    {
    $tabla =
    '<table class="table">
        <tr class="bg-primary">
            <td> Recepcion </td>
            <td> Nombre </td>
            <td> Paterno </td>
            <td> Materno </td>
            <td> Notario </td>
            <td> Serie </td>
            <td> Emision </td>
            <td> Observacion</td>
        </tr>';

        while($filaProductos= $buscarProductos->fetch_assoc())
        {
            $tabla.=
            '<tr>
         
                <td>'.$filaProductos['fecharecepcion'].'</td>
                <td>'.$filaProductos['nombre'].'</td>
                <td>'.$filaProductos['apepat'].'</td>
                <td>'.$filaProductos['apemat'].'</td>
                <td>'.$filaProductos['notario'].'</td>
                <td>'.$filaProductos['tipodoc'].'</td>
                <td>'.$filaProductos['fechaatendida'].'</td>
                <td>'.$filaProductos['observacion'].'</td>
            </tr>
            ';
        }
            $tabla.='</table>';
        }else 
            {
            $tabla="No se encontraron coincidencias con sus criterios de busqueda.";

             }
        echo $tabla;
    }
}

$consulta = new Consulta();
@$palabra = $_REQUEST['productos'];
$consulta->Consultar($palabra);