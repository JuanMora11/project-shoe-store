<?php
session_start();

require_once 'function/conexion.php';

$nombre = $_SESSION['name_user'];

//$query = "SELECT nit, name_supplier, address, phone_number FROM proyecto.supplier";

$query = "SELECT su.nit, su.name_supplier, su.phone_number, c.name_country, s.name_state, ci.name_city
            FROM proyecto.country c
	            INNER JOIN proyecto.state s ON (c.cod_country = s.cod_country)
                INNER JOIN proyecto.city ci ON (s.cod_country = ci.cod_country) 
								            AND (s.cod_state = ci.cod_state)
                INNER JOIN proyecto.supplier su ON (ci.cod_country = su.country) 
									            AND (ci.cod_state = su.state) 
									            AND (ci.cod_city = su.city);";


$result = pg_query($conexion, $query);

$query2 = "SELECT cod_country, name_country from proyecto.country";

$result2 = pg_query($conexion, $query2);

$query3 = "SELECT cod_state, name_state from proyecto.state";

$result3 = pg_query($conexion, $query3);

$query4 = "SELECT cod_city, name_city from proyecto.city";

$result4 = pg_query($conexion, $query4);

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
        <div class="col-2"></div>
        <div class="col">
            <center>
                <h3>Proveedores</h3>
            </center>
        </div>
        <div class="col">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">
                Ingresar proveedor
            </button>
            <div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Ingresar nuevo proveedor</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <main class="form-signin">
                                <form class="form" action="function/register_supplier.php" method="post">

                                    <input class="form-control" name="nit" type="number" placeholder="Número de NIT" aria-label="default input example" required>

                                    <input class="form-control" name="name_supplier" type="text" placeholder="Nombre del proveedor" aria-label="default input example" required>

                                    <input class="form-control" name="phone" type="text" placeholder="Número de telefono" aria-label="default input example" required>

                                    <select class="form-select fieldlabels" name="country" aria-label="Default select example" required>
                                        <option selected>País</option>
                                        <?php while ($row = pg_fetch_assoc($result2)) { ?>
                                            <option value="<?php echo $row['cod_country']; ?>"><?php echo $row['name_country']; ?></option>
                                        <?php } ?>
                                    </select>

                                    <select class="form-select fieldlabels" name="state" aria-label="Default select example" required>
                                        <option selected>Departamento</option>
                                        <?php while ($row = pg_fetch_assoc($result3)) { ?>
                                            <option value="<?php echo $row['cod_state']; ?>"><?php echo $row['name_state']; ?></option>
                                        <?php } ?>
                                    </select>

                                    <select class="form-select fieldlabels" name="city" aria-label="Default select example" required>
                                        <option selected>Ciudad</option>
                                        <?php while ($row = pg_fetch_assoc($result4)) { ?>
                                            <option value="<?php echo $row['cod_city']; ?>"><?php echo $row['name_city']; ?></option>
                                        <?php } ?>
                                    </select>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="w-200 btn btn-primary">Guardar</button>
                                    </div>

                                </form>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-1"></div>
        <div class="col">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">
                            <center>#NIT</center>
                        </th>
                        <th scope="col">
                            <center>Nombre del proveedor</center>
                        </th>
                        <th scope="col">
                            <center>Telefono</center>
                        </th>
                        <th scope="col">
                            <center>País</center>
                        </th>
                        <th scope="col">
                            <center>Departamento</center>
                        </th>
                        <th scope="col">
                            <center>Ciudad</center>
                        </th>
                        <th scope="col">
                            <center></center>
                        </th>
                    </tr>
                </thead>
                <?php while ($row = pg_fetch_assoc($result)) { ?>
                    <tbody>
                        <tr>
                            <th scope="row">
                                <center>
                                    <h5><?php echo $row['nit']; ?></h5>
                                </center>
                            </th>
                            <td>
                                <center>
                                    <h5><?php echo $row['name_supplier']; ?></h5>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <h5><?php echo $row['phone_number']; ?></h5>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <h5><?php echo $row['name_country']; ?></h5>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <h5><?php echo $row['name_state']; ?></h5>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <h5><?php echo $row['name_city']; ?></h5>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <script type="text/javascript">
                                        function confirmDelete(id) {
                                            var confirmar = confirm("¿Está seguro de eliminar este proveedor?");
                                            if (confirmar) {
                                                return true;
                                            } else {
                                                return false;
                                            }
                                        }
                                    </script>
                                    <!-- Button trigger modal -->
                                    <form method="post" action="function/delete_supplier.php">
                                        <input type="hidden" name="nit" value="<?php echo $row['nit'] ?>">
                                        <button onclick="return confirmDelete();" type="submit" class="w-101 btn btn-lg btn-primary">Eliminar</button>
                                    </form>
                                </center>
                            </td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>
        <div class="col-1"></div>
    </div>
</div>

<!--Fin del contenido principal-->
<?php require_once "views/parte_inferior.php" ?>