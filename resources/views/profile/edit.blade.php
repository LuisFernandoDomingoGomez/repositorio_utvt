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
    <title>Recursos | Vista Previa</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="/dist/css/app.css"/>
    <link rel="stylesheet" href="/utvt/css/profile.css"/>
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
                    <li class="breadcrumb-item active" aria-current="page">Perfil</li>
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
        </nav>
        <!-- END: Side Menu -->
        <!-- BEGIN: Content -->
            <div class="content">
                <div class="content">
                    <div class="container">
                        <div class="profile-card">
                            <div class="avatar">
                                <img id="avatar-preview" src="{{ asset('avatars/' . Auth::user()->avatar) }}" alt="Avatar">
                                <input type="file" id="avatar-input" class="hidden" accept="image/*">
                                <label for="avatar-input" class="change-avatar-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                </label>
                            </div><br>
                            <div class="user-info">
                                <h3 class="user-name">{{ Auth::user()->name }}</h3>
                                <p class="user-role">{{ Auth::user()->getRoleNames()->first() }}</p>
                            </div>
                        </div>

                        <div class="settings-card">
                            <h3>{{ __('Editar Perfil') }}</h3>
                            <!-- Form for user profile settings -->
                            {!! Form::model($user, ['route' => ['profile.updateProfile', $user->id], 'method' => 'patch']) !!}
                            <div class="font-medium text-base">Configuracion</div>
                                <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                                    <div class="intro-y col-span-12 sm:col-span-6">
                                        <label for="name" class="form-label">Name</label>
                                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="intro-y col-span-12 sm:col-span-6">
                                        <label for="email" class="form-label">Email</label>
                                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="intro-y col-span-12 sm:col-span-6">
                                        <label for="password" class="form-label">Password</label>
                                        {!! Form::password('password', ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="intro-y col-span-12 sm:col-span-6">
                                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                                        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                                    <button type="submit" class="btn btn-primary ml-2">Guardar</button>
                                </div><br>
                                {!! Form::close() !!}
                                <h2 class="text-lg font-medium mb-4">Eliminar Cuenta</h2>
                                {!! Form::open(['route' => ['profile.delete', $user->id], 'method' => 'delete', 'class' => 'space-y-4 formEliminar']) !!}
                                <div class="flex flex-col">
                                    <label for="password" class="text-gray-700 dark:text-gray-300 font-medium">Password</label>
                                    {!! Form::password('password', ['class' => 'form-input mt-1']) !!}
                                </div>
                                <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                                    <button type="submit" class="btn btn-danger ml-2">Eliminar</button>
                                </div>
                            {!! Form::close() !!}
                            </div>
                        </div>
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    @if(session('status') === 'profile-updated')
    Swal.fire({
        title: '¡Éxito!',
        text: 'Los datos del perfil se han actualizado correctamente.',
        icon: 'success',
        confirmButtonText: 'OK'
    });
    @endif

    document.getElementById("change-avatar-button").addEventListener("click", function () {
        document.getElementById("avatar-input").addEventListener("change", function () {
            const avatarPreview = document.getElementById("avatar-preview");
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    avatarPreview.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    });
</script>