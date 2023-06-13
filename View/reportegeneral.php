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
   <div class="col-md-2">
        <center><img src="img/fpatrias.jpg" width="150" height="150"></center>
    </div>

  <form action="" method="post" class="form"> 
       <p>REPORTE GENERAL</p>
         
       <div class="row">
              <div class="col-md-2 col-xs-2">
                  <label for="">FECHA INICIO: </label>
                  <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                          class="fas fa-calendar-alt"></i></span>
                              </div>
                  <input class="form-control" type="date" name="fechainicio" id="fechainicio" required>
              </div>
          </div>
       
              <div class="col-md-2 col-xs-2">
                  <label for="">FECHA FINAL: </label>
                  <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                          class="fas fa-calendar-alt"></i></span>
                              </div>
                  <input class="form-control" type="date" name="fechafinal" id="fechafinal" required>
              </div>
              </div>
            <input type="button" value="Consultar" id="btnSemanal" class="btn btn-primary">     
        </div>  
  </form>  

<div id="resultado"></div>
 

<script type="text/javascript">
 

  $("#btnSemanal").click(function(){
    
    var fecha1 = document.getElementById('fechainicio').value;
    var fecha2 = document.getElementById('fechafinal').value;
     
    console.log(fecha1);
    console.log(fecha2);
    $.ajax({
      type: "POST",                 
      data: {'fechainicio': fecha1,'fechafinal': fecha2},
      url: '../Controllers/reportegeneral.controller.php',
      error: function(er){
          $("#resultado").html(er);
      },
      success: function(res){
          $("#resultado").html(res);
      }
    });
  })
</script>
</body>
</html>

