<?php
require 'header.php';
date_default_timezone_set('America/Los_Angeles');
?>
  <html>
  <body style="margin: 0px; background: #008080; height: 100%">
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <center><img src="img/fpatrias.jpg" width="150" height="150"></center>
      </div>
    </div>

    <form action="../Controllers/formulario.controller.php" method="post" class="form">     
     <center> <h5> FORMULARIO DE REGISTRO</h5></center>
         <div class="row">
     <div class="col-1">
            <label for="">Estado:</label>  
            <input class="form-control" type="text" name="numsoli" required>
        </div>
        </div>

      <div class="row">
            <div class="col-md-6 col-xs-6">

                <label for="">Fecha de Recepcion: </label>
                <input class="form-control" type="date" name="fecharecepcion" required>
            </div>
      </div>
      <div class="row">
        
        <div class="col-2">
            <label for="">Numero de Solicitud:</label>  
            <input class="form-control" type="text" name="numsoli" required>
        </div>
        <div class="col-10">
          <label for="">Nombre y Apellidos:</label>
          <input class="form-control" type="text" name="nombre" required>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <label for="">Selecione notario</label>
          <select name="notario" required="required" class="form-control" required>
              <option value=" 1">Federico Macedo </option>
              <option value=" 2">Victor M. Calderon </option>
              <option value="3">Gustavo Adolfo Sanchez Salas</option>
              <option value="4">Eduardo Aramayo Gonzales </option>
                            <option value="5">Benjamin Dueñas Tovar</option>
                              <option value="6"> Jose Miguel Navarro Calderon</option>
                               <option value="7">Edgar Lezano Zuñiga</option>
                               <option value="8"> Victor Manuel Romero</option>
                               <option value="9"> Julio Leonidas Frisancho</option>
                               <option value="10"> Jose Antonio Torres</option>
                              <option value="11"> Roberto Ramos Nuñez</option>
                              <option value="12"> Manuel Geronimo Romero Portugal </option>
                              <option value="13"> Roger Salluca Huaraya</option>
                              <option value="14">Ruperto Bustinza Ramos</option>
                              <option value="15"> Juan Chuquimia</option>
                              <option value="16"> Ruperto Bustinza Ramos</option>
                              <option value="17"> Otoya Arismendi</option>
                              <option value="18">Carlos Garcia </option>
                                <option value="19"> Domingo Choque Escobedo</option>
                                <option value="20"> Pastor Velasco Meza </option>
                                <option value="21"> Fermin Jimenez Ramirez</option>
                                <option value="22"> Ruperto Bustinza Ramos</option>
                                <option value="23">Filiberto Aparicio</option>
                                <option value="24"> Juan Clemente Murillo</option>
                                <option value="25"> Emiliano Vasquez</option>
                               <option value="26"> Manuel F. Aparicio Gomez</option>
                              <option value="27">Rolando Contreras Vargas </option>
                               <option value="28"> Renee Rodriguez Zea </option>
                                <option value="29"> Manuel F. Bravo Calderon </option>
                               <option value="30">Ricardo Deza </option>
                                <option value="31"> Juan Jose Salcedo </option>
                                <option value="32"> Augusto Valdivia T. </option>
                                <option value="33"> Jose Maria Valdivia </option>
                               <option value="34"> Victor Echave </option>
                              <option value="35"> Victor M. Calderon </option>
                              <option value="36"> Lucio Beltran Flores </option>
                              <option value="37"> Angel Perez Lechuga </option>
                              <option value="38"> Jose Maria Valdivia </option>
                              <option value="Gustavo Adolfo Sanchez Salas"> Gustavo Adolfo Sanchez Salas </option>
                                <option value="Juan Carlos Ramos Peralta"> Juan Carlos Ramos Peralta</option>
                                <option value="Jesus Suni Huanca"> Jesus Suni Huanca</option>
                                <option value="Aristides Paniagua"> Aristides Paniagua </option>
                                <option value="Jose Diaz Bedregal"> Jose Diaz Bedregal </option>
                              <option value="Juan Francisco Bustinza">Juan Francisco Bustinza</option>   
                              <option value="Luis Jimenez Vargas">Luis Jimenez Vargas</option>
                                <option value="Santiago Machicao Galvez"> Santiago Machicao Galvez</option>
                                <option value=" Jorge Cuentas Vargas">Jorge Cuentas Vargas </option><option value="Miguel Pino Chavez">Miguel Pino Chavez</option>
                                <option value="Norka Jimenez Mendoza"> Norka Jimenez Mendoza</option>
                               <option value=" Benjamin Dueñas">Benjamin Dueñas </option>
                               <option value="Roger Salluca Huaraya">Roger Salluca Huaraya </option>
                              <option value="Manuel Aparicio Gomez">Manuel Aparicio Gomez </option>
                              <option value="Eduardo Bermejo Barriga"> Eduardo Bermejo Barriga </option>
                              <option value="Luis Alberto Luna Rhoddo">Luis Alberto Luna Rhoddo </option>
                              <option value="Hector P. Villena">Hector P. Villena </option>
                               <option value="Abelardo Aramayo Gonzales">Abelardo Aramayo Gonzales </option>
                              <option value=" Jorge Cuentas Vargas">Jorge Cuentas Vargas </option>
                              <option value="Hildebrando Castillo Sachun"> Hildebrando Castillo Sachun</option>
                               <option value="Emilio Vasquez Romero">Emilio Vasquez Romero </option>
                               <option value="Jose Paredes Fernandez">Jose Paredes Fernandez </option>
                              <option value="Olga Beatriz Eyzaguirre">Olga Beatriz Eyzaguirre</option>
                              <option value="Selmo Ivan Carcausto Tapia">Selmo Ivan Carcausto Tapia </option>
                              <option value="Gino Ernesto Yangali Iparraguirre"> Gino Ernesto Yangali Iparraguirre </option>
                               <option value="Luis Alfredo Cuba Ovalle"> Luis Alfredo Cuba Ovalle </option>
                              <option value="Luis Alfredo Vasquez Romero">Luis Alfredo Vasquez Romero </option>
                              <option value="Selmo Ivan Carcausto Tapia">Selmo Ivan Carcausto Tapia </option>
                              <option value="Jorge Cuentas Vargas"> Jorge Cuentas Vargas</option>
                              <option value="Francisco Santa Cruz Zegarra"> Francisco Santa Cruz Zegarra </option>
                              <option value="Darwin Jonhson Gallegos Paz"> Darwin Jonhson Gallegos Paz</option>
                              <option value="Jose Maria Valdivia">Jose Maria Valdivia </option>
                              <option value="Juan Clemente Murillo"> Juan Clemente Murillo</option>
                              <option value="Juan M. San Martin">Juan M. San Martin </option><option value="Carlos Toranzos">Carlos Toranzos </option>
                              <option value="Simon Gonzales">Simon Gonzales </option><option value="Jesus Rivera">Jesus Rivera </option>
                                <option value="Mariano C. Garnica">Mariano C. Garnica </option>
                                <option value="Alfredo Aramato">Alfredo Aramato </option><option value="Adolfo Ancienta">Adolfo Ancienta </option>
                                <option value="Guillermo Garnica">Guillermo Garnica </option><option value="Jose Patron">Jose Patron</option>
                                <option value="Luis Ponce"> Luis Ponce </option>
                                <option value="Domingo Choque">Domingo Choque</option>
                                <option value="Eladio Quiroga"> Eladio Quiroga </option>
                                <option value="Juana R. CH. de Cabala">Juana R. CH. de Cabala</option>
                                <option value="Felix Morales">Felix Morales </option>
                                <option value="Olga Garcia de Varcarcel">Olga Garcia de Varcarcel </option>
                                <option value="Hector Efrain Garnica Rosado">Hector Efrain Garnica Rosado </option>
                              <option value="Julio Ernesto Garnica Rosado">Julio Ernesto Garnica Rosado </option>
                              <option value="Julio Edgar Lezano Zuñiga">Julio Edgar Lezano Zuñiga </option>
                               <option value="Elard Wilfredo Vilca Monteagudo">Elard Wilfredo Vilca Monteagudo </option>
                               <option value="N.A."> - </option>

          </select>
        </div>
        <div class="col-6">
          <label for="">Tipo de Expediente</label>
            <select name="tipodoc" required="required" class="form-control" required>
                  <option value="1">Testimonio </option>
                  <option value="2"> Copia Certificada </option>
                 <option value="3"> Constancia por Escritura</option>
                  <option value="4">Constancia por Partida</option>
                  <option value=" 5"> C.C. Nacimiento</option>
                  <option value="6"> C.C. Matrimonio</option>
                  <option value="7"> C.C. Defuncion</option>
                  <option value="8"> Copia Simple</option>
                  <option value="9"> N.A. </option>
                  <option value="10"> Exhibicion </option>

            </select>
        </div>
      </div>  

      <div class="row">
        <div class="col-md-12">
          <label for="">Fecha de Atencion</label>
          <input class="form-control" type="date" name="fechaatendida" required>
          <label for="">Observacion:</label>
          <input class="form-control" type="text" name="observacion" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <input type="submit" value="REGISTRAR" class="btn btn-primary">
        </div>
      </div>             
    </form>
</div>  
</body>
</html>


