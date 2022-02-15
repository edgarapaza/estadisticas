<?php
require 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Estadistica</title>
  <link rel="stylesheet" href="">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body style="margin: 0px; background: #008080; height: 100%">

  <form action="" method="post" class="form"> 
       <p>Consulta Diaria</p>
         
       <div class="row">
              <div class="col-md-4 col-xs-4">
                  <label for="">FECHA: </label>
                   <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                          class="fas fa-calendar-alt"></i></span>
                              </div>
                  <input class="form-control" type="date" name="fecha" id="fecha" required>
              </div>
              </div>
        </div>  
      <input type="button" value="Consultar"id="btnbuscar1" class="btn btn-primary">
  </form>

  <form action="" method="post" class="form"> 
       <p>Consulta Semanal</p>
         
       <div class="row">
              <div class="col-md-4 col-xs-4">
                  <label for="">FECHA INICIO: </label>
                  <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                          class="fas fa-calendar-alt"></i></span>
                              </div>
                  <input class="form-control" type="date" name="fechainicio" id="fechainicio" required>
              </div>
          </div>
       
              <div class="col-md-4 col-xs-4">
                  <label for="">FECHA FINAL: </label>
                  <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                          class="fas fa-calendar-alt"></i></span>
                              </div>
                  <input class="form-control" type="date" name="fechafinal" id="fechafinal" required>
              </div>
              </div>
              <div class="col-4">
            <label for="">Tipo de Expediente</label>
              <select name="tipodoc" id="tipodoc" class="form-control" required>
                    <option value="Testimonio">Testimonio </option>
                    <option value="Certificada"> Copia Certificada </option>
                    <option value="Simple"> Copia Simple </option>
                    <option value="Constancia"> Constancias </option>
                    <option value="Exhibicion"> Exhibicion </option>
                    <option value="N.A."> N.A. </option>
                    <option value="ATENCION PARTICULAR">ATENCION PARTICULAR </option>
                    <option value="SUNARP"> SUNARP </option>
                    <option value="FISCALIA"> FISCALIA </option>
                    <option value="ANOTACION MARGINAL"> ANOTACION MARGINAL </option>
                    <option value="COPIA INFORMATIVA"> COPIA INFORMATIVA </option>
                    <option value="COPIA INFORMATIVA">COPIA Simple </option>
                    <option value="TRANSCRIPCION"> TRANSCRIPCION</option>
                    <option value=" C.C. Nacimiento"> C.C. Nacimiento</option>
                    <option value="C.C. Matrimonio"> C.C. Matrimonio</option>
                    <option value="C.C. Defuncion"> C.C. Defuncion</option>
                    <option value="Constancia por Escritura"> Constancia por Escritura</option>
                    <option value="Constancia por Partida">Constancia por Partida</option>
                    <option value="Devuelto">Devuelto</option>
              </select>
          </div>

         <input type="button" value="Consultar" id="btnSemanal" class="btn btn-primary">     
        </div>  
  </form>  

  <hr>
 	<div id="resultado"></div>
  <div id="semanal"></div>

<script type="text/javascript">
  $("#btnbuscar1").click(function(){
    var fecha1 = document.getElementById('fecha').value;
    
    $.ajax({
      type: "POST",                 
      data: {'fecha': fecha1},
      url: '../Controllers/consulta1.controller.php',
      error: function(er){
          $("#resultado").html(er);
      },
      success: function(res){
          $("#resultado").html(res);
      }
    });
  })

  $("#btnSemanal").click(function(){
    
    var fecha1 = document.getElementById('fechainicio').value;
    var fecha2 = document.getElementById('fechafinal').value;
    var tipo   = document.getElementById('tipodoc').value;
    console.log(fecha1);
    console.log(fecha2);
    console.log(tipo);
    $.ajax({
      type: "POST",                 
      data: {'fechainicio': fecha1,'fechafinal': fecha2,'tipodoc': tipo},
      url: '../Controllers/consultasemanal.controller.php',
      error: function(er){
          $("#semanal").html(er);
      },
      success: function(res){
          $("#semanal").html(res);
      }
    });
  })
</script>
</body>
</html>

