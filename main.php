<?php
session_start();

require_once 'function/conexion.php';

$nombre = $_SESSION['name_user'];

?>

<!--Inicio del contenido principal-->
<?php require_once "views/parte_superior.php"?>

<div class="container">
    <div class="row">
        <div class="col">
            <center><img src="assets/img/undraw_reading_time_re_phf7.svg" alt=""></center>
        </div>
    </div>
</div>

<!--Fin del contenido principal-->

<?php require_once "views/parte_inferior.php" ?>