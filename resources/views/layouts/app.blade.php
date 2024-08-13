<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/fonts/sb-bistro/sb-bistro.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/fonts/font-awesome/font-awesome.css') }}" rel="stylesheet" type="text/css">
    


    <link rel="stylesheet" href="{{ asset('assets/packages/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/packages/o2system-ui/o2system-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/packages/owl-carousel/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/packages/cloudzoom/cloudzoom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/packages/thumbelina/thumbelina.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/packages/bootstrap-touchspin/bootstrap-touchspin.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        /* Custom CSS for Navbar */
        .navbar-brand img {
            height: 40px;
            /* Adjust height as needed */
            width: auto;
            /* Maintain aspect ratio */
        }
    </style>
</head>

<body>
    <div id="app">
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-transparent" id="page-navigation">
            <div class="container">
                <!-- Navbar Brand -->
                <a href="index.html" class="navbar-brand">
                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="">
                </a>

                <!-- Toggle Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarcollapse"
                    aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarcollapse">
                    <!-- Navbar Menu -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="shop.html" class="nav-link">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a href="register.html" class="nav-link">Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="login.html" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{-- <div class="avatar-header"><img src="{{ asset('assests\img\logo\avatar.jpg') }}"></div> --}}
                                John Doe
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="transaction.html">Transactions History</a>
                                <a class="dropdown-item" href="setting.html">Settings</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="cart.html" class="nav-link">
                                <i class="fa fa-shopping-basket"></i> <span class="badge bg-primary">5</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-content" class="page-content">
            <!-- Page Content -->
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate.js') }}"></script>
    <script src="{{ asset('assets/packages/bootstrap/libraries/popper.js') }}"></script>
    <script src="{{ asset('assets/packages/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/packages/o2system-ui/o2system-ui.js') }}"></script>
    <script src="{{ asset('assets/packages/owl-carousel/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/packages/cloudzoom/cloudzoom.js') }}"></script>
    <script src="{{ asset('assets/packages/thumbelina/thumbelina.js') }}"></script>
    <script src="{{ asset('assets/packages/bootstrap-touchspin/bootstrap-touchspin.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
</body>

</html>
