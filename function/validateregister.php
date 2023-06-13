<?php

include 'conexion.php';

$name = $_POST["name"];
$user = $_POST['user'];
$password = $_POST['pass'];

$salt = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 2);

$contrasena_encriptada = crypt($password, $salt);

$sql = "INSERT INTO proyecto.acces(cod_user, name_user, email_user, password) 
            VALUES(DEFAULT,'$name','$user','$contrasena_encriptada')";

        $result = pg_query($conexion, $sql);

        if ($result) {
            echo '<script> alert("Registro exitoso") </script>';
            header("Location:../login.php");
        } else {
            echo '<script> alert("No se pudo realizar el registro") </script>';
        }
?>