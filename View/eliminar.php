<?php require 'header.php';?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="descripcion"  content="El Archivo Regional de Puno es una institución que protege el patrimonio cultural de la Region">
<meta name="keywords"  content= "archivo, regional, puno">
<head>
       <title>
        INICIO- ARCHIVO REGIONAL PUNO
       </title>

  <link rel="stylesheet"  href="style.css">
  <link rel="shortcut icon"  href="public/img/favicon.jpg">

</head>
<body>

  <HEADER>
    
    <div class="container">
      <a href="">
      
        <center> <img src="arpi.jpg"></center>
      </a>
      <br></br>
        <center> <h3><b>FORMULARIO PARA: ELIMINACION DE DATOS</b> </h3></center>
    </div>

  </HEADER>

<div class="container">
     
    <div class="row">
      <div class="col-md">
      <form action="../Controllers/principal.controller.php" method="post" class="form">     

   <b>NOMBRES Y APELLIDOS:</b> <br> <input class="form-control" type="text" name="nombre"><br>
            
       
            <input type="submit" value="ELIMINAR" class="btn btn-primary">
            <BR>
           

           




            <a href="reporte.php"> IR A REPORTE</a>
            <BR>

             <a href="principal.php"> IR A PRINCIPAL</a>
        </form>
        </div>
    </div>
</div>





</body>
</html>


