<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Galeria | UTVT</title>
    <!-- Stylesheets -->
    <script src="dist/js/jquery.js"></script>
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="dist/css/style.css" rel="stylesheet">
    <link href="utvt/css/template.css" rel="stylesheet">
    <link href="utvt/css/responsive.css" rel="stylesheet">
    <link href="utvt/css/gallery_two.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="dist/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<style>
    /* Tamaños de fuente */ 
    .fs-4 {
        font-size: 1.25rem;
    }

    .fs-5 {
        font-size: 1rem;
    }

    .fs-6 {
        font-size: 0.75rem;
    }
</style>

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
                    </div>
                </div>
            </div>
        </div>
    </header>

    <aside class="left-sidebar">
        <br><br><br><br>
        <!-- Contenido del left sidebar -->
        <div class="sidebar-content">
            <!-- Menú de navegación -->
            <h6>Menú Principal</h6>
            <ul class="nav flex-column custom-list">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">
                        <i class="fas fa-home"></i> Inicio
                    </a>
                </li>
                <li class= "nav-item">
                    <a class="nav-link" href="/contenido">
                        <i class="fas fa-folder"></i> Contenidos
                    </a>
                </li>
                <li class= "nav-item">
                    <a class="nav-link" href="/galeria">
                    <i class="fas fa-image"></i> Galeria
                    </a>
                </li>
                <li class= "nav-item">
                    <a class="nav-link" href="/video">
                    <i class="fas fa-play-circle"></i> Videos
                    </a>
                </li>
                <li class= "nav-item">
                    <a class="nav-link" href="{{ route('recursos.index') }}">
                    <i class="fas fa-paper-plane"></i> Publicar
                    </a>
                </li>
            </ul>
            
            <!-- Recursos con carreras (Acordeón) -->
            <hr><h6>Recursos</h6>
            <ul class="nav flex-column custom-list">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#carrera1" aria-expanded="false">
                        <i class="fas fa-desktop"></i>Tecnologias de la Información
                    </a>
                    <ul class="subcategories collapse" id="carrera1">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-code"></i>Desarrollo de Software
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-network-wired"></i>Infraestructura de Redes Digitales
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside>

    <div class="page-wrapper">
        <section class="section-two" id="why-token">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-11 offset">
                        <div class="col s12 center-align">
                            <h1 class="titulo">Galeria</h1><hr>
                        </div>
                        <div class="galeria">
                            @foreach ($recursos as $recurso)
                            <div class="col s12 m4 l3">
                                <div class="material-placeholder">
                                    <img src="{{ asset($recurso->archivo) }}" alt="" class="responsive-img materialboxed"
                                        style="width: 200px; height: 150px;"
                                        data-caption="{{$recurso->titulo}} - | {{$recurso->tematica->name}} | - {{$recurso->autor}}">
                                </div>
                            </div>
                            @endforeach
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
                @foreach ($tematicasMostradas as $tematica)
                    <div class="d-flex align-items-center mb-1">
                        <div class="w-8 h-8 rounded-circle overflow-hidden" style="width: 32px; height: 32px;">
                            <img src="{{ $tematica->imagen }}" alt="Imagen - Tematica" style="width: 100%; height: 100%; object-fit: cover; object-position: center center; border-radius: 50%;">
                        </div>
                        <div class="ml-2">
                            <div class="text-secondary fs-6">{{ $tematica->name }}</div>
                            <div class="text-secondary fs-6">{{ $tematica->recursos_count }} recursos registrados</div>
                        </div>
                    </div>
                @endforeach

                @if ($tematicasRestantes->isNotEmpty())
                    <a id="ver-mas" class="text-blue-500 fs-6 cursor-pointer">Ver más</a>
                    <a id="ver-menos" class="text-blue-500 fs-6 cursor-pointer" style="display: none;">Ver menos</a>
                    <div id="tematicas-restantes" style="display: none;">
                        @foreach ($tematicasRestantes as $tematica)
                            <div class="d-flex align-items-center mb-1">
                                <div class="w-8 h-8 rounded-circle overflow-hidden" style="width: 32px; height: 32px;">
                                    <img src="{{ $tematica->imagen }}" alt="Imagen - Tematica" style="width: 100%; height: 100%; object-fit: cover; object-position: center center; border-radius: 50%;">
                                </div>
                                <div class="ml-2">
                                    <div class="text-secondary fs-6">{{ $tematica->name }}</div>
                                    <div class="text-secondary fs-6">{{ $tematica->recursos_count }} recursos registrados</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </aside>
    </div>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="utvt/js/main.js"></script>
</body>

</html>

<script>
    document.getElementById('ver-mas').addEventListener('click', function() {
        document.getElementById('tematicas-restantes').style.display = 'block';
        document.getElementById('ver-mas').style.display = 'none';
        document.getElementById('ver-menos').style.display = 'inline';
    });

    document.getElementById('ver-menos').addEventListener('click', function() {
        document.getElementById('tematicas-restantes').style.display = 'none';
        document.getElementById('ver-mas').style.display = 'inline';
        document.getElementById('ver-menos').style.display = 'none';
    });
</script>