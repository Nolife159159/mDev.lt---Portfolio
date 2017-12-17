<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}@yield('title')</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app" class="container-fluid">
    <nav class="navbar navbar-toggleable-sm navbar-expand-lg mt-1 navbar-dark bg-dark">
        <a class="navbar-brand display-inline font-weight-bolder m-2" href="{{ url('/') }}">
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active m-2">
                    <a class="nav-link" href="{{ url('/') }}"><i class="fa fa-home fa-2x text-danger" aria-hidden="true"></i> <span class="text-uppercase border border-danger border-right-0 border-top-0 border-left-0">Homepage</span></a>
                </li>
                <li class="nav-item m-2">
                    <a class="nav-link" href="{{ url('/about-us') }}"><i class="fa fa-user fa-2x text-danger" aria-hidden="true"></i> <span class="text-uppercase border border-danger border-right-0 border-top-0 border-left-0">About US</span></a>
                </li>
                <li class="nav-item m-2">
                    <a class="nav-link" href="{{ url('/our-work') }}"><i class="fa fa-eye fa-2x text-danger" aria-hidden="true"></i> <span class="text-uppercase border border-danger border-right-0 border-top-0 border-left-0">Our Work</span></a>
                </li>
                <li class="nav-item m-2">
                    <a class="nav-link" href="{{ url('/contact-us') }}"><i class="fa fa-envelope fa-2x text-danger" aria-hidden="true"></i> <span class="text-uppercase border border-danger border-right-0 border-top-0 border-left-0">Contact Us</span></a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <!-- Authentication Links -->
                @guest
                    <li class="btn-group">
                        <a class="btn btn-danger" href="{{ route('login') }}">Login</a>
                        <a class="btn btn-danger" href="{{ route('register') }}">Register</a>
                    </li>
                @else

                    <li class="btn-group">
                        <button class="btn btn-danger" type="button">
                            {{ Auth::user()->name }}
                        </button>
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-header">Your menu</li>

                            <li>
                                <a class="dropdown-item" href="admin">Admin panel</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Reload page</a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                 @endguest
            </ul>
        </div>
    </nav>
    @yield('content')
<!--Admin page sidebar meniu -->
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Overview <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Analytics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Export</a>
                </li>
            </ul>

            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#">Nav item</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nav item again</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">One more nav</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Another nav item</a>
                </li>
            </ul>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#">Nav item again</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">One more nav</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Another nav item</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Another nav item</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Another nav item</a>
                </li>
            </ul>
        </nav>
    @yield('sidebar')
</div>

@yield('scripts')
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
