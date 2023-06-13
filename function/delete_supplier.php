<?php

include 'conexion.php';

// Obtener el ID del registro a eliminar desde la URL o el formulario
$nit = $_POST['nit'];


// Verificar si se ha enviado el formulario y se ha proporcionado un ID válido
if (isset($_POST['nit']) && !empty($nit)) {
    // Ejecutar la consulta de eliminación
    $query = "DELETE FROM proyecto.supplier WHERE nit = $nit::text";

    $resultado = pg_query($conexion, $query);

    if ($resultado) {
        // Eliminación exitosa
        echo "Registro eliminado correctamente";
        header("Location:../list_supplier.php");
    } else {
        // Error al eliminar
        echo "Error al eliminar el registro";
    }
}
?>