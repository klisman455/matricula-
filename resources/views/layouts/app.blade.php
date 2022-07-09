<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="bg-success" style="height: 10px" ></div>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand mb-2" href="{{ url('/') }}">
                    <img src="{{asset("fotoss/logoudh3.jpg")}}">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @auth
                            <div>
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle" href="/profesor/registrar" role="button" data-bs-toggle="dropdown"> profesor</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/profesor/registrar">registrar profesor</a></li>
                                    <li><a class="dropdown-item" href="/profesor/mostrar">mostrar profesores</a></li>
                                </ul>
                            </li>
                            </div>
                            <div>
                                <div>
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-toggle" href="/profesor/registrar" role="button" data-bs-toggle="dropdown">matricula</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="/matricula/registrar">registrar matricula</a></li>
                                            <li><a class="dropdown-item" href="/matricula/mostrar">mostrar matricula</a></li>
                                        </ul>
                                    </li>
                            </div>
                            </div>
                            <div>
                                <div>
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown">malla</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="/malla/registrar">registrar malla</a></li>
                                        </ul>
                                    </li>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown">carrera</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="/carrera/registrar">registrar carrera</a></li>
                                        </ul>
                                    </li>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown">curso</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="/curso/registrar">registrar y designar profesor</a></li>
                                            <li><a class="dropdown-item" href="/curso/mostrar">mostrar curso</a></li>
                                        </ul>
                                    </li>
                                </div>
                            </div>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="">ver_hora..</a>
                            </li>
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        {{-- @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif--}}
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
