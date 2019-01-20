<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/png" href="/logo/icon2.png" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        /* html, body {
            background-color: #ffffaa;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        } */

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        /* .m-b-md {
            margin-bottom: 30px;
        } */
    </style>
</head>
<body style="background-color: #ffffaa">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: #FFFFCD">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/logo/logo1.png" class="img-fluid" alt="Responsive image" width="250">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                    </ul>
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                        @guest
                            <li class="nav-item links">
                                <a class="nav-link" href="{{ route('login') }}" style="color:#DD9C2A;">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item links">
                                    <a class="nav-link" href="{{ route('register') }}" style="color:#DD9C2A;">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{ url('/home') }}">
                                        Home
                                    </a>
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- START Carousel Slideshow -->
        
        <div id="top-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#top-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#top-carousel" data-slide-to="1"></li>
                <li data-target="#top-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/test_img/image1.png?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 style="text-shadow: 0px 0px 10px #000000"><strong>Resident Evil 2</strong></h1>
                        <p style="text-shadow: 0px 0px 10px #000000">New on the site!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/test_img/image2.png?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 style="text-shadow: 0px 0px 10px #000000"><strong>The Division 2</strong></h1>
                        <p style="text-shadow: 0px 0px 10px #000000">New on the site!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/test_img/image3.png?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 style="text-shadow: 0px 0px 10px #000000"><strong>Kenshi</strong></h1>
                        <p style="text-shadow: 0px 0px 10px #000000">New on the site!</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#top-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#top-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- END Carousel Slideshow -->

        <div class="container-fluid">
            <div class="row">
                <div class="col" style="background-color: red">
                One of three columns
                </div>
                <div class="col-md-8" style="background-color: green">
                        <main class="py-4">
                            @yield('content')
                        </main>
                </div>
                <div class="col" style="background-color: blue">
                One of three columns
                </div>
            </div>
        </div>

        {{-- <main class="py-4">
            @yield('content')
        </main> --}}
    
    
    </div>
</body>
</html>
