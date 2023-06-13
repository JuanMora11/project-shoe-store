<?php

include 'conexion.php';

$name = $_POST["name"];
$price = $_POST['price'];
$size = $_POST['size'];
$material = $_POST['material'];
$color = $_POST['color'];
$amount = $_POST['amount'];
$supplier = $_POST['supplier'];

$sql = "INSERT INTO proyecto.product(cod_product, name_product, price_product, size_product, material, color, amount, nit) 
            VALUES(DEFAULT,'$name','$price', $size, $material, $color,'$amount', $supplier)";

        $result = pg_query($conexion, $sql);

        if (!$result) {
            echo "Error al crear un nuevo registro.";
            exit;
        }

        header("Location:../register_products.php");
        echo '<script> alert("Datos registrados correctamente") </script>';

?>