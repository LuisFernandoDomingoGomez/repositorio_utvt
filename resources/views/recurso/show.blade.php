<!DOCTYPE html>

<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Enigma admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Enigma Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Recursos | Creacion</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="/dist/css/app.css"/>
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="py-5 md:py-0">
    <!-- BEGIN: Mobile Menu -->
    <div class="mobile-menu md:hidden">
        <div class="mobile-menu-bar">
            <a href="" class="flex mr-auto">
                <img alt="Midone - HTML Admin Template" class="w-12" src="/dist/images/utvt_white.png">
            </a>
            <a href="javascript:;" class="mobile-menu-toggler"><i data-lucide="bar-chart-2"
                class="w-8 h-8 text-white transform -rotate-90"></i>
            </a>
        </div>
        <div class="scrollable">
            <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="x-circle"
                    class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            <ul class="scrollable__content py-2">
                <li>
                    <a href="/" class="menu menu--active">
                        <div class="menu__icon"><i data-lucide="home"></i></div>
                        <div class="menu__title">Principal</div>
                    </a>
                </li>
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="{{ route('recursos.index') }}" class="menu menu--active">
                        <div class="menu__icon"><i data-lucide="inbox"></i></div>
                        <div class="menu__title">Recursos de Aprendizaje</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"><i data-lucide="edit"></i></div>
                        <div class="menu__title">Registros<i data-lucide="chevron-down" class="menu__sub-icon "></i></div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{ route('carreras.index') }}" class="menu">
                                <div class="menu__icon"><i class="fas fa-graduation-cap"></i></div>
                                <div class="menu__title">Carreras</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('asignaturas.index') }}" class="menu">
                                <div class="menu__icon"><i class="fas fa-book-open"></i></div>
                                <div class="menu__title">Asignaturas</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('tematicas.index') }}" class="menu">
                                <div class="menu__icon"><i class="fas fa-comment"></i></div>
                                <div class="menu__title">Tematicas</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"><i data-lucide="hard-drive"></i></div>
                        <div class="menu__title">Funciones Avanzadas<i data-lucide="chevron-down" class="menu__sub-icon "></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{ route('users.index') }}" class="menu">
                                <div class="menu__icon"><i class="fas fa-users"></i></div>
                                <div class="menu__title">Usuarios</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('roles.index') }}" class="menu">
                                <div class="menu__icon"><i class="fas fa-user-lock"></i></div>
                                <div class="menu__title">Roles</div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Mobile Menu -->
    <!-- BEGIN: Top Bar -->
    <div
        class="top-bar-boxed h-[70px] md:h-[65px] z-[51] border-b border-white/[0.08] mt-12 md:mt-0 -mx-3 sm:-mx-8 md:-mx-0 px-3 md:border-b-0 relative md:fixed md:inset-x-0 md:top-0 sm:px-8 md:px-10 md:pt-10 md:bg-gradient-to-b md:from-slate-100 md:to-transparent">
        <div class="h-full flex items-center">

            <!-- BEGIN: Logo -->
            <a href="" class="logo -intro-x hidden md:flex xl:w-[180px] block">
                <img alt="Midone - HTML Admin Template" class="logo__image w-20" src="/dist/images/utvt_white.png">
            </a>
            <!-- END: Logo -->

            <!-- BEGIN: Breadcrumb -->
            <nav aria-label="breadcrumb" class="-intro-x h-[45px] mr-auto">
                <ol class="breadcrumb breadcrumb-light">
                    <li class="breadcrumb-item"><a href="#">Administracion</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('recursos.index') }}">Recursos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Creacion</li>
                </ol>
            </nav>
            <!-- END: Breadcrumb -->
            
            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110"
                    role="button" aria-expanded="false" data-tw-toggle="dropdown">
                    <img alt="Midone - HTML Admin Template" src="dist/images/profile-6.jpg">
                </div>
                <div class="dropdown-menu w-56">
                    <ul
                        class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                        <li class="p-2">
                            <div class="font-medium">Al Pacino</div>
                            <div class="text-xs text-white/60 mt-0.5">DevOps Engineer</div>
                        </li>
                        <li>
                            <hr class="dropdown-divider border-white/[0.08]">
                        </li>
                        <li>
                            <a href="{{ route('profile.edit') }}" class="dropdown-item hover:bg-white/5"> <i data-lucide="user"
                                    class="w-4 h-4 mr-2"></i> Profile </a>
                        </li>

                        <!-- problemas con el icono y el metodo y el logout -->
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" class="dropdown-item"  onclick="event.preventDefault();
                                this.closest('form').submit();">
                                    <i data-lucide="toggle-right" class="w-4 h-6 mr-3"></i>
                                    <span>{{ __('Cerrar sesión') }}</span>
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END: Account Menu -->
        </div>
    </div>
    <!-- END: Top Bar -->


    <!-- incio del dashboard  -->
    <div class="flex overflow-hidden">
        <!-- BEGIN: Side Menu -->
        <nav class="side-nav">
            <ul>
                <li>
                    <a href="/" class="side-menu side-menu--active">
                        <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                        <div class="side-menu__title">Principal</div>
                    </a>
                </li>

                <li>
                    <a href="{{ route('recursos.index') }}" class="side-menu side-menu">
                        <div class="side-menu__icon"> <i data-lucide="inbox"></i> </div>
                        <div class="side-menu__title">Recursos de Aprendizaje</div>
                    </a>
                </li>

                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"><i data-lucide="edit"></i></div>
                        <div class="side-menu__title">Registros
                            <div class="side-menu__sub-icon "><i data-lucide="chevron-down"></i></div>
                        </div>
                    </a>
                    <ul class="">
                        <li style="margin-left: 5px;">
                            <a href="{{ route('carreras.index') }}" class="side-menu">
                                <div class="side-menu__icon"><i class="fas fa-graduation-cap"></i></div>
                                <div class="side-menu__title">Carreras</div>
                            </a>
                        </li>
                        <li style="margin-left: 5px;">
                            <a href="{{ route('asignaturas.index') }}" class="side-menu">
                                <div class="side-menu__icon"><i class="fas fa-book-open"></i></div>
                                <div class="side-menu__title">Asignaturas</div>
                            </a>
                        </li>
                        <li style="margin-left: 5px;">
                            <a href="{{ route('tematicas.index') }}" class="side-menu">
                                <div class="side-menu__icon"><i class="fas fa-comment"></i></div>
                                <div class="side-menu__title">Tematicas</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"><i data-lucide="hard-drive"></i></div>
                        <div class="side-menu__title">Funciones Avanzadas
                            <div class="side-menu__sub-icon "><i data-lucide="chevron-down"></i></div>
                        </div>
                    </a>
                    <ul class="">
                        <li style="margin-left: 5px;">
                            <a href="{{ route('users.index') }}" class="side-menu">
                                <div class="side-menu__icon"><i class="fas fa-users"></i></div>
                                <div class="side-menu__title">Usuarios</div>
                            </a>
                        </li>
                        <li style="margin-left: 5px;">
                            <a href="{{ route('roles.index') }}" class="side-menu">
                                <div class="side-menu__icon"><i class="fas fa-user-lock"></i></div>
                                <div class="side-menu__title">Roles</div>
                            </a>
                        </li>
                    </ul>
                </li>
        </nav>
        <!-- END: Side Menu -->
        <!-- BEGIN: Content -->
            <div class="content">
                <div class="mt-4"><br></div>
                <div class="intro-y box p-3 mt-2 rounded-lg shadow-lg bg-white"> <!-- Fondo blanco ligeramente sombreado -->
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-full overflow-hidden">
                            <img src="https://scontent.fmex9-1.fna.fbcdn.net/v/t39.30808-1/382714984_1491385781684245_6773661663586584814_n.jpg?stp=dst-jpg_p160x160&_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGfqFO-ity2XKd8PHQdiu-ZshDG-emaRC2yEMb56ZpELXiTLR8FwgO2sqN4-zy4iN2fJ7eDINTsytQX2fDyFqFV&_nc_ohc=OTOlY7NJS9MAX-MdnMD&_nc_ht=scontent.fmex9-1.fna&oh=00_AfCwQQ0o-TCbeUd5rHgtyQ8faXX18WwaoJ8G31iiIF10iQ&oe=65326839" alt="Foto de Perfil">
                        </div>
                        <div class="ml-2">
                            <a href="#" class="font-medium text-blue-500">Luis Fernando Domingo Gómez</a> <!-- Color azul para el nombre de usuario -->
                            <div class="text-gray-600">16 de octubre de 2023</div>
                        </div>
                    </div>
                    <br>

                    <!-- Título de la publicación -->
                    <h2 class="text-lg font-semibold mb-1 text-black">Título de la Publicación</h2> <!-- Color de texto negro para el título -->

                    <!-- Descripción de la publicación -->
                    <p class="text-gray-700">Descripción de la Publicación...</p>

                    <!-- Contenido de la publicación (imagen/archivo/video) -->
                    <div class="my-4">
                        <img src="https://www.danielprimo.io/files/2021-05/1621490872_laravel-bases-de-datos-y-modelo.png" alt="Imagen de la Publicación" class="w-full rounded-md"> <!-- Bordes ligeramente redondeados -->
                        <!-- O bien, si tienes un archivo o video, puedes mostrarlo aquí -->
                    </div>
                </div>
            </div>
        <!-- END: Content -->
    </div>

    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api"]&libraries=places"></script>
    <script src="/dist/js/app.js"></script>
    <!-- END: JS Assets-->
</body>
</html>