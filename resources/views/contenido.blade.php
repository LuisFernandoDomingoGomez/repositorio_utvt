<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Contenidos | UTVT</title>
    <!-- Stylesheets -->
    <script src="dist/js/jquery.js"></script>
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="dist/css/style.css" rel="stylesheet">
    <link href="utvt/css/template.css" rel="stylesheet">
    <link href="utvt/css/responsive.css" rel="stylesheet">
    <link href="utvt/css/gallery.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="dist/css/responsive.css" rel="stylesheet">
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
                                <input class="form-control me-2 rounded-pill search-input" type="search" placeholder="Buscar en CuervITos" aria-label="Search" style="width: 600px;">
                            </form>
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
        <section class="banner-section banner-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-11 offset">
                        <div class="col-md-12">
                            <div class="title-box-two centered">
                                <h3>Biblioteca de Contenidos</h3>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Archivo</th>
                                        <th>Título</th>
                                        <th>Tematica</th>
                                        <th>Carrera</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($recursos as $recurso)
                                        <tr>
                                            <td>
                                                @php
                                                    $extension = pathinfo($recurso->archivo, PATHINFO_EXTENSION);
                                                @endphp
                                                @if (in_array($extension, ['pdf']))
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/Icon_pdf_file.svg/1200px-Icon_pdf_file.svg.png" alt="PDF" style="width: 45px; height: 50px;">
                                                @elseif (in_array($extension, ['doc', 'docx']))
                                                    <img src="dist/images/icons/formatos/word.png" alt="Word" style="width: 45px; height: 50px;">
                                                @elseif (in_array($extension, ['ppt', 'pptx']))
                                                    <img src="dist/images/icons/formatos/powerpoint.png" alt="PowerPoint" style="width: 45px; height: 50px;">
                                                @elseif (in_array($extension, ['xls', 'xlsx']))
                                                    <img src="dist/images/icons/formatos/excel.png" alt="Excel" style="width: 45px; height: 50px;">
                                                @else
                                                    <img src="https://thumbs.dreamstime.com/b/error-con-la-plantilla-del-dise%C3%B1o-cuaderno-icono-para-el-sitio-web-gr%C3%A1fico-azul-fondo-109996932.jpg" alt="No compatible" class="img-fluid mx-auto d-block" style="width: 50px; height: 50px;">
                                                @endif
                                            </td>
                                            <td>{{ $recurso->titulo }}</td>
                                            <td><a href="#" style="color: #007863;">{{ $recurso->tematica->name }}</a></td>
                                            <td>{{ $recurso->carrera->name }}</td>
                                            <td>
                                                <a href="{{ asset($recurso->archivo) }}" class="block text-right text-blue-500 btn-ver-ahora" data-pdf-url="{{ asset($recurso->archivo) }}" style="font-size: 0.9rem;">Ver Ahora</a>
                                            </td>
                                        </tr>
                                        <!-- Modal para visualizar PDF -->
                                        <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="pdfModalLabel">{{ $recurso->titulo }} - {{$recurso->user->name}}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <iframe id="pdfViewer" src="" frameborder="0" style="width: 100%; height: 500px;"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Barra lateral derecha (right sidebar) -->
        <aside class="right-sidebar">
            <div class="sidebar-content">
                <br><br><br><br>
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
                <hr>

                <div class="gallery">
                    <h6>Áreas de Estudio</h6>
                    <div class="row">
                        @foreach ($asignaturas as $asignatura )
                        <div class="col-4">
                            <div class="gallery-image">
                                <img src="{{ $asignatura->imagen }}" alt="Área de Estudio">
                                <div class="overlay">
                                    <h6>{{ $asignatura->name }}</h6>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
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

<script>
    function openPdfModal(pdfUrl) {
        $('#pdfViewer').attr('src', pdfUrl);
        new bootstrap.Modal(document.getElementById('pdfModal')).show();
    }

    $('.btn-ver-ahora').on('click', function (e) {
        e.preventDefault();

        var pdfUrl = $(this).data('pdf-url');

        if (pdfUrl.toLowerCase().endsWith('.pdf')) {
            openPdfModal(pdfUrl);
        } else {
            window.location.href = pdfUrl;
        }
    });
</script>