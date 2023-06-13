<?php
require 'header.php';
require "../Models/searchUser.model.php";

@$numsolicitud = $_REQUEST['numerosoli'];
$search2 = new Search2();

if(is_null($numsolicitud))
{
  $datUsuario = $search2->SearchUsuarioRecepcion(1);
}else{
  echo "Lleno" . $numsolicitud;
  $datUsuario = $search2->SearchUsuarioRecepcion($numsolicitud);
}

$fecha = date('Y-m-d');
?>


<form>
  <div class="grid-container">
    <div class="grid-x">
      <div class="medium-2 cell">
        <label>Numero de Solicitud:
            <input class="form-control" type="text" name="numerosoli" required>
        </label>
        
      </div>

      <div class="medium-2 cell">
        <br>
        <button type="submit" class="button ">Buscar</button>
        <label>
          <p>Solicitud Buscada: <?php echo $numsolicitud;?></p>
        </label>
      </div>
    </div>
</form>

<form action="../Controllers/formulario.controller.php" method="post">

    <div class="grid-x grid-margin-x">
        <div class="medium-4 cell">
          <label>Nombre del usuario:
                <input class="form-control" type="text" name="txtnombre" value="<?php echo $datUsuario['nom_usuario'];?>" required>
          </label>
          
            
            
            <label>Tipo de Expediente:
              <select name="tipodoc" required="required" class="form-control" required>
                    <option value="Testimonio">Testimonio </option>
                    <option value="Copia Certificada"> Copia Certificada </option>
                    <option value="Copia Certificada por Expediente civil"> Copia Certificada por Expediente civl </option>
                    <option value="Constancia por Escritura"> Constancia por Escritura</option>
                    <option value="Constancia por Expediente civil"> Constancia por Expediente civil</option>
                    <option value="Constancia por Partida">Constancia por Partida</option>
                    <option value="C.C. Nacimiento"> C.C. Nacimiento</option>
                    <option value="C.C. Matrimonio"> C.C. Matrimonio</option>
                    <option value="C.C. Defuncion"> C.C. Defuncion</option>
                    <option value="Copia Simple"> Copia Simple</option>
                    <option value="N.A."> N.A. </option>
                    <option value="Exhibicion"> Exhibicion </option>
                    <option value="Devuelto"> Devuelto </option>
              </select>
            </label>
        </div>


        <div class="medium-4 cell">
          <label>DNI:
                  <input class="form-control" type="text" name="txtdni" value="<?php echo $datUsuario['numDoc'];?>" required>
          </label>

          <label>Estado</label>
          <select name="estado" class="form-control">
                      <option value="Atendido">Atendido</option>
                      <option value="No Atendido">No Atendido</option>
                      <option value="Pendiente">Devuelto</option>
                    </select>
        </div>

        <div class="medium-4 cell">
            <label>Fecha de Recepcion:
                <input class="form-control" type="date" name="fecharecepcion" required>
            </label>

            <label>Fecha de Atencion
              <input class="form-control" type="date" name="fechaatendida" value="" required>
            </label>
        </div>

        <div class="medium-4 cell">
          <button type="submit" class="button large">Registrar</button>
        </div>
        
      
    </div>
  </div>
</form>


<?php require "footer.php"; ?>