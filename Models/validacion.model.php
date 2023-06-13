<?php
require "Conexion.php";

class Validacion
{
	private $conn;

	function __construct()
	{
		$this->conn = new Conexion();
		return $this->conn;
	}

	function Validar($user,$pass)
	{
		#$consulta = "SELECT idpersona FROM usuario WHERE user='$user' AND password='$pass'";
		$sql ="SELECT b.idlogin, b.nivel, b.estado  FROM login AS b WHERE username = '$user' AND passname = MD5('$pass')";
		$result = $this->conn->ConsultaArray($sql);
		return $result;
	}
}
