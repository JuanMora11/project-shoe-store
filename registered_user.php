<?php
session_start();

require_once 'function/conexion.php';

$nombre = $_SESSION['name_user'];

$query = "SELECT cod_user, name_user, email_user FROM proyecto.acces";

$result = pg_query($conexion, $query);

if (!$conexion) {
    echo "Error de conexión a la base de datos.";
    exit;
}

?>

<!--Inicio del contenido principal-->
<?php require_once "views/parte_superior.php"; ?>

<br>
<div class="container">
    <div class="row">
        <div class="col">
            <center>
                <h3>Usuarios registrados</h3>
            </center>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-2"></div>
        <div class="col">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">
                            <center>#ID</center>
                        </th>
                        <th scope="col">
                            <center>Nombre de usuario</center>
                        </th>
                        <th scope="col">
                            <center>Correo eléctronico</center>
                        </th>
                    </tr>
                </thead>
                <?php while ($row = pg_fetch_assoc($result)) { ?>
                    <tbody>
                        <tr>
                            <th scope="row">
                                <center><h5><?php echo $row['cod_user']; ?></h5></center>
                            </th>
                            <td>
                                <center><h5><?php echo $row['name_user']; ?></h5></center>
                            </td>
                            <td>
                                <center><h5><?php echo $row['email_user']; ?></h5></center>
                            </td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>
        <div class="col-2"></div>
    </div>
</div>

<!--Fin del contenido principal-->
<?php require_once "views/parte_inferior.php" ?>