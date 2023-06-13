<?php
require 'header.php';
date_default_timezone_set('America/Los_Angeles');
?>
  <html>
  <body style="margin: 0px; background: #008080; height: 100%">
<div class="container">
    <div class="row">
      <div class="col-md-2">
        <font face="Comic Sans MS,arial,verdana"><p style="color:white;">RECEPCION DE OFICIOS</p></font>
        <center><img src="img/fpatrias.jpg" width="150" height="150"></center>
      </div>
    </div>

    <form action="../Controllers/oficio.controller.php" method="post" class="form">     
 
      <div class="row">
            <div class="col-md-2 col-xs-2">
                <label for="">Fecha de recepcion: </label>
                <input class="form-control" type="date" name="fecharecepcion" required>
            </div>
             <div class="col-4">
            <label for="">Numero de Oficio</label>  
            <input class="form-control" type="text" name="numofi" required>
        </div>
         <div class="col-4">
          <label for="">Nombres y Apellidos</label>
          <input class="form-control" type="text" name="nombre" required>
        </div>
         <div class="col-2">
          <label for="">Procedencia del Documento</label>
            <select name="tipodoc" required="required" class="form-control" required>
                  <option value="Sunarp ">Sunarp </option>
                  <option value="Fiscalia de la Nacion"> Fiscalia de la Nacion </option>
                  <option value="Gobierno Regional Puno"> Gobierno Regional Puno </option>
                  <option value="Policia Nacional del Perú"> Policia Nacional del Perú </option>
                  <option value="Ministerio Publico"> Ministerio Publico </option>
                  <option value="Particular"> Particular </option>
                  <
            </select>
        </div>
      </div>
  

      <div class="row">
        <div class="col-md-2">
          <label for="">Fecha de Atencion</label>
          <input class="form-control" type="date" name="fechaatendida" required>
        </div>
        <div class="col-md-4">
          <label for="">Estado del Documento:</label>
          <input class="form-control" type="text" name="estado" required> 
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <input type="submit" value="REGISTRAR"class="btn btn-primary">
        </div>
      </div>             
    </form>
</div>   
</body>
</html>