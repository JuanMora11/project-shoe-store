<?php

include 'conexion.php';

// Obtener el ID del registro a eliminar desde la URL o el formulario
$cod_product = $_POST['cod_product'];


// Verificar si se ha enviado el formulario y se ha proporcionado un ID válido
if (isset($_POST['cod_product']) && !empty($cod_product)) {
    // Ejecutar la consulta de eliminación
    $query = "DELETE FROM proyecto.product WHERE cod_product = $cod_product";

    $resultado = pg_query($conexion, $query);

    if ($resultado) {
        // Eliminación exitosa
        echo "Registro eliminado correctamente";
        header("Location:../list_inventory.php");
    } else {
        // Error al eliminar
        echo "Error al eliminar el registro";
    }
}
?>