<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CuervITo - Sumérgete en cualquier área</title>
    <script src="dist/js/jquery.js"></script>
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="dist/css/style.css" rel="stylesheet">
    <link href="utvt/css/template.css" rel="stylesheet">
    <link href="utvt/css/responsive.css" rel="stylesheet">
    <link href="utvt/css/cards.css" rel="stylesheet">
    <link href="utvt/css/carrusel.css" rel="stylesheet">
    <link href="utvt/css/gallery.css" rel="stylesheet">
    <!--<link href="utvt/css/dark.css" rel="stylesheet"> Styles para Dark Mode -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="dist/css/responsive.css" rel="stylesheet">
    <style>
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
                                <input class="form-control me-2 rounded-pill search-input" type="search" placeholder="Buscar en CuervITos" aria-label="Search" style="width: 600px;">
                            </form>
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
                    <a class="nav-link" href="#">
                        <i class="fas fa-folder"></i> Indice
                    </a>
                </li>
                <li class= "nav-item">
                    <a class="nav-link" href="#">
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
        <!-- Contenedor -->
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
                                            <a class="carta" href="#"
                                                style="--carta-bg-img: url(https://ayudawp.com/wp-content/uploads/2016/05/sintaxis-codigo-html.jpg)">
                                                <div>
                                                    <h1>HTML Sintaxis</h1>
                                                    <p>The syntax of a language is how it works. How to actually write it. Learn HTML syntax…</p>
                                                    <div class="date">6 Oct 2021</div>
                                                    <div class="tags">
                                                        <div class="tag">HTML</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="carta" href="#"
                                                style="--carta-bg-img: url('https://www.danielprimo.io/files/2021-05/1621490872_laravel-bases-de-datos-y-modelo.png')">
                                                <div>
                                                    <h1>Laravel - Modelo MVC</h1>
                                                    <p>Learn about some of the most common Model tags…</p>
                                                    <div class="date">9 Oct 2021</div>
                                                    <div class="tags">
                                                        <div class="tag">Laravel</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="carta" href="#"
                                                style="--carta-bg-img: url('https://www.certus.edu.pe/blog/wp-content/uploads/2021/06/que-es-sql-todo-debes-saber-lenguaje-1160x630.jpg')">
                                                <div>
                                                    <h1>Todo sobre SQL</h1>
                                                    <p>Learn how to use links and images along with file paths…</p>
                                                    <div class="date">14 Oct 2021</div>
                                                    <div class="tags">
                                                        <div class="tag">SQL</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carousel-cards-wrapper">
                                            <a class="carta" href="#"
                                                style="--carta-bg-img: url(https://www.openlogic.com/sites/default/files/styles/social_preview_image/public/image/2021-06/image-blog-openlogic-what-is-mongodb.png?itok=hByLkKJk)">
                                                <div>
                                                    <h1>Mongo Sintaxis</h1>
                                                    <p>The syntax of a language is how it works. How to actually write it. Learn Mongo syntax…</p>
                                                    <div class="date">6 Oct 2021</div>
                                                    <div class="tags">
                                                        <div class="tag">Mongo</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="carta" href="#"
                                                style="--carta-bg-img: url('https://community-cdn-digitalocean-com.global.ssl.fastly.net/snN3rbgKF7McfuiQAKcoLWMn')">
                                                <div>
                                                    <h1>Vue Js</h1>
                                                    <p>Learn about some of the most common Vue tags…</p>
                                                    <div class="date">9 Oct 2021</div>
                                                    <div class="tags">
                                                        <div class="tag">Vue Js</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="carta" href="#"
                                                style="--carta-bg-img: url('https://assets.rbl.ms/33364099/origin.jpg')">
                                                <div>
                                                    <h1>Python</h1>
                                                    <p>Learn how to use links and images along with file paths…</p>
                                                    <div class="date">14 Oct 2021</div>
                                                    <div class="tags">
                                                        <div class="tag">Python</div>
                                                    </div>
                                                </div>
                                            </a>
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
                        <!-- Posts -->
                        @foreach ($recursos as $recurso)
                        <div class="card rounded bg-white shadow">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="w-10 h-10 rounded-circle overflow-hidden" style="width: 50px; height: 50px;">
                                        <img src="{{ asset('avatars/' . $recurso->user->avatar) }}" alt="Foto de Perfil" style="width: 100%; height: 100%; object-fit: cover; object-position: center center; border-radius: 50%;">
                                    </div>
                                    <div class="ml-2">
                                        <a href="#" class="font-weight-bold text-dark fs-5">{{$recurso->user->name}}</a>
                                        <div class="text-secondary fs-6">{{$recurso->created_at->isoFormat('D [de] MMMM [de] Y')}}</div>
                                    </div>
                                </div>
                                <br>
                                <div class="card-title font-weight-bold mb-3 fs-4">{{$recurso->titulo}}</div>
                                <p class="card-text fs-5">Descripción de la Publicación...</p>
                                <div class="my-4">
                                    @php
                                        $extension = pathinfo($recurso->archivo, PATHINFO_EXTENSION);
                                    @endphp
                                    @if (in_array($extension, ['pdf']))
                                        <embed src="{{ asset($recurso->archivo) }}" type="application/pdf" width="100%" height="400px" />

                                    @elseif (in_array($extension, ['doc', 'docx']))
                                        <img src="dist/images/logos/formatos/logo_word.jpg" alt="Vista previa de Word" class="img-fluid mx-auto d-block" style="width: 250px; height: 250px;">
                                        <a href="{{ asset($recurso->archivo) }}" class="block text-right text-blue-500">Descargar Archivo</a>

                                    @elseif (in_array($extension, ['ppt', 'pptx']))
                                        <img src="dist/images/logos/formatos/logo_powerpoint.jpg" alt="Vista previa de PowerPoint" class="img-fluid mx-auto d-block" style="width: 250px; height: 250px;">
                                        <a href="{{ asset($recurso->archivo) }}" class="block text-right text-blue-500">Descargar Archivo</a>

                                    @elseif (in_array($extension, ['xls', 'xlsx']))
                                        <img src="dist/images/logos/formatos/logo_excel.jpg" alt="Vista previa de Excel" class="img-fluid mx-auto d-block" style="width: 250px; height: 250px;">
                                        <a href="{{ asset($recurso->archivo) }}" class="block text-right text-blue-500">Descargar Archivo</a>

                                    @elseif (in_array($extension, ['jpg', 'jpeg', 'png', 'gif']))
                                        <img src="{{ asset($recurso->archivo) }}" alt="Imagen de la Publicación" class="img-fluid mx-auto d-block">

                                    @elseif (in_array($extension, ['mp4', 'avi', 'mov']))
                                        <video class="img-fluid mx-auto d-block" controls>
                                            <source src="{{ asset($recurso->archivo) }}" type="video/{{$extension}}">
                                            Tu navegador no soporta el elemento de video.
                                        </video>

                                    @else
                                        <img src="https://thumbs.dreamstime.com/b/error-con-la-plantilla-del-dise%C3%B1o-cuaderno-icono-para-el-sitio-web-gr%C3%A1fico-azul-fondo-109996932.jpg" alt="Tipo de archivo no compatible" class="img-fluid mx-auto d-block">
                                    @endif
                                </div>
                            </div>
                        </div><br>
                        @endforeach
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
                @foreach ($tematicas as $tematica )
                <div class="d-flex align-items-center">
                    <div class="w-10 h-10 rounded-circle overflow-hidden" style="width: 50px; height: 50px;">
                        <img src="{{ $tematica->imagen }}" alt="Imagen - Tematica" style="width: 100%; height: 100%; object-fit: cover; object-position: center center; border-radius: 50%;">
                    </div>
                    <div class="ml-2">
                        <div class="text-secondary fs-5">{{ $tematica->name }}</div>
                        <div class="text-secondary fs-6">{{ $tematica->recursos_count }} recursos registrados</div>
                    </div>
                </div><br>
                @endforeach
                <hr>

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