<?php
include 'conexion.php';

$cod_product = $_POST['cod_product'];
$name = $_POST["name"];
$price = $_POST['price'];
$size = $_POST['size'];
$material = $_POST['material'];
$color = $_POST['color'];
$amount = $_POST['amount'];
$supplier = $_POST['supplier'];

$query = "UPDATE proyecto.product SET name_product='$name', price_product='$price', size_product=$size, 
            material=$material, color=$color, amount='$amount', nit=$supplier
            WHERE cod_product=$cod_product";

$result = pg_query($conexion, $query);

if (!$result) {
    echo "Error al actualizar el registro: " . pg_last_error($conexion);
    exit;
}

echo '<script> alert("Datos actualizados correctamente") </script>';

header("Location:../list_inventory.php");
?>