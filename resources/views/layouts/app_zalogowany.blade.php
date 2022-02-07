<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Siłownia') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">


</head>

<body>
<div id="app">

    <nav class="navbar navbar-expand-lg navbar-light bg-light  py-3 shadow">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="/photo/logo1.png" width="35" height="35" class="d-inline-block align-top" alt="" loading="lazy">
            {{ config('app.name', 'Siłownia') }}
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <li class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto font-italic">
                    @if(\Illuminate\Support\Facades\Auth::user()->checkrole('Trener'))
                    <li class="nav-item active ml-2 mr-2">
                        <a class="nav-link:hover " href="{{ url('/cwiczenia') }}">Ćwiczenia</a>
                    </li>
                    <li class="nav-item active ml-2 mr-2">
                        <a class="nav-link:hover" href="{{ url('/planytreningowe') }}">Plany treningowe</a>
                    </li>
                    @endif
                        @if(\Illuminate\Support\Facades\Auth::user()->checkrole('Dietetyk'))
                            <li class="nav-item active ml-2 mr-2">
                                <a class="nav-link:hover " href="{{ url('/produktyzywnosciowe') }}">Produkty żywnościowe</a>
                            </li>
                            <li class="nav-item active ml-2 mr-2">
                                <a class="nav-link:hover" href="{{ url('/dodajposilek') }}">Dodaj posilek</a>
                            </li>
                            <li class="nav-item active ml-2 mr-2">
                                <a class="nav-link:hover" href="{{ url('/dodajdiete') }}">Dodaj diete</a>
                            </li>
                        @endif
                        @if(\Illuminate\Support\Facades\Auth::user()->checkrole('Pracownik silowni'))
                            <li class="nav-item active ml-2 mr-2">
                                <a class="nav-link:hover " href="{{ url('/zmienuprawnienia') }}">Uprawnienia</a>
                            </li>
                        @endif
                </ul>
        </li>


        <!-- Right Side Of Navbar -->
            <ul class="nav form-inline">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link btn-primary mr-3 rounded"
                           href="{{ route('login') }}">{{ __('Zaloguj się') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link btn-primary mr-2 rounded"
                               href="{{ route('register') }}">{{ __('Rejstracja') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link btn-primary mr-3 rounded" href="#" role="button">
                            Witaj {{ Auth::user()->Imie }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-primary mr-3 rounded" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Wyloguj się') }}
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </ul>
        </li>
    </nav>
</div>
<div class="container mt-lg-5">
    @yield('content')
</div>


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>


</body>
</html>
