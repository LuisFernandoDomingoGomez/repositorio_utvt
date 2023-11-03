<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CuervITo - Sumérgete en cualquier tema</title>
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

        /* Estilos para pantallas más grandes que 1024px (laptops o computadoras de escritorio) */
        @media (min-width: 1280px) {
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
                                <input class="form-control me-2 rounded-pill search-input" type="search" placeholder="Buscar en CuervITos" aria-label="Search" style="width: 450px;">
                            </form>
                            <div class="link">
                            <a id="openModalButton" class="btn btn-light rounded-pill">...</a>
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
        <section class="team-two" id="team-members">
            <div class="auto-container">
                <div class="title-box-two centered">
                    <h2>catalogo de cursos</h2>
                    <div class="text-content">Inscripciones de cursos disponibles </div>
                </div>
                <div class="tabs-box">
                    <div class="tabs-content">
                        <!--Tab-->
                        <div class="tab active-tab" id="team-tab-1">
                            <div class="row clearfix">
                                <!--Team Block-->    {{-- Inicio de la tarjetas en laravel --}}
                                
                                <div class="team-block-two col-xl-6 col-lg-4 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="image-box"><a href="#"><img src="https://img.freepik.com/vector-premium/desarrollo-juegos-linea-proceso-creativo-diseno-videojuegos-computadora-programacion-tecnologia-digital-programadores-que-codifican-juegos-digitales-ui-desarrolladores-ux-que-trabajan-proyectos-entretenimiento_458444-1919.jpg?w=2000" alt=""></a></div>
                                        <div class="lower-box">
                                            <h5>Creacion de Videojuegos</h5>
                                            <div class="designation">Ruben Dario Hernandez Mendo</div>
                                            <br>
                                            <div class="tab-buttons">
                                                <ul class="clearfix">
                                                    <div class="link"><a href="#" class="theme-btn btn-style-three"><span
                                                        class="txt">Inscribirse</span></a>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- fin de la tarjeta --}}
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
                <br><br><br><br><br>
                <p>Aca puede ir una galeria con las tematicas principales</p>
                <p>SQL</p>
                <p>laravel</p>
                <p>Normatividad</p>
            </div>
        </aside>
    </div>

    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html">
        <span class="icon"><img src="dist/images/icons/arrow-up.svg" alt="" title="Go To Top"></span>
    </div>
    <script src="dist/js/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/PageScroll.js"></script>
    <script src="dist/js/jquery.js"></script>
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