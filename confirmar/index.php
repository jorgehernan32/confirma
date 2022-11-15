<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/modal.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/gale.css">
    <title>Drifts South</title>
</head>
<body>
    <header class="hero">
        <button><a href="login.php">iniciar el logeo</a></button>
        <button href="register.php">Registrarse</button>
        
        <nav class="nav container">
            <div class="nav__container">
                <h1 class="nav__logo"><img src="img/favicon.png" alt="favicon" class="nav-img" />DRCO</h1>
                <label for="menu" class="nav__label">
                    <img src="./img/menu.svg" class="nav__img">
                </label>
                <input type="checkbox" id="menu" class="nav__input">
                <div class="nav__menu">
                    <a href="#" class="nav__item">Inicio</a>
                    <a href="#" class="nav__item">Nosotros</a>
                    <a href="#" class="nav__item">Servicios</a>
                    <a href="#" class="nav__item">Soporte</a>
                    <a href="#" class="nav__item"><img src="./img/user.svg" class="nav__img"></a>
                </div>
            </div>
        </nav>
        <section class="hero__container container">
            <h1 class="hero__title">En el Sur <br /> del Caribe</h1>
                <p class="hero__paragraph">
                    taller especializado en servicio automotriz
                    con proyectos de calidad
                </p>
            <a href="#modal" class="cta">acerca</a>
        </section>
    </header>
<!-- ================================================================================ -->
    <section id="modal" class="modal">
        <div class="modal__container">
            <figure class="modal__picture">
                <img src="img/producto3.jpg" class="modal__img">
            </figure>

            <h2 class="modal__title">¡Bienvenido!
                <span class="modal__title modal__title--bold">DRCO</span>
            </h2>

            <p class="modal__paragraph">Es un taller especializado en brindarle mejor servicio, con la finalidad de llegar a su destino sin nunguna preocupación</p>

            <a href="#header" class="modal__close">Iniciar!</a>
        </div>
    </section>
<!-- ===================================================================================-->
    <main>
        <section class="container about">
            <h2 class="subtitle">Las mejores categorías</h2>
            <div class="about__main">
                <article class="about__icons">
                    <img src="./img/categoria1.jpg" class="about__icon">
                    <h3 class="about__title">Escanner</h3>
                    <p class="about__paragrah">Realiza un Diagnóstico exacto de las fallas, con las que cuenta su automovil</p>
                </article>
                <article class="about__icons">
                    <img src="./img/categoria2.jpg" class="about__icon">
                    <h3 class="about__title">hojalatería y pintura</h3>
                    <p class="about__paragrah">si su automóvil sufrió de una colisión, golpé o abolladura, aqui le damos la solución</p>
                </article>
                <article class="about__icons">
                    <img src="./img/categoria3.jpg" class="about__icon">
                    <h3 class="about__title">Venta y montaje de llantas</h3>
                    <p class="about__paragrah">uno de los puntos mas importantes seguridad en conocer nuestras llantas del utomovil</p>
                </article>
            </div>
        </section>
        <section class="knowledge">
            <div class="knowledge__container container">
                <div class="knowledege__texts">
                    <h2 class="subtitle">Conoce cada uno de nuestros servicios!</h2>
                    <p class="knowledge__paragraph">contamos con una variedad de servicios con calidad </p>
                    <a href="/card/index.php" class="cta">Ingresar</a>
                </div>
                <figure class="gallery__picture  knowledge__picture">
                    <img src="./img/hero.jpg" class="knowledge__img">
                </figure>
            </div>
        </section>
                                <!-- Catalogo -->

                                <main class="main">
                                    <h1 class="title">Catálogo</h1>

                                    <section class="gallery">
                                        <figure class="gallery__picture gallery__picture--g1">
                                            <img src="img/areaT.jpg" class="gallery__img">
                                        </figure>

                                        
                                        <figure class="gallery__picture gallery__picture--g2">
                                            <img src="img/ajusteM.jpg" class="gallery__img">
                                        </figure>
                             
                                        <figure class="gallery__picture gallery__picture--g3">
                                            <img src="img/cambioA2.jpg" class="gallery__img">
                                        </figure>
                             
                                        <figure class="gallery__picture gallery__picture--g4">
                                            <img src="img/categoria2.jpg" class="gallery__img">
                                        </figure>
                             
                                        <figure class="gallery__picture gallery__picture--g5">
                                            <img src="img/cb.jpg" class="gallery__img">
                                        </figure>
                             
                                        <figure class="gallery__picture gallery__picture--g6">
                                            <img src="img/f4.jpg" class="gallery__img">
                                        </figure>
                             
                                        <figure class="gallery__picture gallery__picture--g7">
                                            <img src="img/m.jpg" class="gallery__img">
                                        </figure>
                             
                                        <figure class="gallery__picture gallery__picture--g8">
                                            <img src="img/llantaN.jpg" class="gallery__img">
                                        </figure>
                             
                                    </section>
                                </main>

                                 <!-- ===========CATALOGO================== -->
                                 <section class="price container">
                                    <h2 class="subtitle">Catalogo</h2>
                                    <div class="price__table imagen_catalogo">
                                      <div class="price__element anuncio">
                                        <img src="/img/ajusteM.jpg" alt="producto1" />
                                        <h3 class="price__price">DRCO</h3>
                                        <div class="price__items contenido_anuncio">
                                          <p class="price__features price__name">
                                            Proyectos finalizados 
                                          </p>
                                          <a href="#" class="price__cta boton">2021</a>
                                        </div>
                                      </div>

                                      <div class="price__element anuncio">
                                        <img src="/img/ajusteM.jpg" alt="producto1" />
                                        <h3 class="price__price">Despues</h3>
                                        <div class="price__items contenido_anuncio">
                                          <p class="price__features price__name">
                                            20 de abril 
                                          </p>
                                          <a href="#" class="price__cta boton">2022</a>
                                        </div>
                                      </div>

                                      <div class="price__element anuncio">
                                        <img src="/img/ajusteM.jpg" alt="producto1" />
                                        <h3 class="price__price">Despues</h3>
                                        <div class="price__items contenido_anuncio">
                                          <p class="price__features price__name">
                                            20 de abril 
                                          </p>
                                          <a href="#" class="price__cta boton">2022</a>
                                        </div>
                                      </div>

                                    </div>
                                   </section>
        <section class="testimony">
                <section class="testimony__body testimony__body--show" data-id="1">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Descuentos <span >
                            en </span>DRCO</h2>
                        <p class="testimony__review">Hasta con un 80% de descuento en su primer servicio automotriz!</p>
                    </div>
                    <figure class="testimony__picture">
                        <img src="./img/descuento.jpg" class="testimony__img">
                    </figure>
                </section>
            </div>
        </section>
        <section class="questions container">
            <section class="questions__offer">
                <h2 class="subtitle">Productos de DRCO</h2>
                <p class="questions__copy">Puede ingresar para conocer los productos disponibles</p>
                <a href="/FORMULARIO/formulario.html" class="cta">Ingresar</a>
            </section>
        </section>

        <section class="testimony">
            <section class="testimony__body testimony__body--show" data-id="1">
                <section class="price container">
                    <h2 class="subtitle">Paquetes de servicios</h2>
                    <div class="price__table">
                        <div class="price__element">
                            <p class="price__name">cambio de aceite</p>
                            <h3 class="price__price">$450</h3>
                            
                            <div class="price__items">
                                <p class="price__features">Cambio de aceite</p>
                                <p class="price__features">filtros</p>
                                <p class="price__features">Diagnostico</p>
                            </div>
        
                            <a href="#" class="price__cta">Proximamente...</a>
                        </div>
        
        
                        <div class="price__element price__element--best">
                            <p class="price__name">Servicio basico</p>
                            <h3 class="price__price">$680</h3>
        
                            <div class="price__items">
                                <p class="price__features">Reparaciones con descuento</p>
                                <p class="price__features">Diagnostico</p>
                                <p class="price__features">afinación</p>
                            </div>
        
                            <a href="#" class="price__cta">Proximamente...</a>
                        </div>
        
        
                        <div class="price__element">
                            <p class="price__name">Servicio mayor</p>
                            <h3 class="price__price">$860</h3>
        
                            <div class="price__items">
                                <p class="price__features">Mantenimiento preventivo.</p>
                                <p class="price__features">Cubrir las areas mas importantes.</p>
                                <p class="price__features">Correcto funcionamiento.</p>
                            </div>
        
                            <a href="#" class="price__cta">Proximamente...</a>
                        </div>
        
        
                    </div>
                </section>
            </section>
        </div>
    </section>
    </main>
    <footer class="site_footer">
        <div class="contenedor contenedor_footer">
          <nav class="navegacion">
            <a href="#">inicio</a>
            <a href="#">aviso de privacidad</a>
            <a href="#">legales</a>
            <div class="derechos">
            </div>
          </nav>
        </div>
        <form class="footer__form" action="https://formspree.io/f/mknkkrkj" method="POST">
            <h2 class="footer__newsletter">comentario acerca de su experiencia en el taller online</h2>
            <div class="footer__inputs">
                <input type="email" placeholder="Email:" class="footer__input" name="_replyto">
                <input type="submit" value="Registrate" class="footer__submit">
            </div>
        </form>
        
        <section class="footer__copy container">
            <div class="footer__social">
                <a href="#" class="footer__icons"><img src="./images/facebook.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="./images/twitter.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="./images/youtube.svg" class="footer__img"></a>
            </div>

            <h3 class="footer__copyright">Derechos reservados &copy; Jorge Hernández</h3>
        </section>
      </footer> 
</body>

</html>