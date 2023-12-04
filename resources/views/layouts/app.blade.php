<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'VentasM') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                {{ __('Seguridad') }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('usuarios.index') }}">{{ __('Usuarios') }}</a></li>
                                <li><a class="dropdown-item" href="{{ route('roles.index') }}">{{ __('Roles') }}</a></li>
                                <li><a class="dropdown-item" href="{{ route('permisos.index') }}">{{ __('Permisos') }}</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                {{ __('Empleados') }}
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('empleados.index') }}">{{ __('Empleados') }}</a></li>
                                <li><a class="dropdown-item" href="{{ route('contratos.index') }}">{{ __('Contratos') }}</a></li>
                                <li><a class="dropdown-item" href="{{ route('despidos.index') }}">{{ __('Despidos') }}</a></li>
                                <li><a class="dropdown-item" href="{{ route('motivos-despidos.index') }}">{{ __('Motivos Despidos') }}</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                {{ __('Cotizaciones') }}
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('cotizaciones.index') }}">{{ __('Cotizaciones') }}</a></li>
                                <li><a class="dropdown-item" href="{{ route('detalles-cotizaciones.index') }}">{{ __('Detalles') }}</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                {{ __('Productos') }}
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('productos.index') }}">{{ __('Productos') }}</a></li>
                                <li><a class="dropdown-item" href="{{ route('marcas.index') }}">{{ __('Marcas') }}</a></li>
                                <li><a class="dropdown-item" href="{{ route('categorias.index') }}">{{ __('Categorias') }}</a></li>
                                <li><a class="dropdown-item" href="{{ route('proveedores.index') }}">{{ __('Proveedores') }}</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                {{ __('Facturacion') }}
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('facturas.index') }}">{{ __('Facturas') }}</a></li>
                                <li><a class="dropdown-item" href="{{ route('detalles-facturas.index') }}">{{ __('Detalles') }}</a></li>
                                <li><a class="dropdown-item" href="{{ route('datos-empresas.index') }}">{{ __('Sobre Nosotros') }}</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                {{ __('Movimientos') }}
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('movimientos.index') }}">{{ __('Movimientos') }}</a></li>
                                <li><a class="dropdown-item" href="{{ route('motivos.index') }}">{{ __('Motivos') }}</a></li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                {{ __('Clientes') }}
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('clientes.index') }}">{{ __('Clientes') }}</a></li>
                                <li><a class="dropdown-item" href="{{ route('paises.index') }}">{{ __('Paises') }}</a></li>
                                <li><a class="dropdown-item" href="{{ route('departamentos.index') }}">{{ __('Departamentos') }}</a></li>
                                <li><a class="dropdown-item" href="{{ route('municipios.index') }}">{{ __('Municipios') }}</a></li>
                                <li><a class="dropdown-item" href="{{ route('ciudades.index') }}">{{ __('Ciudades') }}</a></li>

                            </ul>
                        </li>

                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
