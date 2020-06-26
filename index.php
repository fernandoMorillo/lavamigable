<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="LAVAMIGABLE.png">

    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Lavamigable</title>
</head>
<body>
<header>
    <div id="logo">
        <img src="assets/img/logos/logo_lavamigable_color.png" alt="Lavamigable" width="200">
    </div>
</header>
<nav>
    <div id="formulario" class="h-100 contenedor-nav">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="contenedor-principal h-100">
                        <div class="cont">
                            <h1>Consiente y desinfecta tu carro con un lavado integral</h1>
                            <p id="subtexto">Elimina hasta el 99,99% de los virus y bacterias
                                que se acumulan en tu auto con un lavado exclusivo desde la comodidad de tu hogar.
                            </p>
                            <ul>
                                <li>Productos 100% recomendados para el cuidado de
                                    tu auto.
                                </li>
                                <li>Lavado en seco (Cero charcos de agua).
                                </li>
                                <li>Limpieza integral, llegamos hasta esos espacios difíciles de
                                    alcanzar.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="pos-formulario h-100">
                        <form action="enviarDatos.php" method="post">
                            <h2 id="solicita">Solicita tu cotización</h2>
                            <div class="form-group">
                                <label for="name">Nombres y apellidos</label>
                                <input type="text" class="form-control" name="name" required id="name">
                            </div>
                            <div class="form-group">
                                <label for="correoEle">Correo</label>
                                <input type="email" class="form-control" name="correoEle" required id="correoEle">
                            </div>
                            <div class="form-group">
                                <label for="celular">Celular</label>
                                <input type="number" class="form-control" name="celular" required id="celular">
                            </div>
                            <div class="form-group">
                                <label for="vehiculo">Marca del vehiculo</label>
                                <input type="text" class="form-control" name="vehiculo" required id="vehiculo">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="terminos">
                                <label class="form-check-label" for="terminos">Acepto los términos y
                                    condiciones.</label>
                            </div>
                            <div class="mov-btn">
                                <button type="submit" id="enviar" class="btn btn-primary btn-lg btn-block bot-cotizar">Quiero cotizar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<section class="quienes-somos">
    <div class="cont-somos">
        <div class="container px-lg-5">
            <div class="title2 pb-5">
                <h2 class="titulo">Quienes somos</h2>
            </div>
            <div class="row mx-lg-n5">
                <div class="col-12 col-md-6 py-3 px-lg-5 d-flex justify-content-end">
                    <img class="cont-somos__image estiloseccioncolor" src="assets/img/quienessomos.jpg" alt="quienes somos">
                </div>
                <div class="col-12 col-md-6 py-3 px-lg-5 alin-texto">
                    <p> Somos una entidad Eco-friendly, todos los productos que utilizamos para la limpieza y el cuidado
                        de tu vehículo, cuentan con los más altos estándares de calidad y sostenibilidad con el medio
                        ambiente.
                        <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="nuestros-productos">
    <div class="container">
        <div class="title2">
            <h2 class="titulo">Nuestros servicios</h2>
        </div>
        <div class="cont-productos">
            <div class="row justify-content-center cont-productos__row">
                <div class="col-12 col-lg-4 mb-5">

                    <div class="prod-1">
                        <div class="titulo-prod">
                            <h4>SERVICIO GENERAL CON ENCERADO SUAVE</h4>
                        </div>
                        <br>
                        <div class="texto-tarjet">
                            <p>
                                Te ofrecemos una limpieza interior con aspirado de sillas y tapetes.
                                A demás de una limpieza exterior con encerado suave, desengrasado de vidrios, rines y llantas.
                            </p><br><br>
                        </div>
                        <div class="ubi-btn">
                            <button type="button" class="btn btn-primary btn-lg btn-blog btn-modif">Lo quiero</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="prod-2">
                        <div class="titulo-prod2">
                            <h4>SERVICIO GENERAL + PRODUCTO: SIEMPRE BRILLO + POLICHADO
                            </h4>
                        </div>
                        <div class="prod-2__content text-center">
                            <p>
                                En este combo te brindamos, todo el servicio general,
                                más una capa de crema UVA para proteger y reavivar el color de la pintura de tu auto, evitando así decoloraciones.
                            </p>
                            <div class="prod-2__box">
                                <div class="texto-tarjet2">
                                    <br><br>
                                </div>
                                <div class="ubi-btn2">
                                    <button type="button" class="btn btn-primary btn-lg btn-blog btn-modif">Lo quiero
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="prod-1">
                        <div class="titulo-prod">
                            <h4>SERVICIO GENERAL +POLICHADO DESMANCHADOR</h4>
                        </div>

                        <div class="texto-tarjet">
                            <p>
                                En este combo te brindamos, todo el servicio general,
                                más una capa de crema UVA para desmanchar y proteger la pintura afectada por el tiempo de tu vehículo.
                            </p><br><br>
                        </div>
                        <div class="ubi-btn">
                            <button type="button" class="btn btn-primary btn-lg btn-blog btn-modif">Lo quiero</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="ver-mas">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary2" data-toggle="modal" data-target="#exampleModal">
            Ver más servicios</button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Servicios</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">SUPER PROMOS</a>
                            </li>
                        </ul>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="cont-productos">
                                    <div class="row justify-content-center cont-productos__row">
                                        <div class="col-12 col-lg-4 mb-5">

                                            <div class="prod-1">
                                                <div class="titulo-prod">
                                                    <h4>SERVICIO GENERAL + POLICHADO ESPEJO</h4>
                                                </div>
                                                <br>
                                                <div class="texto-tarjet">
                                                    <p>
                                                        En este combo te brindamos, todo el servicio general, más cera espejo UVA,
                                                        brindado así un acabado espejo en tu vehículo con protección para micro poros.
                                                    </p><br><br>
                                                </div>
                                                <div class="ubi-btn">
                                                    <button type="button" class="btn btn-primary btn-lg btn-blog btn-modif">Lo quiero</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <div class="prod-2">
                                                <div class="titulo-prod2">
                                                    <h4>SERVICIO GENERAL + POLICHADO QUITA RAYONES</h4>
                                                </div>
                                                <br>
                                                <div class="prod-2__content text-center">
                                                    <p>
                                                        En este combo te brindamos, todo el servicio general, más crema quita rayones UVA,
                                                        que elimina otros colores de tu pintura por choque o rasguños.
                                                    </p>
                                                    <div class="prod-2__box">
                                                        <div class="texto-tarjet2">
                                                            <br><br>
                                                        </div>
                                                        <div class="ubi-btn2">
                                                            <button type="button" class="btn btn-primary btn-lg btn-blog btn-modif">Lo quiero
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <div class="prod-1">
                                                <div class="titulo-prod">
                                                    <h4>SERVICIO GENERAL + COJINERÍA + TECHO</h4>
                                                </div>
                                                <br>
                                                <div class="texto-tarjet">
                                                    <p>
                                                        En este combo te brindamos, todo el servicio general, con una limpieza profunda, eliminando ácaros
                                                        en cojinería de tela y en cojinería de cuero una humectación y protección de rayos UV para tu vehículo.
                                                    </p><br>
                                                </div>
                                                <div class="ubi-btn">
                                                    <button type="button" class="btn btn-primary btn-lg btn-blog btn-modif">Lo quiero</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4 mb-5">
                                            <div class="prod-1">
                                                <div class="titulo-prod">
                                                    <h4>SERVICIO GENERAL + DESMANCHADO INTERIOR</h4>
                                                </div>
                                                <br>
                                                <div class="texto-tarjet">
                                                    <p>
                                                        En este combo te brindamos, todo el servicio general,
                                                        más un desmanchado profesional en el interior de todo tu vehículo.
                                                    </p><br><br>
                                                </div>
                                                <div class="ubi-btn">
                                                    <button type="button" class="btn btn-primary btn-lg btn-blog btn-modif">Lo quiero</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <div class="cont-productos">
                                    <div class="row justify-content-center cont-productos__row">
                                        <div class="col-12 col-lg-4">
                                            <div class="prod-1">
                                                <div class="titulo-prod">
                                                    <h4>SUPER PROMO 1: SERVICIO GENERAL + POLICHADO + DESMANCHADO INTERIOR</h4>
                                                </div>
                                                <br>
                                                <div class="texto-tarjet">
                                                    <p>
                                                        En esta súper promo te brindamos, todo el servicio general, más un polichado protector de crema UVA,
                                                        desmanchado interior de vinilos y partes plásticas de tu vehículo. </p><br>
                                                </div>
                                                <div class="ubi-btn">
                                                    <button type="button" class="btn btn-primary btn-lg btn-blog btn-modif">Lo quiero</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <div class="prod-1">
                                                <div class="titulo-prod">
                                                    <h4>SUPER PROMO 2: SERVICIO GENERAL + POLICHADO + COJINERÍA</h4>
                                                </div>
                                                <br>
                                                <div class="texto-tarjet">
                                                    <p>
                                                        En esta súper promo te brindamos, todo el servicio general, más un polichado protector de crema UVA para la pintura de tu vehículo,
                                                        además de una limpieza detallada en cojinería de tela o cuero y limpieza en techo.</p><br>
                                                </div>
                                                <div class="ubi-btn">
                                                    <button type="button" class="btn btn-primary btn-lg btn-blog btn-modif">Lo quiero</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <div class="prod-1">
                                                <div class="titulo-prod">
                                                    <h4>SUPER PROMO 3: SERVICIO GENERAL + COJINERÍA + DESMANCHADO INTERIOR</h4>
                                                </div>

                                                <div class="texto-tarjet">
                                                    <p>
                                                        En esta súper promo te brindamos, todo el servicio general,
                                                        más desmanchado interior en vinilos y partes plásticas de tu vehículo,
                                                        además de una limpieza detallada en cojinería de tela o cuero y limpieza en techo.</p>
                                                </div>
                                                <div class="ubi-btn">
                                                    <button type="button" class="btn btn-primary btn-lg btn-blog btn-modif">Lo quiero</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <div class="prod-1">
                                                <div class="titulo-prod">
                                                    <h4>SUPER PROMO 4: SERVICIO GENERAL + POLICHADO + COJINERÍA + DESMANCHADO</h4>
                                                </div>
                                                <br>
                                                <div class="texto-tarjet">
                                                    <p>
                                                        En esta súper promo te brindamos, todo el servicio general, con polichado protector de crema UVA para la pintura de tu vehículo, más desmanchado interior en vinilos o partes plásticas,
                                                        y una limpieza detallada en cojinería de tela o cuero con limpieza en techo. </p><br><br>
                                                </div>
                                                <div class="ubi-btn">
                                                    <button type="button" class="btn btn-primary btn-lg btn-blog btn-modif">Lo quiero</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="contactanos">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-4">
                <p>¡Somos tu mejor aliado para el cuidado y desinfección de tu carro!
                </p>
            </div>
            <div class="col-12 col-lg-4 d-flex align-items-center">
                <div class="btn-contacto">
                    <button type="button" class="btn btn-primary btn-lg btn-blog btn-modif">Contáctanos</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="nuestro-equipo">
    <div class="cont-somos">
        <div class="container px-lg-5">
            <div class="title2 pt-4">
                <h2 class="titulo">Nuestro equipo</h2>
            </div>
            <div class="caja-equipo">
                <div class="row mx-lg-n5">
                    <div class="col-12 col-md-6 py-3 px-lg-5 alin-texto">
                        <p>
                            Somos una entidad Eco-friendly, todos los productos que utilizamos para la limpieza y el
                            cuidado de tu vehículo, cuentan con los más altos estándares de calidad y sostenibilidad con
                            el medio ambiente. <br>
                        </p>
                    </div>
                    <div class="col-12 col-md-6 py-3 px-lg-5 d-flex justify-content-start">
                        <img class="cont-somos__image" src="assets/img/nuestroequipo.jpg" alt="nuestro equipo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonios">
    <div class="container">
        <div class="title3">
            <h2 class="titulo">Testimonios</h2>
        </div>
        <div class="cont-testimonio">
            <div class="row justify-content-center cont-testimonio__row">
                <div class="col-12 col-lg-4 mb-5">
                    <div class="test-1">
                        <div class="img-testimonio">
                            <img src="assets/img/foto.png" alt="">
                        </div>
                        <div class="name-test">
                            <p>Nombre</p>
                        </div>
                        <div class="info-testimonio">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Alias aspernatur at aut, autem dignissimos doloremque eaque enim
                                ex harum iste itaque iusto nostrum pariatur quidem quis reprehenderit
                                sint soluta velit.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="test-1">
                        <div class="img-testimonio">
                            <img src="assets/img/foto.png" alt="">
                        </div>
                        <div class="name-test">
                            <p>Nombre</p>
                        </div>
                        <div class="info-testimonio">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Alias aspernatur at aut, autem dignissimos doloremque eaque enim
                                ex harum iste itaque iusto nostrum pariatur quidem quis reprehenderit
                                sint soluta velit.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="test-1">
                        <div class="img-testimonio">
                            <img src="assets/img/foto.png" alt="">
                        </div>
                        <div class="name-test">
                            <p>Nombre</p>
                        </div>
                        <div class="info-testimonio">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Alias aspernatur at aut, autem dignissimos doloremque eaque enim
                                ex harum iste itaque iusto nostrum pariatur quidem quis reprehenderit
                                sint soluta velit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="cotizar">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-4">
                <p>¡Protégete y protege a toda tu familia con una limpieza profunda integral!
                </p>
            </div>
            <div class="col-12 col-lg-4 d-flex align-items-center">
                <div class="btn-contacto"><a href="#formulario">
                    <button type="button" class="btn btn-primary btn-lg btn-blog btn-modif">Quiero Cotizar</button>
                </a>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="logo-footer">
        <img src="assets/img/logos/logo_lavamigable_blanco.png" alt="lavamigable" width="200">
    </div>
    <div class="datos">
        <div class="direccion">
            <div class="direccion__content">
                <p>Dirección</p>
                <br>
                <p>
                    93 Avenida Paseo Bolívar 32,
                    UCG2, Cartagena, 130002, Colombia
                </p>
            </div>
        </div>
        <div class="direccion">
            <div class="redes__content">
                <p>Nuestras redes</p>

                    <ul class="iconos">
                        <a href="https://www.facebook.com/lavamigable.ctg/" target="_blank"><li><img src="assets/img/fb.png" alt=""></li></a>
                        <a href="https://www.instagram.com/lavamigable.ctg/" target="_blank"><li><img src="assets/img/ig_logo.png" alt=""></li></a>
                        <a href="https://api.whatsapp.com/send?phone=573023739569" target="_blank"><li><img src="assets/img/ws.png" alt=""></li></a>
                    </ul>

            </div>
        </div>
    </div>
    <br>
    <div class="desarrollado">
        <p>©2020 Digital Alliance</p>
    </div>
</footer>

<script src="validar.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>
</html>