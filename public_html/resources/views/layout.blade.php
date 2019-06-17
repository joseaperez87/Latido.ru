<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Latido.ru - @yield('title')</title>
        <link rel="icon" href="{{ asset('images/logo.ico') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>
    <body>
    <section class="header">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#"><img src="{{ asset('images/logo-banner.png') }}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <!--<img class="navbar-toggler-icon" src="{{ asset('images/logo.png') }}">-->
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-link"><a href="{{ url('/about') }}">{{ __("trans.about") }}</a></li>
                    @if (Route::has('login'))
                        @auth
                        <li class="nav-link"><a href="{{ route('home') }}">{{ __("trans.home") }}</a></li>
                        @else
                            <li class="nav-link"><a href="{{ route('login') }}">Login</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> {{ __('trans.register') }} </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                                    <a class="dropdown-item" href="{{ route('register') }}">{{ __('trans.register-sp') }} </a>
                                    <a class="dropdown-item" href="{{ route('register') }}">{{ __('trans.register-cl') }} </a>
                                </div>
                            </li>
                        @endauth
                    @endif
                    <li class="nav-item dropdown language">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-language fa-2x"></i></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                            <a class="dropdown-item" href="lang/es"><img src="{{ asset("images/langs/spain.png") }}" alt=""></a>
                            <a class="dropdown-item" href="lang/ru"><img src="{{ asset("images/langs/russia.png") }}" alt=""></a>
                            <a class="dropdown-item" href="lang/en"><img src="{{ asset("images/langs/england.png") }}" alt=""></a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!--/.Navbar -->
    </section>
    <section class="container">
        @section('content')
            This is the master sidebar.
        @show
    </section>
    <footer>
        @section('footer')
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('images/logo-banner.png') }}">
                        </div>
                        <div class="col">
                            <ul><strong>{{ __("trans.footer-menu.services.title") }}</strong>
                                <li><a href="#">{{ __("trans.footer-menu.services.text", ['name' => "Español"]) }}</a> </li>
                                <li><a href="#">{{ __("trans.footer-menu.services.text", ['name' => "Baile"]) }}</a></li>
                                <li><a href="#">{{ __("trans.footer-menu.services.text", ['name' => "Inglés"]) }}</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul><strong>Contacto</strong>
                                <li><a href="tel:89859111942"><i class="fa fa-phone"></i> +7 (985) 911 1942</a></li>
                                <li><a href="mailto:latido@yandex.ru"><i class="fa fa-mail-bulk"></i> latido.ru@yandex.ru</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @show
    </footer>
    </body>
    <script src="{{ asset('js/script.js') }}"></script>
</html>
