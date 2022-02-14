<?php

require "../Models/Conexion.php";

class Model
{
    private $conn;

    function __construct()
    {
        $this->conn = new Conexion();
        return $this->conn;
    }

    public function fetch()
    {
        $data = [];

        $query = "SELECT * FROM solicitudes";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }

        return $data;
    }

    public function estadistica($start_date, $end_date)
    {
        $data = [];

        if (isset($start_date) && isset($end_date)) {
            $query = "SELECT * FROM `solicitudes` WHERE `fechaatendida` >= '$start_date' AND `fechaatendida` <= '$end_date'";
            if ($sql = $this->conn->query($query)) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    $data[] = $row;
                }
            }
        }

        return $data;
    }
}