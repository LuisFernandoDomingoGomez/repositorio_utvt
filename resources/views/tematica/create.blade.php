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
    <title>Tematicas | Creación</title>
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
                    <a href="/dashboard" class="menu menu--active">
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
                    <li class="breadcrumb-item"><a href="{{ route('tematicas.index') }}">Tematicas</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Creación</li>
                </ol>
            </nav>
            <!-- END: Breadcrumb -->
            
            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110"
                    role="button" aria-expanded="false" data-tw-toggle="dropdown">
                    <img alt="{{ Auth::user()->name }} Avatar" src="{{ asset('avatars/' . Auth::user()->avatar) }}">
                </div>
                <div class="dropdown-menu w-56">
                    <ul
                        class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                        <li class="p-2">
                            <div class="font-medium">{{ Auth::user()->name }}</div>
                            <div class="text-xs text-white/60 mt-0.5">{{ Auth::user()->getRoleNames()->first() }}</div>
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
                    <a href="/dashboard" class="side-menu side-menu--active">
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
            <div class="content">
                <div class="intro-y flex flex-col sm:flex-row items-center mt-1">
                    <h2 class="text-lg font-medium mr-auto">
                        Creación de Tematica
                    </h2>
                </div>
                <!-- BEGIN: HTML Table Data -->
                <div class="intro-y box p-5 mt-5">
                    <div class="overflow-x-auto scrollbar-hidden">
                        <div class="overflow-x-auto">
                            <div class="intro-y box py-5 sm:py-5">
                                @if ($errors->any())
                                <div class="alert alert-outline-danger alert-dismissible show flex items-center mb-2" role="alert">
                                        <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i>
                                        <strong>¡Revise los campos!</strong>
                                        <span class="badge badge-danger"></span>
                                </div>
                                @endif
                                <form method="POST" action="{{ route('tematicas.store') }}"  role="form" enctype="multipart/form-data">
                                    @csrf
                                    @include('tematica.form')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: HTML Table Data -->
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