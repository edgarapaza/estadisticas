<?php
require 'header.php';
date_default_timezone_set('America/Los_Angeles');
?>
  <html>
  <body style="margin: 0px; background: #008080; height: 100%">
<div class="container">
    <div class="row">
      <div class="col-md-12">
       
        <center><img src="img/anotacion.jpg" width="600" height="250"></center>
      </div>
    </div>

    <form action="../Controllers/anotaciones.controller.php" method="post" class="form">     
      <br>
      <div class="row">
            <div class="col-md-2 col-xs-2">
                <label for="">Fecha de recepcion: </label>
                <input class="form-control" type="date" name="fecharecepcion" required>
            </div>
             <div class="col-3">
            <label for="">Numero de Oficio</label>  
            <input class="form-control" type="text" name="numofi" required>
        </div>
         <div class="col-3">
          <label for="">Nombre del Solicitante</label>
          <input class="form-control" type="text" name="nombre" required>
        </div>
        <div class="col-2">
          <label for="">Numero de Escritura</label>
          <input class="form-control" type="text" name="escritura" required>
        </div>
         <div class="col-2">
          <label for="">Notario</label>
            <select name="notario" required="required" class="form-control" required>
              <option value=" Federico Macedo">Federico Macedo </option>
              <option value=" Victor M. Calderon">Victor M. Calderon </option>
              <option value="Gustavo Adolfo Sanchez Salas">Gustavo Adolfo Sanchez Salas</option>
              <option value="Eduardo Aramayo Gonzales">Eduardo Aramayo Gonzales </option>
                            <option value="Benjamin Dueñas Tovar">Benjamin Dueñas Tovar</option>
                              <option value="Jose Miguel Navarro Calderon"> Jose Miguel Navarro Calderon</option>
                               <option value="Edgar Lezano Zuñiga">Edgar Lezano Zuñiga</option>
                               <option value="Victor Manuel Romero"> Victor Manuel Romero</option>
                               <option value="Julio Leonidas Frisancho"> Julio Leonidas Frisancho</option>
                               <option value="Jose Antonio Torres"> Jose Antonio Torres</option>
                              <option value="Roberto Ramos Nuñez"> Roberto Ramos Nuñez</option>
                              <option value="Manuel Geronimo Romero Portugal"> Manuel Geronimo Romero Portugal </option>
                              <option value="Roger Salluca Huaraya"> Roger Salluca Huaraya</option>
                              <option value="Ruperto Bustinza Ramos">Ruperto Bustinza Ramos</option>
                              <option value="Juan Chuquimia"> Juan Chuquimia</option>
                              <option value="Ruperto Bustinza Ramos"> Ruperto Bustinza Ramos</option>
                              <option value="Otoya Arismendi"> Otoya Arismendi</option>
                              <option value="Carlos Garcia">Carlos Garcia </option>
                                <option value="Domingo Choque Escobedo"> Domingo Choque Escobedo</option>
                                <option value="Pastor Velasco Meza"> Pastor Velasco Meza </option>
                                <option value="Fermin Jimenez Ramirez"> Fermin Jimenez Ramirez</option>
                                <option value="Ruperto Bustinza Ramos"> Ruperto Bustinza Ramos</option>
                                <option value="Filiberto Aparicio">Filiberto Aparicio</option>
                                <option value="Juan Clemente Murillo"> Juan Clemente Murillo</option>
                                <option value="Emiliano Vasquez"> Emiliano Vasquez</option>
                               <option value="Manuel F. Aparicio Gomez"> Manuel F. Aparicio Gomez</option>
                              <option value="Rolando Contreras Vargas">Rolando Contreras Vargas </option>
                               <option value="Renee Rodriguez Zea"> Renee Rodriguez Zea </option>
                                <option value="Manuel F. Bravo Calderon"> Manuel F. Bravo Calderon </option>
                               <option value="Ricardo Deza">Ricardo Deza </option>
                                <option value="Juan Jose Salcedo"> Juan Jose Salcedo </option>
                                <option value="Augusto Valdivia T."> Augusto Valdivia T. </option>
                                <option value="Jose Maria Valdivia"> Jose Maria Valdivia </option>
                               <option value="Victor Echave"> Victor Echave </option>
                              <option value="Victor M. Calderon"> Victor M. Calderon </option>
                              <option value="Lucio Beltran Flores"> Lucio Beltran Flores </option>
                              <option value="Angel Perez Lechuga"> Angel Perez Lechuga </option>
                              <option value="Jose Miguel Navarro Calderon"> Jose Maria Valdivia </option>
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
      </div>
  

      <div class="row">
        <div class="col-md-2">
          <label for="">Fecha de Atencion</label>
          <input class="form-control" type="date" name="fechaatendida" required>
        </div>
        <div class="col-md-4">
          <label for="">Estado de la Anotacion:</label>
          <input class="form-control" type="text" name="estado" required> 
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