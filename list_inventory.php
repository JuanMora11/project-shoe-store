<?php
session_start();

require_once 'function/conexion.php';

$nombre = $_SESSION['name_user'];

$query = "SELECT p.cod_product, p.name_product, p.price_product, s.number_size, m.type_material, c.type_color, p.amount, n.name_supplier
            FROM proyecto.product p
            INNER JOIN proyecto.size s ON (p.size_product = s.id_size)
            INNER JOIN proyecto.color c ON (p.color = c.id_type_color)
            INNER JOIN proyecto.material m ON (p.material = m.id_type_material)
            INNER JOIN proyecto.supplier n ON (p.nit = n.nit)
            WHERE p.cod_product > 0
            ORDER BY p.cod_product";

$result = pg_query($conexion, $query);

$query2 = "SELECT nit, name_supplier from proyecto.supplier";

$result2 = pg_query($conexion, $query2);

if (!$conexion) {
    echo "Error de conexión a la base de datos.";
    exit;
}
?>

<!--Inicio del contenido principal-->
<?php require_once "views/parte_superior.php" ?>

<br>
<div class="container">
    <div class="row">
        <div class="col">
            <center>
                <h3>Inventario de productos</h3>
            </center>
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
                            <center>Cantidad</center>
                        </th>
                        <th scope="col">
                            <center>Proveedor</center>
                        </th>
                        <th scope="col">
                            <center></center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = pg_fetch_assoc($result)) { ?>
                        <tr>
                            <td>
                                <center>
                                    <h5><?php echo $row['name_product']; ?></h5>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <h5><?php echo $row['price_product']; ?></h5>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <h5><?php echo $row['number_size']; ?></h5>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <h5><?php echo $row['type_material']; ?></h5>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <h5><?php echo $row['type_color']; ?></h5>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <h5><?php echo $row['amount']; ?></h5>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <h5><?php echo $row['name_supplier']; ?></h5>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <script type="text/javascript">
                                        function confirmDelete(id) {
                                            var confirmar = confirm("¿Está seguro de eliminar este producto?");
                                            if (confirmar) {
                                                return true;
                                            } else {
                                                return false;
                                            }
                                        }
                                    </script>
                                    <!-- Button trigger modal -->
                                    <form method="post" action="function/delete_product.php">
                                        <button type="button" class="w-100 btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#modal-<?php echo $row['cod_product'] ?>">
                                            Editar
                                        </button>
                                        <input type="hidden" name="cod_product" value="<?php echo $row['cod_product'] ?>">
                                        <button onclick="return confirmDelete();" type="submit" class="w-101 btn btn-lg btn-primary">Eliminar</button>
                                    </form>
                                </center>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="modal-<?php echo $row['cod_product'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Actualizar producto</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <main class="form-signin">
                                            <form class="form" action="function/update_products.php" method="post">
                                                <input type="hidden" name="cod_product" value="<?php echo $row['cod_product'] ?>">

                                                <input class="form-control" name="name" type="text" placeholder="Nombre del producto" aria-label="default input example" required>

                                                <input class="form-control" name="price" type="number" placeholder="Valor" aria-label="default input example" required>

                                                <select class="form-select fieldlabels" name="size" aria-label="Default select example" required>
                                                    <option selected disabled>Talla</option>
                                                    <option value="1">34</option>
                                                    <option value="2">35</option>
                                                    <option value="3">36</option>
                                                    <option value="4">37</option>
                                                    <option value="5">38</option>
                                                    <option value="6">39</option>
                                                </select>

                                                <select class="form-select fieldlabels" name="material" aria-label="Default select example" required>
                                                    <option selected disabled>Material</option>
                                                    <option value="1">Cuero</option>
                                                    <option value="2">Textil</option>
                                                    <option value="3">Sintetico</option>
                                                </select>

                                                <select class="form-select fieldlabels" name="color" aria-label="Default select example" required>
                                                    <option selected disabled>Color</option>
                                                    <option value="1">Negro</option>
                                                    <option value="2">Blanco</option>
                                                    <option value="3">Rojo</option>
                                                    <option value="4">Azul</option>
                                                    <option value="5">Rosado</option>
                                                    <option value="6">Amarillo</option>
                                                    <option value="7">Dorado</option>
                                                    <option value="8">Plateado</option>
                                                    <option value="9">Palorosa</option>
                                                </select>

                                                <input class="form-control" name="amount" type="number" placeholder="Cantidad" aria-label="default input example" required>

                                                <select class="form-select fieldlabels" name="supplier" aria-label="Default select example" required>
                                                    <option selected>Proveedor</option>
                                                    <?php while ($row = pg_fetch_assoc($result2)) { ?>
                                                        <option value="<?php echo $row['nit']; ?>"><?php echo $row['name_supplier']; ?></option>
                                                    <?php } ?>
                                                </select>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="w-200 btn btn-primary">Actualizar datos</button>
                                                </div>
                                            </form>
                                        </main>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="col-1"></div>
    </div>
</div>
<!--Fin del contenido principal-->
<?php require_once "views/parte_inferior.php" ?>