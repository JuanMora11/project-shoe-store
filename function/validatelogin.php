<?php

require 'conexion.php';

$name=$_POST['name_user'];
$password=$_POST['password'];

$query=("SELECT password FROM proyecto.acces
    WHERE name_user='$name'");

$consulta=pg_query($conexion, $query);
$cantidad=pg_fetch_assoc($consulta);
$contrasena_encriptada_almacenada = $cantidad['password'];

if (crypt($password, $contrasena_encriptada_almacenada) === $contrasena_encriptada_almacenada) {
    if ($cantidad>=1) {

        if ($name=='Camila Cabrales') {
            session_start();
    
            $_SESSION['name_user'] = $name;
            header('Location:../main.php');
        } else {
    
        session_start();
    
        $_SESSION['name_user'] = $name;
        header('Location:../index.php');}
    
    } else {
        echo '<script> alert("Los datos son incorrectos") </script>';
        header('Location:../login.php');
    }
    echo "Inicio de sesión exitoso";
} else {
    // Contraseña inválida
    // Mostrar un mensaje de error o redirigir al usuario
    echo "Credenciales de inicio de sesión inválidas";
}


