<?php

include 'conexion.php';

$nombre = $_POST["nombre"];
$usuario = $_POST['user'];
$clave = $_POST['pass'];

$sql = "INSERT INTO proyecto.usuario(cod_usuario, nombre_usuario, email_usuario, contrasena) 
            VALUES(DEFAULT,'$nombre','$usuario','$clave')";

        pg_query($conexion, $sql);

        header("Location:../index.php");

?>