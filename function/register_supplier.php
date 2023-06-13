<?php

include 'conexion.php';

$nit = $_POST["nit"];
$name_supplier = $_POST['name_supplier'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];

$sql = "INSERT INTO proyecto.supplier(nit, name_supplier, phone_number, country, state, city) 
            VALUES('$nit', '$name_supplier', '$phone', $country::text, $state::text, $city)";

        $result = pg_query($conexion, $sql);

        if (!$result) {
            echo "Error al crear un nuevo registro.";
            exit;
        }

        header("Location:../list_supplier.php");
        echo '<script> alert("Datos registrados correctamente") </script>';

?>