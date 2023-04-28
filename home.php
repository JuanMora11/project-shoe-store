<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Store</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/canvas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="shorcut icon" href="img/tacon.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>

    <header class="main-header">
        <div class="container container--flex">
            <div class="main-header__container">
                <h1 class="main-header__title">SHOE STORE</h1>
                <span class="icon-menu" id="btn-menu"><i class="fas fa-bars"></i></span>
                <nav class="main-nav" id="main-nav">
                    <ul class="menu">
                        <li class="menu__item"><a href="" class="menu__link">INICIO</a></li>
                        <li class="menu__item"><a href="" class="menu__link">MARCAS</a></li>
                        <li class="menu__item"><a href="" class="menu__link">OFERTAS</a></li>
                        <li class="menu__item"><a href="" class="menu__link">COMPLEMENTOS</a></li>
                        <li class="menu__item"><a href="" class="menu__link">CONTACTO</a></li>
                    </ul>
                </nav>
            </div>
            <div class="main-header__container">
                <span class="main-header__txt">SERVICIO AL CLIENTE</span>
                <p class="main-header__txt"><i class="fas fa-phone"></i>(+57)318 604 9289</p>
            </div>
            <div class="main-header__container">

                <div class="flex-shrink-0 dropdown">
                    <a href="" class="d-block link-dark text-decoration-none dropdown-toggle fas fa-user" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false"></a><br>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="function/logout.php" role="button">
                                <i class="fas fa-user"></i> Mi cuenta
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="function/logout.php" role="button">
                                <i class="fas fa-power-off"></i> Cerar Sesión
                            </a>
                        </li>
                    </ul>
                </div>



                <a href="" class="main-header__btn">Mi carrito <i class="fas fa-shopping-cart"></i></a>
                <input type="search" class="main-header__input" placeholder="Buscar productos"><i class="fas fa-search"></i>
            </div>
        </div>
    </header>
    <div class="container-slider">
        <div class="slider" id="slider">
            <div class="slider__section">
                <img src="img/tienda.jpg" alt="" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">Women’s eyewear</h2>
                    <p class="slider__txt">Cool summer sale 50% off</p>
                    <a href="" class="btn-shop">SHOP NOW</a>
                </div>
            </div>
            <div class="slider__section">
                <img src="img/decoracion.jpg" alt="" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">Women’s eyewear</h2>
                    <p class="slider__txt">Cool summer sale 50% off</p>
                    <a href="" class="btn-shop">SHOP NOW</a>
                </div>
            </div>
            <div class="slider__section">
                <img src="img/estilos.jpg" alt="" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">Women’s eyewear</h2>
                    <p class="slider__txt">Cool summer sale 50% off</p>
                    <a href="" class="btn-shop">SHOP NOW</a>
                </div>
            </div>
            <div class="slider__section">
                <img src="img/almacen.jpg" alt="" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">Men’s eyewear</h2>
                    <p class="slider__txt">Cool summer sale 50% off</p>
                    <a href="" class="btn-shop">SHOP NOW</a>
                </div>
            </div>
        </div>
        <div class="slider__btn slider__btn--right" id="btn-right">&#62;</div>
        <div class="slider__btn slider__btn--left" id="btn-left">&#60;</div>
    </div>
    <main class="main">
        <div class="container">
            <h2 class="main-title">Productos destacados</h2>
            <section class="container-products">
                <div class="product">
                    <img src="img/pastel.jpg" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">Zapatilla de tacón grueso</h3>
                        <span class="product__price">$140.000</span>
                    </div>
                    <i class="product__icon fas fa-cart-plus"></i>
                </div>
                <div class="product">
                    <img src="img/altos.jpg" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">Zapatilla de tacón alto</h3>
                        <span class="product__price">$130.000</span>
                    </div>
                    <i class="product__icon fas fa-cart-plus"></i>
                </div>
                <div class="product">
                    <img src="img/blancos.jpg" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">Tacón de material blanco</h3>
                        <span class="product__price">$180.000</span>
                    </div>
                    <i class="product__icon fas fa-cart-plus"></i>
                </div>
                <div class="product">
                    <img src="img/diamantes.jpg" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">Tacón alto con diamantes de imitación</h3>
                        <span class="product__price">$160.000</span>
                    </div>
                    <i class="product__icon fas fa-cart-plus"></i>
                </div>
            </section>
            <section class="container__testimonials">
                <h2 class="section__title">Testimonios</h2>
                <h3 class="testimonial__title">Anamaria </h3>
                <p class="testimonial__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, perferendis,
                    animi! Numquam quasi similique, fuga sint. Nulla veritatis quia nemo, magni, necessitatibus impedit
                    inventore, provident culpa repellat esse a quo.</p>
            </section>

            <div class="container-editor">
                <div class="editor__item">
                    <img src="img/rojos.jpg" alt="" class="editor__img">
                    <p class="editor__circle">EXPRESS YOUR STYLE NOW</p>
                </div>
                <div class="editor__item">
                    <img src="img/tacon.jpg" alt="" class="editor__img">
                    <p class="editor__circle">EXPRESS YOUR STYLE NOW</p>
                </div>
            </div>
            <section class="container-tips">
                <div class="tip">
                    <i class="far fa-hand-paper"></i>
                    <h2 class="tip__title">Satisfacción grantizada</h2>
                    <p class="tip__txt">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                        odio sem nec elit</p>
                    <a href="" class="btn-shop">COMPRAR AHORA</a>
                </div>
                <div class="tip">
                    <i class="fas fa-rocket"></i>
                    <h2 class="tip__title">Envío rápido</h2>
                    <p class="tip__txt">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                        odio sem nec elit.</p>
                    <a href="" class="btn-shop">COMPRAR AHORA</a>
                </div>
                <div class="tip">
                    <i class="fas fa-cog"></i>
                    <h2 class="tip__title">Protección UV</h2>
                    <p class="tip__txt">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                        odio sem nec elit.</p>
                    <a href="" class="btn-shop">COMPRAR AHORA</a>
                </div>
            </section>
        </div>
    </main>
    <footer class="main-footer">
        <div class="footer__section">
            <h2 class="footer__title">Acerca de nosotros</h2>
            <p class="footer__txt">Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget
                consectetur sed, convallis at tellus. Nulla porttitor accumsana tincidunt.</p>
        </div>
        <div class="footer__section">
            <h2 class="footer__title">Localización :</h2>
            <p class="footer__txt">Ocaña, norte de Santander, Colombia</p>
            <h2 class="footer__title">Contactanos: </h2>
            <p class="footer__txt">Phone : (+57) 318 604 9289</p>
            <p class="footer__txt">Email : shoestore@gmail.com</p>
        </div>
        <div class="footer__section">
            <h2 class="footer__title">Quick Links</h2>
            <a href="" class="footer__link">Inicio</a>
            <a href="" class="footer__link">Acerca de nosotros</a>
            <a href="" class="footer__link">Error</a>
            <a href="" class="footer__link">Compra</a>
            <a href="" class="footer__link">Contactanos</a>
        </div>
        <div class="footer__section">
            <h2 class="footer__title">Registrate para ofertas</h2>
            <p class="footer__txt">By subscribing to our mailing list you will always get latest news and updates from
                us.</p>
            <input type="email" class="footer__input" placeholder="Ingrese su correo">
        </div>
        <p class="copy">© 2023 Goggles. Todos los derechos reservados | Desiñeado por Juan Mora - Yorlin Arias</p>
    </footer>
    <script src="js/slider.js"></script>
</body>

</html>