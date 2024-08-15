<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Food Ecommerce</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css">
    <!-- Add this to your <head> section -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <link href="{{ asset('assets/fonts/sb-bistro/sb-bistro.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/fonts/font-awesome/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/packages/bootstrap/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('assets/packages/o2system-ui/o2system-ui.css') }}" rel="stylesheet" type="text/css"
        media="all">
    <link href="{{ asset('assets/packages/owl-carousel/owl-carousel.css') }}" rel="stylesheet" type="text/css"
        media="all">
    <link href="{{ asset('assets/packages/cloudzoom/cloudzoom.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('assets/packages/thumbelina/thumbelina.css') }}" rel="stylesheet" type="text/css"
        media="all">
    <link href="{{ asset('assets/packages/bootstrap-touchspin/bootstrap-touchspin.css') }}" rel="stylesheet"
        type="text/css" media="all">
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" type="text/css" media="all">





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
                <a href="/" class="navbar-brand">
                    <img src="{{ asset('assests\img\logo\logo.png') }}" alt="">
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
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="color: white;">
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
    </div>


    {{-- <style>
        #categories {
            padding: 60px 15px;
        }
    
        .title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 30px;
        }
    
        .landing-categories .card {
            position: relative;
            overflow: hidden;
        }
    
        .landing-categories .card img {
            width: 100%;
            height: auto;
            transition: transform 0.3s;
        }
    
        .landing-categories .card:hover img {
            transform: scale(1.1); /* Slight zoom effect on hover */
        }
    
        .landing-categories .card-img-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5); /* Dark overlay */
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    
        .landing-categories .btn {
            padding: 10px 20px;
            font-size: 1rem; /* Adjust button size */
        }
    
        /* Ensure responsiveness */
        @media (max-width: 767px) {
            .landing-categories .btn {
                font-size: 0.875rem; /* Smaller button text on smaller screens */
            }
        }
    </style>
     --}}


    <div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-video text-center bg-dark mb-0 rounded-0">
                <video width="100%" preload="auto" loop autoplay muted>
                    <source src='assests/media/explore.mp4' type='video/mp4' />
                    <source src='assests/media/explore.webm' type='video/webm' />
                </video>

                <div class="container">
                    <h1 class="pt-5 text-white">
                        Save time and leave the<br>
                        groceries to us.
                    </h1>
                    <p class="lead text-white">
                        Always Fresh Everyday.
                    </p>

                    <div class="row justify-content-center">
                        <div class="col-md-4 mb-4">
                            <div class="card text-center">
                                <div class="card-icon">
                                    <div class="card-icon-i">
                                        <i class="fa fa-shopping-basket"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Buy
                                    </h4>
                                    <p class="card-text">
                                        Simply click-to-buy on the product you want and submit your order when you're
                                        done.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card text-center">
                                <div class="card-icon">
                                    <div class="card-icon-i">
                                        <i class="fas fa-leaf"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Harvest
                                    </h4>
                                    <p class="card-text">
                                        Our team ensures the produce quality is up to our standard and delivers to your
                                        door within 24 hours of harvest day.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card text-center">
                                <div class="card-icon">
                                    <div class="card-icon-i">
                                        <i class="fa fa-truck"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Delivery
                                    </h4>
                                    <p class="card-text">
                                        Farmers receive your orders two days in advance so they can prepare for harvest
                                        exactly as your orders—no wasted.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <style>
        .banner {
            position: relative;
            padding: 0rem 0;
        }

        .jumbotron-video video {
            object-fit: cover;
            height: 100%;
        }

        .card {
            border: none;
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card-icon {
            margin-bottom: 1rem;
        }

        .card-icon-i {
            font-size: 3rem;
            color: #007bff;
            /* Adjust to fit your theme */
        }

        .card-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .card-text {
            font-size: 1rem;
            color: #6c757d;
        }

        .text-white {
            color: #fff;
        }
    </style>










    </div>
    <section id="why">
        <h2 class="title">Why Freschery</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0 text-center gray-bg">
                        <div class="card-icon">
                            <div class="card-icon-i text-success">
                                <i class="fas fa-leaf"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                Straight from the Farm
                            </h4>
                            <p class="card-text">
                                Our farm-to-table concept emphasizes on getting the fresh produce directly from local
                                farms to your tables within one day, hence you know you get the freshest produce
                                straight from harvest.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 text-center gray-bg">
                        <div class="card-icon">
                            <div class="card-icon-i text-success">
                                <i class="fa fa-question"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                Know Your Farmers
                            </h4>
                            <p class="card-text">
                                We want you to know exactly who is growing your food by having the farmers profile on
                                each item and farmers page. You’re welcome to visit the farms and see the love they put
                                into growing your food.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 text-center gray-bg">
                        <div class="card-icon">
                            <div class="card-icon-i text-success">
                                <i class="fas fa-smile"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                Improving Farmers’ Livelihood
                            </h4>
                            <p class="card-text">
                                Slowly but sure, by cutting the complex supply chain and food system, we hope to improve
                                the welfare of farmers by giving them the returns they deserve for their hard work.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-5 text-center">
                    <a href="shop.html" class="btn btn-primary btn-lg">SHOP NOW</a>
                </div>
            </div>
        </div>
    </section>

    <section id="categories" class="pb-0 gray-bg">
        <h2 class="title">Categories</h2>
        <div class="landing-categories">
            <div class="card-item">
                <div class="card rounded-0 border-0 text-center">
                    <img src="assests/img/fruits.jpg" alt="Fruits">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center">
                        <a href="shop.html" class="btn btn-primary btn-lg">Fruits</a>
                    </div>
                </div>
            </div>
            <div class="card-item">
                <div class="card rounded-0 border-0 text-center">
                    <img src="assests/img/meats.jpg" alt="Meats">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center">
                        <a href="shop.html" class="btn btn-primary btn-lg">Meats</a>
                    </div>
                </div>
            </div>
            <div class="card-item">
                <div class="card rounded-0 border-0 text-center">
                    <img src="assests/img/fish.jpg" alt="Fishes">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center">
                        <a href="shop.html" class="btn btn-primary btn-lg">Fishes</a>
                    </div>
                </div>
            </div>
            <div class="card-item">
                <div class="card rounded-0 border-0 text-center">
                    <img src="assests/img/frozen.jpg" alt="Frozen Foods">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center">
                        <a href="shop.html" class="btn btn-primary btn-lg">Frozen Foods</a>
                    </div>
                </div>
            </div>
            <div class="card-item">
                <div class="card rounded-0 border-0 text-center">
                    <img src="assests/img/package.jpg" alt="Package">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center">
                        <a href="shop.html" class="btn btn-primary btn-lg">Package</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .landing-categories {
            display: flex;
            flex-wrap: nowrap;
            /* Keep items in a single row */
            overflow-x: auto;
            /* Allow horizontal scrolling if necessary */
        }

        .card-item {
            flex: 1 0 auto;
            /* Allow items to grow and shrink */
            margin: 0 10px;
            /* Space between items */
        }

        .card img {
            width: 100%;
            /* Ensure the image fits the card */
        }
    </style>

    <script>
        $(document).ready(function() {
            $('.landing-categories').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script>



    <div id="page-content" class="page-content" style="padding: 20px;">
        <!-- Page Content -->
        @yield('content')
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5>About</h5>
                    <p>Nisi esse dolor irure dolor eiusmod ex deserunt proident cillum eu qui enim occaecat sunt aliqua
                        anim eiusmod qui ut voluptate.</p>
                </div>
                <div class="col-md-3">
                    <h5>Links</h5>
                    <ul>
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact Us</a>
                        </li>
                        <li>
                            <a href="faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">How it Works</a>
                        </li>
                        <li>
                            <a href="terms.html">Terms</a>
                        </li>
                        <li>
                            <a href="privacy.html">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Contact</h5>
                    <ul>
                        <li>
                            <a href="tel:+620892738334"><i class="fa fa-phone"></i> 08272367238</a>
                        </li>
                        <li>
                            <a href="mailto:hello@domain.com"><i class="fa fa-envelope"></i> hello@domain.com</a>
                        </li>
                    </ul>

                    <h5>Follow Us</h5>
                    <ul class="social">
                        <li>
                            <a href="javascript:void(0)" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" target="_blank"><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Get Our App</h5>
                    <ul class="mb-0">
                        <style>
                            .download-app img {
                                width: 300px;
                                /* Adjust width as needed */
                                height: auto;
                                /* Maintain aspect ratio */
                            }
                        </style>

                        <li class="download-app">
                            <a href="#"><img src="assests/img/playstore.png"></a>
                        </li>

                        <li style="height: 300px">


                            <style>
                                .mockup img {
                                    max-width: 300%;
                                    height: auto;
                                    width: 50%;
                                    /* Adjust the percentage to resize the image */
                                }
                            </style>

                            <div class="mockup">
                                <img src="assests\img\mockup.png">
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <p class="copyright">&copy; 2018 Freshcery | Groceries Organic Store. All rights reserved.</p>
    </footer>

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
