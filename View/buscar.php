
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
   <div class="row">
  <div class="col-md-2">
        <center><img src="img/archivo.jpg" width="150" height="150"></center>
    </div>
  </div>

  <form action="" method="post" class="form"> 
 
         
       <div class="row">
              <div class="col-md-3 col-xs-3">
                  <label for="">CONSULTE POR Numero de Solicitud: </label>
                   
                              < 
                  <input class="form-control" type="text" name="numsoli" id="numsoli" required>
              
              </div>
               <input type="button" value="Consultar"id="btnnum" class="btn btn-primary">
        </div>  
     
  </form>

  <form action="" method="post" class="form"> 
     
         
       <div class="row">
              <div class="col-md-4 col-xs-4">
                  <label for="">Nombres y Apellidos: </label>
                  <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                          class="fas fa-calendar-alt"></i></span>
                              </div>
                  <input class="form-control" type="text" name="nombre" id="nombre" required>
              </div>
          </div>
       
         <input type="button" value="Consultar" id="btnnombre" class="btn btn-primary">     
        </div>  
  </form>  

  <hr>
  <div id="resultado"></div>
  <div id="semanal"></div>

<script type="text/javascript">
  $("#btnnum").click(function(){
    var numsoli1 = document.getElementById('numsoli').value;
     console.log(numsoli1);
    $.ajax({
      type: "POST",                 
      data: {'numsoli': numsoli1},
      url: '../Controllers/buscar.controller.php',
      error: function(er){
          $("#resultado").html(er);
      },
      success: function(res){
          $("#resultado").html(res);
      }
    });
  })


  $("#btnnombre").click(function(){
    var nombre   = document.getElementById('nombre').value;
 
    console.log(nombre);
    $.ajax({
      type: "POST",                 
      data: {'nombre': nombre},
      url: '../Controllers/buscarnombre.controller.php',
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

