<?php
session_start();

require_once 'function/conexion.php';

$nombre = $_SESSION['name_user'];

?>

<!--Inicio del contenido principal-->
<?php require_once "views/parte_superior.php" ?>

<br>
<div class="container">
    <div class="row">
        <div class="col-4">
            <center>
                <h3>Ventas anuales</h3>
            </center>
        </div>
        <div class="col-8"></div>
    </div>
    <br>
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <h5>
                <center>Digite la fecha</center>
            </h5>
        </div>
        <div class="col">
            <div class="mb-3">
                <input type="date" class="form-control" id="exampleFormControlInput1">
            </div>
        </div>
        <div class="col">
            <input type="submit" value="Buscar" class="btn btn-secondary">
        </div>
        <div class="col"></div>
    </div>
    <div class="row">
        <div class="col">
            <center>
                <span style="color:gray">Nota: Se mostrarán las ventas realizadas desde la fecha escogida hasta 365 días después.</span>
            </center>
        </div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">
                            <center>#ID</center>
                        </th>
                        <th scope="col">
                            <center>Descripción</center>
                        </th>
                        <th scope="col">
                            <center>Valor</center>
                        </th>
                        <th scope="col">
                            <center>Talla</center>
                        </th>
                        <th scope="col">
                            <center>Material</center>
                        </th>
                        <th scope="col">
                            <center>Color</center>
                        </th>
                        <th scope="col">
                            <center>Fecha</center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">
                            <center>1</center>
                        </th>
                        <td>
                            <center>Tacón alto</center>
                        </td>
                        <td>
                            <center>150.000</center>
                        </td>
                        <td>
                            <center>36</center>
                        </td>
                        <td>
                            <center>Cuero</center>
                        </td>
                        <td>
                            <center>Negro</center>
                        </td>
                        <td>
                            <center>02/05/2023</center>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <center>2</center>
                        </th>
                        <td>
                            <center>Zapato deportivo</center>
                        </td>
                        <td>
                            <center>120.000</center>
                        </td>
                        <td>
                            <center>35</center>
                        </td>
                        <td>
                            <center>Tela</center>
                        </td>
                        <td>
                            <center>Blanco</center>
                        </td>
                        <td>
                            <center>02/05/2023</center>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-1"></div>
    </div>
</div>

<!--Fin del contenido principal-->

<?php require_once "views/parte_inferior.php" ?>