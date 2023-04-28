<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Store Shop</title>
    <link rel="shortcut icon" href="img/tacon.png">
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600&display=swap" rel="stylesheet">

</head>

<body class="text-center">

    <?php require 'function/ingresarFecha.php'; ?>
    
    <section class="main">

        <figure class="main__figure">
            <img src="img/zapatillas.jpg" class="main__img">
        </figure>

        <div class="main__contact">

            <h2 class="main__title">Iniciar sesión</h2>

            <form class="main__form" action="function/validar.php" method="POST">

                <input type="email" name="user" placeholder="Ingrese su correo" class="main__input" required>

                <input type="password" name="pass" placeholder="Contraseña" class="main__input" required>

                <input type="hidden" name="fecha" class="form-control"placeholder="fecha" value="<?= $fecha_actual ?>">

                <input type="submit" value="Ingresar" class="main__input main__input--send">

            </form>

            <a href="">

                <body vlink="white"> ¿Olvidaste tu contraseña?
            </a>

            <p>¿No tienes una cuenta? <a class="link" href="register.php">Registrate</a></p>

            <p class="main__paragraph">O iniciar con: </p>

            <article class="main__social">

                <a href="#" class="main__link">
                    <img src="img/google-icon.svg" class="main__icon">
                </a>

                <a href="#" class="main__link">
                    <img src="img/facebook.svg" class="main__icon">
                </a>

            </article>

        </div>

    </section>

</body>

</html>