<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FitMe</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css" rel="stylesheet"/>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md" style="background-color: #FF6A6A; padding: 0px; position: absolute; top: 0; width: 100%; z-index: 1;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="storage/home/nav_logo.jpg" alt="not found" width="50px" style="border-radius: 50%;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @auth
                            <a class="nav-link" href="{{ route('home-logged') }}" style="color: white; padding-left: 20px; padding-right: 70px;">Home</a>
                        @else
                            <a class="nav-link" href="{{ route('home') }}" style="color: white; padding-left: 20px;">Home</a>
                        @endauth
                        
                        @auth
                            <a class="nav-link" href="{{ route('shop') }}" style="color: white; padding-right: 70px;">Shop</a>
                            <a class="nav-link" href="{{ route('custom') }}" style="color: white; padding-right: 70px;">Custom T - Shirt</a>
                            <a class="nav-link" href="{{ route('cart') }}" style="color: white; padding-right: 70px;">Cart</a>
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}" style="color: white;">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" style="color: white;">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white;">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('profile') }}">
                                        Profile
                                    </a>
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

    <div id="page-container" style="position: relative; max-height: 100vh;">
        <footer class="navbar navbar-expand-md" style="background-color: #FF6A6A; position: absolute; padding: 10px 10px 0px 10px;bottom: 0; top: 0; width: 100%; height: 60px; z-index: 1;">
            <p style="text-align: center; color: white; padding-left: 40%; padding-top: 1%;">&copy; 2022 Copyright: Susan, Novia, Edwin</p>
        </footer>
    </div>
</body>
</html>
