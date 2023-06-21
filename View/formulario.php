<?php
require 'header.php';
require "../Models/searchUser.model.php";

@$numsolicitud = $_REQUEST['numerosoli'];
$search = new Search();

$fecha = date('Y-m-d');

if(is_null($numsolicitud))
{
  #echo "Vacio";
  $dataEscritura = $search->DatosEscritura(3);

  $codusuario  = $dataEscritura['codUsu'];
  $codTipoSol  = $dataEscritura['codTipSol'];
  $idSol       = $dataEscritura['idSol'];
  $fecCreacion = $dataEscritura['fecCreacion'];

  #dataEscritura 
  $datosUsuario = $search->DatosUsuario($codusuario);
  $tipoEscritura = $search->DatosTipoEscritura($idSol);
  $codNotario = $tipoEscritura['codNot'];
  $datosNotario = $search->DatosNotario($codNotario);
}else{
  #echo "Lleno" . $numsolicitud;
  $dataEscritura = $search->DatosEscritura($numsolicitud);

  $codusuario  = $dataEscritura['codUsu'];
  $codTipoSol  = $dataEscritura['codTipSol'];
  $idSol       = $dataEscritura['idSol'];
  $fecCreacion = $dataEscritura['fecCreacion'];

  if($codTipoSol == 1){
    echo "Escritura";
    #dataEscritura 
    $datosUsuario = $search->DatosUsuario($codusuario);
    $tipoEscritura = $search->DatosTipoEscritura($idSol);
    $codNotario = $tipoEscritura['codNot'];
    $datosNotario = $search->DatosNotario($codNotario);

  ?>
      <form action="../Controllers/formulario.controller.php" method="post">

        <div class="grid-x grid-margin-x">
            <div class="medium-4 cell">
              <label for="">
                Numero de solicitud
                <input type="text" name="numsoli" id="numsoli" value="<?php echo $numsolicitud; ?>">
              </label>
              
              <label>Nombre del usuario:
                <input type="text" name="txtnombre" id="txtnombre" value="<?php echo $datosUsuario['persona'];?>">
              </label>
              <label for="">
                <p>-</p>
              </label>
              
              <hr>
                
                <label>Que documento se ha otorgado?
                  <select name="tipodoc" id="tipodoc" class="form-control" required>
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
                <p><?php echo $datosUsuario['numDoc'];?></p>
              </label>
              <label for="">Tipo de Escritura:
                <p><?php echo $tipoEscritura['tipEsc'];?></p>
              </label>
              <label for="">Notario
                <input type="text" name="notario" id="notario" value="<?php echo $datosNotario['notario'] . " - (".$datosNotario['provincia'].")";?>">
                <p></p>
              </label>

              <hr>

              <label>Estado
                <select name="estado" id="estado" class="form-control">
                  <option value="Atendido">Atendido</option>
                  <option value="No Atendido">No Atendido</option>
                  <option value="Pendiente">Devuelto</option>
                </select>
              </label>

              <button type="button" class="button" name="btnNotario" id="btnNotario">Cambio de Notario</button>

              <div id="micombo"></div>
            </div>

            <div class="medium-4 cell">
              <label for="">Telefono
                <p><?php echo $datosUsuario['telefono']; ?></p>
              </label>
                <label>Fecha de Recepcion
                  <input type="text" name="fecharecepcion" id="fecharecepcion" value="<?php echo $fecCreacion;?>">
              </label>

              <label for="">
                <p>-</p>
              </label>
              <hr>

              <label>Fecha de Atencion
                  <input class="form-control" type="date" name="fechaatendida" id="fechaatendida" value="<?php echo $fecha; ?>" required>
                </label>
              
                
            </div>

            

            <div class="medium-4 cell">
                <label for="">Observacion
                  <textarea name="observacion" id="" cols="30" rows="4"></textarea>
                </label>

                <div class="medium-4 cell">
                  <button type="submit" class="button large">Guardar Informacion</button>
                </div>
            </div>

          
        </div>
        </div>
      </form>
  <?php
  }
  
  if($codTipoSol == 2){
    #echo "Nacimiento";
    $datosUsuario = $search->DatosUsuario($codusuario);
    $dataPartida = $search->DatosPartidas($idSol);
  ?>
    <form action="../Controllers/formulario.controller.php" method="post">

      <div class="grid-x grid-margin-x">
          <div class="medium-4 cell">
            <label for="">
              Numero de solicitud
              <input type="text" name="numsoli" id="numsoli" value="<?php echo $numsolicitud; ?>">
            </label>
            
            <label>Nombre del usuario:
              <input type="text" name="txtnombre" id="txtnombre" value="<?php echo $datosUsuario['persona'];?>">
            </label>
            <label for="">
              <p>-</p>
            </label>
            
            <hr>
              
              <label>Que documento se ha otorgado?
                <select name="tipodoc" id="tipodoc" class="form-control" required>
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
              <p><?php echo $datosUsuario['numDoc'];?></p>
            </label>
            <label for="">Tipo de Escritura:
              <p><?php echo $dataPartida['tipPar'];?></p>
            </label>
            <label for="">Provincia
              <input type="text" name="notario" id="notario" value="<?php echo $dataPartida['muni'];?>">
              <p></p>
            </label>

            <hr>

            <label>Estado
              <select name="estado" id="estado" class="form-control">
                <option value="Atendido">Atendido</option>
                <option value="No Atendido">No Atendido</option>
                <option value="Pendiente">Devuelto</option>
              </select>
            </label>

            <button type="button" class="button" name="btnNotario" id="btnNotario">Cambio de Notario</button>

            <div id="micombo"></div>
          </div>

          <div class="medium-4 cell">
            <label for="">Telefono
              <p><?php echo $datosUsuario['telefono']; ?></p>
            </label>
              <label>Fecha de Recepcion
                <input type="text" name="fecharecepcion" id="fecharecepcion" value="<?php echo $fecCreacion;?>">
            </label>

            <label for="">
              <p>-</p>
            </label>
            <hr>

            <label>Fecha de Atencion
                <input class="form-control" type="date" name="fechaatendida" id="fechaatendida" value="<?php echo $fecha; ?>" required>
            </label>
          </div>

          <div class="medium-4 cell">
              <label for="">Observacion
                <textarea name="observacion" id="" cols="30" rows="4"></textarea>
              </label>

              <div class="medium-4 cell">
                <button type="submit" class="button large">Guardar Informacion</button>
              </div>
          </div>

      </div>
      
    </form>

<?php
  }
  
  if($codTipoSol == 3){
    #echo "Expediente";
    #tipExpJud, materia, demandante, demandado
    $datosUsuario = $search->DatosUsuario($codusuario);
    $dataExpediente = $search->DatosExpediente($idSol);
    ?>
    <form action="../Controllers/formulario.controller.php" method="post">

      <div class="grid-x grid-margin-x">
          <div class="medium-4 cell">
            <label for="">
              Numero de solicitud
              <input type="text" name="numsoli" id="numsoli" value="<?php echo $numsolicitud; ?>">
            </label>
            
            <label>Nombre del usuario:
              <input type="text" name="txtnombre" id="txtnombre" value="<?php echo $datosUsuario['persona'];?>">
            </label>
            <label for="">
              <p>-</p>
            </label>
            
            <hr>
              
              <label>Que documento se ha otorgado?
                <select name="tipodoc" id="tipodoc" class="form-control" required>
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
              <p><?php echo $datosUsuario['numDoc'];?></p>
            </label>
            <label for="">Tipo de Escritura:
              <p><?php echo $dataExpediente['tipExpJud'];?></p>
            </label>
            <label for="">Provincia
              <input type="text" name="notario" id="notario" value="<?php echo $dataExpediente['materia'];?>">
              <p></p>
            </label>

            <hr>

            <label>Estado
              <select name="estado" id="estado" class="form-control">
                <option value="Atendido">Atendido</option>
                <option value="No Atendido">No Atendido</option>
                <option value="Pendiente">Devuelto</option>
              </select>
            </label>

            <button type="button" class="button" name="btnNotario" id="btnNotario">Cambio de Notario</button>

            <div id="micombo"></div>
          </div>

          <div class="medium-4 cell">
            <label for="">Telefono
              <p><?php echo $datosUsuario['telefono']; ?></p>
            </label>
              <label>Fecha de Recepcion
                <input type="text" name="fecharecepcion" id="fecharecepcion" value="<?php echo $fecCreacion;?>">
            </label>

            <label for="">
              <p>-</p>
            </label>
            <hr>

            <label>Fecha de Atencion
                <input class="form-control" type="date" name="fechaatendida" id="fechaatendida" value="<?php echo $fecha; ?>" required>
            </label>
          </div>

          <div class="medium-4 cell">
              <label for="">Observacion
                <textarea name="observacion" id="" cols="30" rows="4"></textarea>
              </label>

              <div class="medium-4 cell">
                <button type="submit" class="button large">Guardar Informacion</button>
              </div>
          </div>

      </div>
      
    </form>

<?php
    
  } 
}

/*
#var_dump($datosUsuario);
#var_dump($tipoEscritura);
#var_dump($datosNotario);

$datosUsuario['persona'];
$datosUsuario['numDoc'];
$datosUsuario['telefono'];

$tipoEscritura['tipEsc'];

$datosNotario['notario'];
$datosNotario['provincia'];

*/


?>

<script type="text/javascript">
  function cambiar()
  {
    var nuevoNot = document.getElementById("cbonotario");
    var selected = nuevoNot.options[nuevoNot.selectedIndex].text;
    //alert(selected);

    document.getElementById("notario").value = selected;
  }
</script>


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

<!-- 
  FORMULARIO DE REGISTRO DE INFORMACION
-->


<script type="text/javascript">
  $(document).ready(function(){

    $("#btnNotario").click(function(){
      $.ajax({
        url : '../Controllers/changeNotario.controller.php',
        type : 'GET',
      
        success : function(res) {
            $('#micombo').html(res);
            var button = '<button type="button" class="button success" id="changeNot" name="changeNot" onclick="cambiar()">Cambiar Notario</button>';
            $('#micombo').append(button);
        },
        error : function(xhr, status) {
            alert('Disculpe, existió un problema');
        }
      });
    });

  });

</script>




<?php require "footer.php"; ?>