<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    
    


  
</head>
    

<body class="bg-blue-100 mx-auto max-w-full">
    <div id="app" >
        @auth
            
        
        <nav class="bg-blue-900 p-5">
            <div class="container scroll-m-6 mx-auto">
                <div class="flex items-center">
                    <img src="{{ asset('img/logo-sena-negro-png-2022.png') }}" alt="Logo Sena " class="h-8 w-8">
                    <span class="text-white ml-2 text-lg font-semibold">SE-JustApp</span>
                </div>
                <button class="flex items-center" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse align-text-left" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="flex justify-end"></ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="list-none">
                        <!-- ... (rest of the code) -->
                    </ul>
                        @guest
                            
                        
                            @if (Route::has('login'))
                                <li class="nav-item list-none flex justify-end">
                                    <a class="text-white mr-4" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item list-none flex justify-end">
                                    <a class="text-white mr-4" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            @role('Admin')
                                <li><a class="text-white mr-4" href="{{ route('users.index') }}">Usuarios</a></li>
                            @endrole
                            <li><a class="text-white mr-4" href="{{ route('roles.index') }}">Roles</a></li>
                            <li><a class="text-white mr-4" href="{{ route('products.index') }}">Productos</a></li>
                            <li><a class="text-white mr-4" href="{{ route('programas.index') }}">Programas</a></li>
                            <li><a class="text-white mr-4" href="{{ route('aprendizs.index') }}">Aprendices</a></li>
                            <li><a class="text-white mr-4" href="{{ route('comites.index') }}">Comites</a></li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="text-white mr-4 dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>

            </div>
        </nav>
        @endauth
        <main class="flex justify-center items-center h-screen mx-auto max-w-full">
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>