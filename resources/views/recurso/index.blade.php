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
    <title>Recursos | Inicio</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="dist/css/app.css"/>
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
                <img alt="Midone - HTML Admin Template" class="logo__image w-20" src="dist/images/utvt_white.png">
            </a>
            <!-- END: Logo -->

            <!-- BEGIN: Breadcrumb -->
            <nav aria-label="breadcrumb" class="-intro-x h-[45px] mr-auto">
                <ol class="breadcrumb breadcrumb-light">
                    <li class="breadcrumb-item"><a href="#">Administracion</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Recursos</li>
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
                <div class="intro-y flex flex-col sm:flex-row items-center">
                    <h2 class="text-lg font-medium mr-auto">
                        Gestión de Recursos
                    </h2>
                    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                        <a class="btn btn-primary shadow-md mr-2" href="{{ route('recursos.create') }}">Agregar</a>
                        <div class="dropdown ml-auto sm:ml-0">
                            <button class="dropdown-toggle btn px-2 box" aria-expanded="false"
                                data-tw-toggle="dropdown">
                                <span class="w-5 h-5 flex items-center justify-center"><i
                                    class="w-4 h-4" data-lucide="plus"></i></span>
                            </button>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="{{ route('recursos.create') }}" class="dropdown-item"> <i data-lucide="recursos" class="w-14 h-14 mr-2"></i>Agregar Recurso</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                    <form id="tabulator-html-filter-form" class="d-flex" action="{{ route('recursos.index') }}" method="GET">
                        <div class="input-group" style="max-width: 400px;">
                            <input class="form-control me-2" type="text" name="busqueda" placeholder="Búsqueda" aria-label="Search" style="height: 35px;">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-outline-success" value="enviar" style="line-height: 1; display: flex; align-items: center; height: 35px;">
                                    <i class="fa fa-search fa"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    @if ($message = Session::get('success'))
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                        <script>
                            Swal.fire({
                                title: 'Éxito',
                                text: "{{ session('success') }}",
                                icon: 'success',
                                confirmButtonText: 'OK'
                            });
                        </script>
                    @endif
                    <div class="overflow-x-auto scrollbar-hidden">
                        <div class="overflow-x-auto"><br>
                            @foreach ($recursos as $recurso )
                            <div class="intro-y box p-3 mt-2 rounded-lg shadow-lg bg-white">
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 rounded-full overflow-hidden">
                                            <img src="{{ asset('avatars/' . $recurso->user->avatar) }}" alt="Foto de Perfil">
                                        </div>
                                        <div class="ml-2">
                                            <a href="#" class="font-medium text-blue-500">{{$recurso->user->name}}</a>
                                            <div class="text-gray-600">{{$recurso->created_at->isoFormat('D [de] MMMM [de] Y')}}</div>
                                        </div>
                                    </div>
                                    <ul class="flex space-x-4 absolute right-0 mt-2">
                                        <li>
                                            <a href="{{ route('recursos.show', $recurso->id) }}" class="text-blue-500">
                                                <i data-lucide="eye" class="w-4 h-4 mr-1"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('recursos.edit', $recurso->id) }}" class="text-blue-500">
                                                <i data-lucide="check-square" class="w-4 h-4 mr-1"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <form action="{{ route('recursos.destroy', $recurso->id) }}" method="POST" class="formEliminar">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500">
                                                    <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i>
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                <br>
                                <h2 class="text-lg font-semibold mb-1 text-black">{{$recurso->titulo}}</h2>
                                <p class="text-gray-700">{{$recurso->descripcion}}</p>
                                <div class="my-4">
                                    @php
                                        $extension = pathinfo($recurso->archivo, PATHINFO_EXTENSION);
                                    @endphp
                                    @if (in_array($extension, ['pdf']))
                                        <embed src="{{ asset($recurso->archivo) }}" type="application/pdf" width="100%" height="400px" />

                                    @elseif (in_array($extension, ['doc', 'docx']))
                                        <img src="/dist/images/logos/formatos/logo_word.jpg" alt="Vista previa de Word" class="w-48 h-auto mx-auto rounded-md" style="width: 250px; height: 250px;">
                                        <a href="{{ asset($recurso->archivo) }}" class="block text-right text-blue-500">Descargar Archivo</a>

                                    @elseif (in_array($extension, ['ppt', 'pptx']))
                                        <img src="/dist/images/logos/formatos/logo_powerpoint.jpg" alt="Vista previa de PowerPoint" class="w-48 h-auto mx-auto rounded-md" style="width: 250px; height: 250px;">
                                        <a href="{{ asset($recurso->archivo) }}" class="block text-right text-blue-500">Descargar Archivo</a>

                                    @elseif (in_array($extension, ['xls', 'xlsx']))
                                        <img src="/dist/images/logos/formatos/logo_excel.jpg" alt="Vista previa de Excel" class="w-48 h-auto mx-auto rounded-md" style="width: 250px; height: 250px;">
                                        <a href="{{ asset($recurso->archivo) }}" class="block text-right text-blue-500">Descargar Archivo</a>

                                    @elseif (in_array($extension, ['jpg', 'jpeg', 'png', 'gif']))
                                        <img src="{{ asset($recurso->archivo) }}" alt="Imagen de la Publicación" class="img-fluid mx-auto d-block" style="width: 350px; height: 250px;">

                                    @elseif (in_array($extension, ['mp4', 'avi', 'mov']))
                                        <video class="w-full h-64 rounded-md" controls>
                                            <source src="{{ asset($recurso->archivo) }}" type="video/{{$extension}}">
                                            Tu navegador no soporta el elemento de video.
                                        </video>

                                    @else
                                        <img src="https://thumbs.dreamstime.com/b/error-con-la-plantilla-del-dise%C3%B1o-cuaderno-icono-para-el-sitio-web-gr%C3%A1fico-azul-fondo-109996932.jpg" alt="Tipo de archivo no compatible" class="w-full h-64 rounded-md">
                                    @endif
                                </div>
                            </div><br>
                            @endforeach
                        </div>
                    </div>
                <!-- Paginacion -->
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                        {!! $recursos->links() !!}
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api"]&libraries=places"></script>
    <script src="/dist/js/app.js"></script>
    <!-- END: JS Assets-->
</body>
</html>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    (function() {
        'use strict'
        //crear la clase formEliminar dentro del form del boton borrar
        //recordar que cada registro a eliminar esta contenido en un form
        var forms = document.querySelectorAll('.formEliminar')
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    event.preventDefault()
                    event.stopPropagation()
                    Swal.fire({
                        title: '¿Deseas eliminar el Recurso?',
                        icon: 'info',
                        showCancelButton: true,
                        confirmButtonColor: '#20c997',
                        cancelButtonColor: '#6c757d',
                        confirmButtonText: 'Confirmar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            this.submit();
                            Swal.fire('¡Eliminado!',
                                'El registro ha sido eliminado exitosamente.', 'success');
                        }
                    })
                }, false)
            })
    })()
</script>