<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Store</title>
    <link rel="shorcut icon" href="assets/img/tacon.png">
    
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                        <li class="menu__item"><a href="about.php" class="menu__link">ACERCA DE</a></li>
                    </ul>
                </nav>
            </div>
            <div class="main-header__container">
                <span class="main-header__txt">SERVICIO AL CLIENTE</span>
                <p class="main-header__txt"><i class="fas fa-phone"></i> +57 3186049289</p>
            </div>
            <div class="main-header__container">
                <a href="login.php" class="main-header__link"><i class="fas fa-user"></i></a>
                <a href="" class="main-header__btn">Mi carrito <i class="fas fa-shopping-cart"></i></a>
                <input type="search" class="main-header__input" placeholder="Buscar productos"><i
                    class="fas fa-search"></i>
            </div>
        </div>
    </header>
    <div class="container-slider">
        <div class="slider" id="slider">
            <div class="slider__section">
                <img src="assets/img/tienda.jpg"
                    alt="" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">Women’s eyewear</h2>
                    <p class="slider__txt">Cool summer sale 50% off</p>
                    <a href="" class="btn-shop">SHOP NOW</a>
                </div>
            </div>
            <div class="slider__section">
                <img src="assets/img/decoracion.jpg"
                    alt="" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">Women’s eyewear</h2>
                    <p class="slider__txt">Cool summer sale 50% off</p>
                    <a href="" class="btn-shop">SHOP NOW</a>
                </div>
            </div>
            <div class="slider__section">
                <img src="assets/img/estilos.jpg"
                    alt="" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">Women’s eyewear</h2>
                    <p class="slider__txt">Cool summer sale 50% off</p>
                    <a href="" class="btn-shop">SHOP NOW</a>
                </div>
            </div>
            <div class="slider__section">
                <img src="assets/img/almacen.jpg" alt="" class="slider__img">
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
            <h2 class="main-title">New Arrivals for you</h2>
            <section class="container-products">
                <div class="product">
                    <img src="assets/img/pastel.jpg" alt=""
                        class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">Farenheit (Grey)</h3>
                        <span class="product__price">$575.00</span>
                    </div>
                    <i class="product__icon fas fa-cart-plus"></i>
                </div>
                <div class="product">
                    <img src="assets/img/altos.jpg"
                        alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">Opium (Grey)</h3>
                        <span class="product__price">$575.00</span>
                    </div>
                    <i class="product__icon fas fa-cart-plus"></i>
                </div>
                <div class="product">
                    <img src="assets/img/blancos.jpg"
                        alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">Kenneth Cole</h3>
                        <span class="product__price">$575.00</span>
                    </div>
                    <i class="product__icon fas fa-cart-plus"></i>
                </div>
                <div class="product">
                    <img src="assets/img/diamantes.jpg"
                        alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">Farenheit Oval</h3>
                        <span class="product__price">$325.00</span>
                    </div>
                    <i class="product__icon fas fa-cart-plus"></i>
                </div>
            </section>
            <section class="container__testimonials">
                <h2 class="section__title">Testimonials</h2>
                <h3 class="testimonial__title">Anamaria </h3>
                <p class="testimonial__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, perferendis,
                    animi! Numquam quasi similique, fuga sint. Nulla veritatis quia nemo, magni, necessitatibus impedit
                    inventore, provident culpa repellat esse a quo.</p>
            </section>

            <div class="container-editor">
                <div class="editor__item">
                    <img src="assets/img/rojos.jpg" alt="" class="editor__img">
                    <p class="editor__circle">EXPRESS YOUR STYLE NOW</p>
                </div>
                <div class="editor__item">
                    <img src="assets/img/tacon.jpg" alt="" class="editor__img">
                    <p class="editor__circle">EXPRESS YOUR STYLE NOW</p>
                </div>
            </div>
            <section class="container-tips">
                <div class="tip">
                    <i class="far fa-hand-paper"></i>
                    <h2 class="tip__title">Satisfaction Guaranteed</h2>
                    <p class="tip__txt">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                        odio sem nec elit</p>
                    <a href="" class="btn-shop">SHOP NOW</a>
                </div>
                <div class="tip">
                    <i class="fas fa-rocket"></i>
                    <h2 class="tip__title">Fast Shipping</h2>
                    <p class="tip__txt">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                        odio sem nec elit.</p>
                    <a href="" class="btn-shop">SHOP NOW</a>
                </div>
                <div class="tip">
                    <i class="fas fa-cog"></i>
                    <h2 class="tip__title">UV Protection</h2>
                    <p class="tip__txt">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                        odio sem nec elit.</p>
                    <a href="" class="btn-shop">SHOP NOW</a>
                </div>
            </section>
        </div>
    </main>
    <footer class="main-footer">
        <div class="footer__section">
            <h2 class="footer__title">About Us</h2>
            <p class="footer__txt">Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget
                consectetur sed, convallis at tellus. Nulla porttitor accumsana tincidunt.</p>
        </div>
        <div class="footer__section">
            <h2 class="footer__title">Location :</h2>
            <p class="footer__txt">0926k 4th block building, king Avenue, New York City</p>
            <h2 class="footer__title">Contactanos: </h2>
            <p class="footer__txt">Phone : +57 318609289</p>
            <p class="footer__txt">Email : shoestore@gmail.com</p>
        </div>
        <div class="footer__section">
            <h2 class="footer__title">Quick Links</h2>
            <a href="" class="footer__link">Home</a>
            <a href="" class="footer__link">About</a>
            <a href="" class="footer__link">Error</a>
            <a href="" class="footer__link">Shop</a>
            <a href="" class="footer__link">Contact Us</a>
        </div>
        <div class="footer__section">
            <h2 class="footer__title">Sign up for your offers</h2>
            <p class="footer__txt">By subscribing to our mailing list you will always get latest news and updates from
                us.</p>
            <input type="email" class="footer__input" placeholder="Enter your email">
        </div>
        <p class="copy">Copyright &copy; Su sitio web 2023</p>
    </footer>
    <script src="js/slider.js"></script>
</body>

</html>