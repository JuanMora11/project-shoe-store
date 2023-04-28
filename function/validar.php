<?php

require 'conexion.php';

$email=$_POST['user'];
$password=$_POST['pass'];

$query=("SELECT * FROM proyecto.usuario 
    WHERE email_usuario='$email' AND contrasena='$password'");

$consulta=pg_query($conexion, $query);
$cantidad=pg_num_rows($consulta);

if ($cantidad>=1) {

    session_start();

    $_SESSION['email_usuario'] = $email;
    header('Location:../home.php');

} else {
    echo '<script> alert("Los datos son incorrectos") </script>';
    header('Location:../index.php');
}

?>