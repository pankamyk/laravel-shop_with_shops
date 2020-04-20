<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 70vh;
        }

        .min-height {
            min-height: 62vh;
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
            font-size: 44px;
        }

        .strong {
            font-size: 64px
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .site-footer
        {
            background-color:#26272b;
            padding:45px 0 20px;
            font-size:15px;
            line-height:24px;
            color:#737373;
        }

        .site-footer hr
        {
            border-top-color:#bbb;
            opacity:0.5
        }

        .site-footer hr.small
        {
            margin:20px 0
        }

        .site-footer h6
        {
            color:#fff;
            font-size:16px;
            text-transform:uppercase;
            margin-top:5px;
            letter-spacing:2px
        }

        .site-footer a
        {
            color:#737373;
        }

        .site-footer a:hover
        {
            color:#3366cc;
            text-decoration:none;
        }

        .footer-links
        {
            padding-left:0;
            list-style:none
        }

        .footer-links li
        {
            display:block
        }

        .footer-links a
        {
            color:#737373
        }

        .footer-links a:active,.footer-links a:focus,.footer-links a:hover
        {
            color:#3366cc;
            text-decoration:none;
        }

        .footer-links.inline li
        {
            display:inline-block
        }

        .site-footer
        {
            text-align:left
        }

        .site-footer .social-icons a
        {
            width:40px;
            height:40px;
            line-height:40px;
            margin-left:6px;
            margin-right:0;
            border-radius:100%;
            background-color:#33353d
        }

        .copyright-text
        {
            margin:0
        }

        @media (max-width:991px)
        {
            .site-footer [class^=col-]
            {
                margin-bottom:30px
            }
        }

        @media (max-width:767px)
        {
            .site-footer
            {
                padding-bottom:0
            }
            .site-footer .copyright-text,.site-footer
            {
                text-align:center
            }
        }
    </style>
        
    @yield('style')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-link">
                            <a class="nav-link" href="{{ route('cart') }}">cart
                                <span class="badge">{{ Session::has('ammount') ? Session::get('ammount') : '' }}</span>
                            </a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ url('/home') }}">Home</a>

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

        <main class="py-4 min-height">
            @yield('content')
        </main>

        <!-- Site footer -->
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <h6>About</h6>

                        <p class="text-justify">
                            shop.Shops is small laravel project mocking e-commence site, made for my uni course. This app is full of bugs and bad code and style, please forgive me. If you would like you can visi by github page - feel free to post improvements to my code. PLEASE DON'T USE YOUR REAL PASSWORDS OR ANY OTHER DATA
                        </p>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <h6>Quick Links</h6>
                        
                        <ul class="footer-links">
                            <li><a href="{{ route('products') }}">Products</a></li>
                            <li><a href="{{ route('welcome') }}">About</a></li>
                            <li><a href="#">Admin</a></li>
                        </ul>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <h6>Register for free!</h6>
                        <ul class="footer-links">
                            <li>
                                <a href="{{ route('register') }}">
                                    <button type="button" class="btn btn-outline-danger">Register</button>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>

            <div class="container">
                <p class="copyright-text">Copyright &copy; 2020:
                    <a href="https://github.com/pankamyk/">github.com/pankamyk/</a>
                </p>
                <br>
            </div>
        </footer>
    </div>
</body>
</html>
