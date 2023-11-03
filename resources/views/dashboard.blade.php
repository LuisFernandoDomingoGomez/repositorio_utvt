<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Inicio | UTVT</title>
    <!-- Stylesheets -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="dist/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="dist/css/responsive.css" rel="stylesheet">
    <style>
        /* Estilo del icono de búsqueda */
        .search-input {
            padding-left: 40px;
            background-color: #eaedef;
            background-image: url('dist/images/search.png');
            background-repeat: no-repeat;
            background-position: 10px center;
            background-size: 20px 20px;
        }

        .icon {
            width: 20px; /* Ancho deseado */
            height: 20px; /* Alto deseado */
            margin-right: 5px; /* Margen derecho para separar el icono del texto */
        }

    </style>
</head>
<body class="home-two">
    <div class="page-wrapper">
        <!-- Preloader -->
        <!-- Main Header-->
        <header class="main-header header-two">
            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="main-box clearfix">
                        <!--Logo-->
                        <div class="logo-box clearfix">
                            <div class="logo" align="right" style="margin-right: 170px;">
                                <a title="Logo UTVT"><img src="dist/images/utvt_logo.png" alt="no existe" width="85"></a>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <form class="d-flex flex-fill">
                                    <input class="form-control me-2 rounded-pill search-input" type="search" placeholder="Search CuervITo" aria-label="Search" style="width: 670px;">
                                </form>
                            </div>
                        </div>
                        <div class="nav-box clearfix">
                            <div class="links-box clearfix">
                                <div class="link">
                                    <a href="{{ url('/dashboard') }}" class="theme-btn btn-style-four rounded-pill">
                                        <img src="dist/images/icons/scann_qr.png" alt="QR Icon" class="icon"> Get app
                                    </a>
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
                                
                                <div class="team-block-two col-xl-3 col-lg-4 col-md-6 col-sm-12">
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
    </div>

    <!--Main Footer-->
    <footer class="footer-two">
        <div class="lower">
            <div class="auto-container">
                <div class="inner">
                    <div class="copyright"> Copyright &copy; 2023. All rights reserved by Your Company.</div>
                </div>
            </div>
        </div>
    </footer>

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