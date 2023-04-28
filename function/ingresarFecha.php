<?php

require 'conexion.php';

date_default_timezone_set('America/Bogota');
$fecha_actual = date("Y-m-d H:i:s");

if (isset($_REQUEST['ingresar'])) {
    
    $fecha = $_POST['fecha'];
    
    $consulta = "INSERT INTO proyecto.audi_usuario(audi_id, date_start) VALUES(DEFAULT, '$fecha')";
    $ejecutar = pg_query($conexion, $consulta);
    
    if ($ejecutar) {
        echo '<script> alert("Fecha ingresada correctamente") </script>';
    } else {
        echo '<script> alert("Error") </script>';
    }
}

?>