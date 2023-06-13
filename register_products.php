<?php
session_start();

require_once 'function/conexion.php';

$nombre = $_SESSION['name_user'];

$query = "SELECT nit, name_supplier from proyecto.supplier";

$result = pg_query($conexion, $query);

?>

<!--Inicio del contenido principal-->
<?php require_once "views/parte_superior.php" ?>

<br>
<div class="container">
    <div class="row">
        <div class="col">
            <section class="main">
                <div class="main__contact">
                    <h2 class="main__title">Registrar productos</h2>
                    <form class="main__form" action="function/registerproducts.php" method="post">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <input type="hidden" name="cod_product" value="<?php echo $row['cod_product'] ?>">
                                    <br>
                                    <input type="text" name="name" placeholder="Nombre artículo" class="main__input" required>
                                    <br><br>
                                    <input type="number" name="price" placeholder="Valor" class="main__input" required>
                                    <br><br>
                                    <select class="main__input" name="size" aria-label="Default select example" required>
                                        <option selected>Talla</option>
                                        <option value="1">34</option>
                                        <option value="2">35</option>
                                        <option value="3">36</option>
                                        <option value="4">37</option>
                                        <option value="5">38</option>
                                        <option value="6">39</option>
                                    </select>
                                    <br><br>
                                    <select class="main__input" name="material" aria-label="Default select example" required>
                                        <option selected>Material</option>
                                        <option value="1">Cuero</option>
                                        <option value="2">Tela</option>
                                        <option value="3">Sintetico</option>
                                    </select>
                                    <br><br>
                                    <select class="main__input" name="color" aria-label="Default select example" required>
                                        <option selected>Color</option>
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
                                    <br><br>
                                    <input type="number" name="amount" placeholder="Cantidad" class="main__input" required>
                                    <br><br>
                                    <select class="main__input" name="supplier" aria-label="Default select example" required>
                                        <option selected>Proveedor</option>
                                        <?php while ($row = pg_fetch_assoc($result)) { ?>
                                            <option value="<?php echo $row['nit']; ?>"><?php echo $row['name_supplier']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <br><br>
                                    <input type="submit" value="Ingresar" class="main__input main__input--send">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>
<br>

<!--Fin del contenido principal-->

<?php require_once "views/parte_inferior.php" ?>