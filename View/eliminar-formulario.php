<?php
require 'header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md">
        <form action="../Controllers/eli-formulario.controller.php" method="post" class="form">
            Ingrese el Id  a Eliminar <input class="form-control" type="text" name="idsol"><br>

            <input type="submit" value="ELIMINAR" class="btn btn-primary">
        </form>
        </div>
    </div>
</div>