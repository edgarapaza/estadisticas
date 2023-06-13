<?php
require 'header.php';
require "../Models/consulta.php";

$numerosolcitud = $_REQUEST['numerosoli'];

$consulta = new Consulta();
$datos = $consulta->mostrarSolicitudRebusqueda($numerosolcitud);

?>
  <html>
<body style="margin: 0px; background: #008080; height: 100%">
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <center><img src="img/fpatrias.jpg" width="150" height="150"></center>
      </div>
    </div>
    <form action="">
      <div class="row">
        <div class="col-2">
            <label for="">Numero de Solicitud:</label>
            <input class="form-control" type="text" name="numerosoli" required>
        </div>
        <div class="col-10">
          <button type="submit" class="btn btn-success">Buscar</button>
        </div>
      </div>
    </form>



    <form action="../Controllers/formulario.controller.php" method="post" class="form">     
     <center> <h5> FORMULARIO DE REGISTRO</h5></center>
        <div>
          <div class="col-2">
            <label for="">Numero de Solicitud:</label>
            <input type="text" name="numsoli" value="<?php echo $datos['numsoli'];?>">
          </div>
          
        </div>
         <div class="row">
            <div class="col-3">
                
                <label for="">Estado:</label>  
                <select name="estado" class="form-control">
                  <option value="Atendido">Atendido</option>
                  <option value="No Atendido">No Atendido</option>
                  <option value="Pendiente">Devuelto</option>

                </select>
            </div>
            <div class="col-5">
                <label for="">Nombre del usuario:</label>  
                <input class="form-control" type="text" name="txtnombre" value="<?php echo $datos['nombre'];?>" required>
            </div>
            
        </div>

      <div class="row">
            <div class="col-md-2 col-xs-2">
                <label for="">Fecha de Recepcion: </label>
                <input class="form-control" type="date" name="fecharecepcion" value="<?php echo $datos['fecharecepcion'];?>" required>
                <br>
            </div>
                </br>
             <div class="col-md-6 col-xs-6">
               <label for="">Notario</label>
               <input type="text" value="<?php echo $datos['notario'];?>">
            </div>
            <div class="col-2">
              <label for="">Tipo de Expediente</label>
              <input type="text" value="<?php echo $datos['tipodoc'];?>">
            </div>
          </div>
      </form>

 
      
     
      <div class="row">
        <div class="col-md-12">
          <label for="">Fecha de Atencion</label>
          <input class="form-control" type="text" name="fechaatendida" value="<?php echo $datos['fechaatendida'];?>" required>
        </div>
      </div>

      </br>
      <br>
      <div class="row">
        <div class="col-md-12">
          <input type="submit" value="ACTUALIZAR - GUARDAR CAMBIOS" class="btn btn-primary">
        </div>
      </div>             
    </form>
</div>  
</body>
</html>


