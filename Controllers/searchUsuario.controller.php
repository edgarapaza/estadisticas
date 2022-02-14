<?php

require "../Models/searchUser.model.php";

$search2 = new Search2();
$datUsuario = $search2->SearchUsuarioRecepcion(130);

echo $datUsuario['nom_usuario']."<br>";
echo $datUsuario['numDoc']."<br>";
