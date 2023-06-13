<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Store Shop</title>
    <link rel="shorcut icon" href="assets/img/tacon.png">

    <link rel="stylesheet" href="css/register.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    <script src="js/validarRegister.js"></script>
</head>

<body class="text-center">

    <section class="main">
        <figure class="main__figure">
            <img src="assets/img/zapatillas.jpg" class="main__img">
        </figure>
        <div class="main__contact">
            <h2 class="main__title">Registrarse</h2>
            <form class="main__form" action="function/validateregister.php" method="post">
                <input type="text" name="name" placeholder="Ingrese su nombre" class="main__input" required>
                <input type="email" name="user" placeholder="Ingrese su correo" class="main__input" required>
                <input type="password" name="pass" placeholder="Contraseña" class="main__input" required>
                <input type="submit" value="Ingresar" class="main__input main__input--send">
            </form>
            <a href="">

                <body vlink="white"> ¿Olvidaste tu contraseña?
            </a>
            <p>¿Ya tienes una cuenta? <a class="link" href="login.php">Iniciar sesión</a></p>
            <p class="main__paragraph">O registrarse con: </p>
            <article class="main__social">
                <a href="#" class="main__link">
                    <img src="assets/img/google-icon.svg" class="main__icon">
                </a>
                <a href="#" class="main__link">
                    <img src="assets/img/facebook.svg" class="main__icon">
                </a>
            </article>
        </div>
    </section>

</body>

</html>