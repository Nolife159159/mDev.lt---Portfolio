<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="Padding">
        <nav class="mainNavbar">
            <div class="navBarItems">
                <ul class="nav ListHelper position ListHelper2">
                    <li class="navBarItemList logo">
                        <a class="toolTip" href="{{ url('/') }}">{{ config('app.name') }}</a>
                    </li>
                    <li class="navBarItemList">
                        <a class="toolTip {{ Request::is('/') ? 'activeMenu' : '' }}" href="{{ url('/') }}" title="" data-toggle="tooltip" data-placement="right" data-container="body" data-original-title="Homepage">
                            <span class="spanMain HomeIcon"></span>
                            <small class="TextMain TextHelper">Home page</small>
                        </a>
                    </li>
                    <li class="navBarItemList">
                        <a class="toolTip {{ Request::is('about-us') ? 'activeMenu' : '' }}" href="{{ url('/about-us') }}" title="" data-toggle="tooltip" data-placement="right" data-container="body" data-original-title="About US">
                            <span class="spanMain AboutUsIcon"></span>
                            <small class="TextMain TextHelper">About US</small>
                        </a>
                    </li>
                    <li class="navBarItemList">
                        <a class="toolTip {{ Request::is('our-skills') ? 'activeMenu' : '' }}" href="{{ url('/our-skills') }}" title="" data-toggle="tooltip" data-placement="right" data-container="body" data-original-title="Our Skills">
                            <span class="spanMain OurSkilIcon"></span>
                            <small class="TextMain TextHelper">Our Skills</small>
                        </a>
                    </li>
                    <li class="navBarItemList">
                        <a class="toolTip  {{ Request::is('our-work') ? 'activeMenu' : '' }}" href="{{ url('/our-work') }}" title="" data-toggle="tooltip" data-placement="right" data-container="body" data-original-title="Our Work">
                            <span class="spanMain OurWorkIcon"></span>
                            <small class="TextMain TextHelper">Our Work</small>
                        </a>
                    </li>
                    <li class="navBarItemList">
                        <a class="toolTip {{ Request::is('contact-us') ? 'activeMenu' : '' }}" href="{{ url('/contact-us') }}" title="" data-toggle="tooltip" data-placement="right" data-container="body" data-original-title="Contact Us">
                            <span class="spanMain ContactUsIcon"></span>
                            <small class="TextMain TextHelper">Contact Us</small>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
{{--
    @guest
        <li class="nav-item">
            <div class="btn-group">
                <a class="btn btn-danger" href="{{ route('login') }}">Login</a>
                <a class="btn btn-danger" href="{{ route('register') }}">Register</a>
            </div>
        </li>
    @else
        <li class="nav-item m-2 dropdown">
            <a class="nav-link dropdown-toggle dropdown-toggle-split" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('/admin') }}">Admin panel</a>
                <a class="dropdown-item" href="{{ url()->current() }}">Reload page</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </li>
    @endguest
    </ul>
--}}
    @yield('content')
    </div>
    <div class="moving-clouds"></div>
</div>

@yield('scripts')
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
