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
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#"><img src="{{ asset('images/logo-banner.png') }}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <!--<img class="navbar-toggler-icon" src="{{ asset('images/logo.png') }}">-->
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-link"><a href="{{ url('/home') }}">{{ __("trans.about") }}</a></li>
                    @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/home') }}">Profile</a>
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
                    </div>
                </div>
            </div>
        @show
    </footer>
    </body>
    <script src="{{ asset('js/script.js') }}"></script>
</html>
