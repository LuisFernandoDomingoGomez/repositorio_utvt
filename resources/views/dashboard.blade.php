<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CuervITo - Sumérgete en cualquier área</title>
    <script src="dist/js/jquery.js"></script>
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="dist/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="dist/css/responsive.css" rel="stylesheet">
    <style>
        .search-input {
            padding-left: 40px;
            background-color: #eaedef;
            background-image: url('dist/images/search.png');
            background-repeat: no-repeat;
            background-position: 10px center;
            background-size: 20px 20px;
        }

        .icon {
            width: 20px;
            height: 20px;
            margin-right: 3px;
        }

        .left-sidebar {
            background-color: #eaedef;
            width: 260px;
            height: 100%;
            position: fixed;
            top: 0;
            z-index: 1;
            display: block;
            transition: 0.3s;
            overflow-y: auto;
        }

        .right-sidebar {
            background-color: #eaedef;
            width: 330px;
            height: 100%;
            position: fixed;
            top: 0;
            z-index: 1;
            display: block;
            transition: 0.3s;
            overflow-y: auto;
        }

        .left-sidebar {
            left: 0;
        }

        .right-sidebar {
            right: 0;
        }

        .sidebar-content {
            padding: 20px;
        }

        section {
            margin-left: 280px;
            margin-right: 280px;
            padding: 20px;
        }

        /* Estilos para el modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fff;
            text-align: center;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 5px;
            position: relative;
        }

        .close {
            color: red;
            position: absolute;
            right: 10px;
            top: 10px;
            font-size: 50px;
            font-weight: bold;
            cursor: pointer;
        }


        .modal-content img {
            display: block;
            margin: 0 auto;
            max-width: 50%;
            height: auto;
        }

        .modal-content h3 {
            margin: 10px 0;
        }

        .modal-content p {
            margin: 10px 0;
        }

        /* Tamaños de fuente para sección Posts */ 
        .fs-4 {
            font-size: 1.25rem;
        }

        .fs-5 {
            font-size: 1rem;
        }

        .fs-6 {
            font-size: 0.75rem;
        }

        /* Estilos de carrusel */
        .carousel-cards-wrapper {
            display: flex;
            justify-content: center;
        }
        .carousel-card img {
            max-width: 100%;
            max-height: 100%;
        }

        /* Estilos personalizados para las tarjetas del carrusel */
        .carousel-card {
            background-color: #fff;
            border: 2px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0);
            margin: 8px;
            transition: transform 0.3s ease-in-out;
        }

        .carousel-card:hover {
            transform: scale(1.05);
            background-color: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            background: var(--color);
            color: white;
        }

        .carousel-inner {
            padding: 1em;
        }

        .carousel-control-prev,
        .carousel-control-next {
            background-color: #808080;
            width: 7vh;
            height: 7vh;
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
        }
        @media (min-width: 768px) {
            .carousel-card img {
                height: 9em;
            }
        }

        /* Estilos para la galería de imágenes en la barra lateral derecha */
        .right-sidebar {
            background-color: #eaedef;
            width: 330px;
            height: 100%;
            position: fixed;
            top: 0;
            z-index: 1;
            display: block;
            transition: 0.3s;
            overflow-y: auto;
        }

        .right-sidebar .sidebar-content {
            padding: 20px;
        }

        .right-sidebar .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            max-width: 95%; /* Cantidad de contracción (Es basicamente un container personalizado xd) */
        }

        .right-sidebar .gallery h6 {
            text-align: center;
            margin: 20px 0 15px 0;
            /*font-weight: 300;*/
        }

        .right-sidebar .gallery-image {
            width: calc(33.33% - 10px);
            margin-bottom: 10px; /* Espacio entre las filas */
            position: relative;
            box-shadow: 0px 0px 4px 0px rgba(0, 0, 0, 0.75);
            width: 90px; /* Ancho fijo para los contenedores de imágenes */
            height: 80px; /* Altura fija para los contenedores de imágenes */
        }

        .right-sidebar .gallery-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .right-sidebar .gallery-image:nth-child(3n) {
            margin-right: 0;
        }

        .right-sidebar .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            background: rgba(0, 118, 99, 0.781);
            width: 100%;
            height: 0;
            overflow: hidden;
            transition: 0.5s ease;
        }

        .right-sidebar .overlay h6 {
            color: #fff;
            font-weight: 300;
            font-size: 10px;
            position: absolute;
            top: 50%;
            left: 50%;
            text-align: center;
            transform: translate(-50%, -50%);
        }

        .right-sidebar .gallery-image:hover .overlay {
            height: 100%;
            cursor: pointer;
        }

        /* Estilos para la barra de búsqueda en la vista móvil */
        @media (max-width: 768px) {
            .left-sidebar, .right-sidebar {
                display: none;
            }
            .search-input {
                display: none;
            }
        }

        /* Estilos para el encabezado en la vista móvil */
        @media (max-width: 768px) {
            .logo-box {
                text-align: center; 
                margin-right: 0;
            }
            .nav-box {
                text-align: center;
            }
        }

        /* Estilos adicionales para la sección principal en la vista móvil */
        @media (max-width: 767px) {
            section {
                margin-left: 0;
                margin-right: 0;
                padding: 0;
            }
        }

        /* Estilos para tablets (768px o más) */
        @media (min-width: 767px) {
            .left-sidebar {
                display: block;
            }
            .right-sidebar {
                display: none;
            }
            section {
                display: block;
                margin-right: 0;
                padding: 0;
            }
            .nav-box {
                display: none;
            }
        }

        /* Estilos para pantallas más grandes que 1200px (laptops o computadoras de escritorio) */
        @media (min-width: 1200px) {
            .left-sidebar {
                display: block;
            }
            .right-sidebar {
                display: block;
            }
            section {
                display: block;
                margin-right: 280px;
            }
            .nav-box {
                display: block;
            }
        }
    </style>
</head>
<body class="home-two">
    <header class="main-header header-two" style="position: relative; z-index: 2; background-color: white;">
        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="main-box clearfix">
                    <!--Logo-->
                    <div class="logo-box clearfix">
                        <div class="logo" align="right" style="margin-right: 190px;">
                            <a title="Logo UTVT"><img src="dist/images/utvt_logo.png" alt="no existe" width="85"></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <form class="d-flex flex-fill">
                                <input class="form-control me-2 rounded-pill search-input" type="search" placeholder="Buscar en CuervITos" aria-label="Search" style="width: 500px;">
                            </form>
                            <div class="link">
                            <a id="" class="btn btn-light rounded-pill">...</a>
                        </div>
                        </div>
                    </div>
                    <div class="nav-box clearfix">
                        <div class="links-box clearfix">
                            <!-- Botón para abrir el modal -->
                            <div class="link">
                                <a id="openModalButton" class="theme-btn btn-style-four rounded-pill">
                                    <img src="dist/images/icons/scann_qr.png" alt="QR Icon" class="icon"> Get app
                                </a>
                            </div>

                            <!-- Modal -->
                            <div id="appModal" class="modal">
                                <div class="modal-content">
                                    <span class="close" id="closeModalButton">&times;</span>
                                    <h3>Obtén la aplicación CuervITo</h3>
                                    <p>Escanea este código QR<br>para descargar la aplicación ahora</p>
                                    <img src="https://es.mailpro.com/blog/image.axd?picture=/QRCODES.png" alt="Shreddit QR Code">
                                    <p>O búscalo en las tiendas de aplicaciones.</p>
                                </div>
                            </div>

                            <!-- QR V2
                            <div class="link">
                                <a href="{{ url('/dashboard') }}" class="theme-btn btn-style-four rounded-pill">
                                    <i class="fas fa-qrcode icon" style="margin-right: 7px;"></i> Get app
                                </a>
                            </div>
                            -->

                            @if (Route::has('login'))
                                <div class="link">
                                    @auth
                                    <a href="{{url('/recursos')}}" class="theme-btn btn-style-four rounded-pill">Publicar</a>
                                    @else
                                    <a href="{{ route('login') }}" class="theme-btn btn-style-four rounded-pill">
                                        <span class="txt">Ingresar</span>
                                    </a>
                                    @endauth
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Barra lateral izquierda (left sidebar) -->
    <aside class="left-sidebar">
        <!-- Contenido del left sidebar -->
        <div class="sidebar-content">
            <!-- Elementos del left sidebar -->
            <br><br><br><br><br>
            <p>Categoria 1</p>
            <p>Categoria 2</p>
            <p>Categoria 3</p>
        </div>
    </aside>

    <div class="page-wrapper">
        <!-- Contenido - Posts -->
        <section class="banner-section banner-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-11 offset">
                        <div class="masthead">
                            <!-- Carrusel -->
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="carousel-cards-wrapper">
                                            <div class="carousel-card">
                                                <img src="https://www.danielprimo.io/files/2021-05/1621490872_laravel-bases-de-datos-y-modelo.png" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h6 class="card-title">Card title 1</h6>
                                                    <a href="#" class="btn btn-dark btn-sm">Ver más</a>
                                                </div>
                                            </div>
                                            <div class="carousel-card d-none d-md-block">
                                                <img src="https://img-b.udemycdn.com/course/240x135/1608944_1b18_5.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h6 class="card-title">Card title 2</h6>
                                                    <a href="#" class="btn btn-dark btn-sm">Ver más</a>
                                                </div>
                                            </div>
                                            <div class="carousel-card d-none d-md-block">
                                                <img src="https://www.danielprimo.io/files/2021-05/laravel-migraciones-y-seeders.png" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h6 class="card-title">Card title 3</h6>
                                                    <a href="#" class="btn btn-dark btn-sm">Ver más</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carousel-cards-wrapper">
                                            <div class="carousel-card">
                                                <img src="https://www.danielprimo.io/files/2021-05/1621490872_laravel-bases-de-datos-y-modelo.png" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h6 class="card-title">Card title 4</h6>
                                                    <a href="#" class="btn btn-dark btn-sm">Ver más</a>
                                                </div>
                                            </div>
                                            <div class="carousel-card d-none d-md-block">
                                                <img src="https://img-b.udemycdn.com/course/240x135/1608944_1b18_5.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h6 class="card-title">Card title 5</h6>
                                                    <a href="#" class="btn btn-dark btn-sm">Ver más</a>
                                                </div>
                                            </div>
                                            <div class="carousel-card d-none d-md-block">
                                                <img src="https://www.danielprimo.io/files/2021-05/laravel-migraciones-y-seeders.png" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h6 class="card-title">Card title 6</h6>
                                                    <a href="#" class="btn btn-dark btn-sm">Ver más</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" ariahidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                        </div><br>
                        <div class="card rounded bg-white shadow">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="w-10 h-10 rounded-circle overflow-hidden">
                                        <img src="https://via.placeholder.com/50" alt="Foto de Perfil">
                                    </div>
                                    <div class="ml-2">
                                        <a href="#" class="font-weight-bold text-dark fs-5">Nombre de Usuario</a>
                                        <div class="text-secondary fs-6">12 de Octubre de 2023</div>
                                    </div>
                                </div>
                                <br>
                                <h3 class="card-title font-weight-bold mb-3 fs-4">Título de la Publicación</h3>
                                <p class="card-text fs-5">Descripción de la Publicación...</p>
                                <div class="my-4">
                                    <!-- Cambiar el enlace simulado a un PDF real -->
                                    <!--<embed src="https://example.com/sample.pdf" type="application/pdf" width="100%" height="600px" /> -->

                                    <!-- Si el archivo es un documento de Word (doc o docx) -->
                                    <!-- <img src="ruta_de_la_imagen_de_word" alt="Vista previa de Word" class="img-fluid mx-auto d-block"> -->

                                    <!-- Si el archivo es una presentación de PowerPoint (ppt o pptx) -->
                                    <!-- <img src="ruta_de_la_imagen_de_powerpoint" alt="Vista previa de PowerPoint" class="img-fluid mx-auto d-block"> -->

                                    <!-- Si el archivo es una hoja de cálculo de Excel (xls o xlsx) -->
                                    <!-- <img src="ruta_de_la_imagen_de_excel" alt="Vista previa de Excel" class="img-fluid mx-auto d-block"> -->

                                    <!-- Si el archivo es una imagen (jpg, jpeg, png, gif) -->
                                    <img src="https://via.placeholder.com/800x400" alt="Imagen de la Publicación" class="img-fluid mx-auto d-block">

                                    <!-- Si el archivo es un video (mp4, avi, mov) -->
                                    <!-- <video class="img-fluid mx-auto d-block" controls>
                                        <source src="ruta_del_video.mp4" type="video/mp4">
                                        Tu navegador no soporta el elemento de video.
                                    </video> -->

                                    <!-- Si el archivo no es compatible con ningún formato conocido -->
                                    <!-- <img src="ruta_de_la_imagen_predeterminada" alt="Tipo de archivo no compatible" class="img-fluid mx-auto d-block"> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Barra lateral derecha (right sidebar) -->
        <aside class="right-sidebar">
            <!-- Contenido del right sidebar -->
            <div class="sidebar-content">
                <!-- Elementos del right sidebar -->
                <br><br><br><br>

                <!-- Menu tentativo de elementos -->
                <h6>Temas Populares</h6>
                <h7></h7><hr>
                <h6>Carreras</h6>
                <h7>* Ing. en Desarrollo y Gestión de Software <br> - TSU. en Desarrollo de Software Multiplataforma <br><br> * Ing. en Redes y Ciberseguridad <br> - TSU. Infraestructura de Redes Digitales</h7><hr>
                <!-- Dark Mode
                <button class="dark-mode-switcher" data-url="/cambiar-modo-oscuro">
                    <span class="dark-mode-switcher__toggle"></span>
                </button>
                -->
                <div class="gallery">
                    <h6>Áreas de Estudio</h6>
                    <div class="row">
                        <!-- Primera fila de imágenes -->
                        <div class="col-4">
                            <div class="gallery-image">
                                <img src="https://universidadeuropea.com/resources/media/images/lenguaje-programacion-sql-800x450.2e16d0ba.fill-767x384.jpg" alt="Imagen 1">
                                <div class="overlay">
                                    <h6>Imagen 1</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="gallery-image">
                                <img src="https://www.aprender21.com/images/colaboradores/sql.jpeg" alt="Imagen 2">
                                <div class="overlay">
                                    <h6>Imagen 2</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="gallery-image">
                                <img src="https://img-b.udemycdn.com/course/750x422/4110826_7f58_3.jpg" alt="Imagen 3">
                                <div class="overlay">
                                    <h6>Imagen 3</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Agrega más imágenes aquí si es necesario -->
                    </div>

                    <!-- Segunda fila de imágenes -->
                    <div class="row">
                        <div class="col-4">
                            <div class="gallery-image">
                                <img src="https://fc.aulavirtualpucv.cl/pluginfile.php/108811/mod_resource/content/1/img1.2.png" alt="Imagen 1">
                                <div class= "overlay">
                                    <h6>Imagen 1</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="gallery-image">
                                <img src="https://icrea.xyz/blog/wp-content/uploads/2017/05/OM6UV00-1024x1024.jpg" alt="Imagen 2">
                                <div class="overlay">
                                    <h6>Imagen 2</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="gallery-image">
                                <img src="https://img-b.udemycdn.com/course/750x422/4110826_7f58_3.jpg" alt="Imagen 3">
                                <div class="overlay">
                                    <h6>Imagen 3</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tercer fila de imágenes -->
                    <div class="row">
                        <div class="col-4">
                            <div class="gallery-image">
                                <img src="https://1.bp.blogspot.com/-alSgMPp-mPk/Ti9Bx_Zp4NI/AAAAAAAAABA/Ft-cg0ikizc/s1600/iso.png" alt="Imagen 1">
                                <div class= "overlay">
                                    <h6>Normatividad ISO</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="gallery-image">
                                <img src="https://icrea.xyz/blog/wp-content/uploads/2017/05/OM6UV00-1024x1024.jpg" alt="Imagen 2">
                                <div class="overlay">
                                    <h6>Imagen 2</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="gallery-image">
                                <img src="https://img-b.udemycdn.com/course/750x422/4110826_7f58_3.jpg" alt="Imagen 3">
                                <div class="overlay">
                                    <h6>Imagen 3</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>

    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html">
        <span class="icon"><img src="dist/images/icons/arrow-up.svg" alt="" title="Go To Top"></span>
    </div>
    <script src="dist/js/popper.min.js"></script>
    <script src="dist/js/PageScroll.js"></script>
    <script src="dist/js/jquery.js"></script>
    <script src="dist/js/dark-mode-switcher.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/owl.js"></script>
    <script src="dist/js/bxslider.js"></script>
    <script src="dist/js/countdown.js"></script>
    <script src="dist/js/jquery.fancybox.js"></script>
    <script src="dist/js/jquery-ui.js"></script>
    <script src="dist/js/appear.js"></script>
    <script src="dist/js/wow.js"></script>
    <script src="dist/js/custom-script.js"></script>
</body>

</html>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    var openModalButton = document.getElementById("openModalButton");
    var appModal = document.getElementById("appModal");

    openModalButton.addEventListener("click", function() {
        appModal.style.display = "block";
    });

    var closeModalButton = document.getElementById("closeModalButton");

    closeModalButton.addEventListener("click", function() {
        appModal.style.display = "none";
    });

    window.addEventListener("click", function(event) {
        if (event.target == appModal) {
            appModal.style.display = "none";
        }
    });
</script>