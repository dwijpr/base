@extends('layouts.base')

@section('style')
<style>
    body {
        padding-top: 50px;
    }
    .gap {
        padding-top: 24px;
    }
    @if(Auth::user())
    .navbar-default .navbar-nav > li > a.user-nav{
        position: relative;
        padding-left: 48px;
    }
    .navbar-default .navbar-nav > li > a.user-nav .navbar-pic{
        position: absolute;
        top: 8px;
        left: 12px;
        border-radius: 2px;
        border: 1px solid #999;
        background: #efefef;
        padding: 2px;
        width: 26px;
        height: 26px;

        background-image: url({{ Auth::user()->img().'/xs' }});
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-position: 50% 50%;
        background-repeat: no-repeat;
    }
    @media (min-width: 768px) {
        .navbar-default .navbar-nav > li > a.user-nav .navbar-pic{
            top: 12px;
        }
    }
    @endif
</style>
@endsection

@section('_content')
<nav class="navbar navbar-{{ config(
    'app.dark'
)?'inverse':'default' }} navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <!--
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/home') }}">Home</a></li>
                    </ul>
                    -->

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li>
                                <a href="{{ url('/login') }}">Login</a>
                            </li>
                            <li>
                                <a href="{{ url('/register') }}">Register</a>
                            </li>
                        @else
                            <li class="dropdown">
                                <a
                                    href="#"
                                    class="dropdown-toggle user-nav"
                                    data-toggle="dropdown"
                                    role="button"
                                    aria-expanded="false"
                                >
                                    <div
                                        class="navbar-pic"
                                        src="{{ Auth::user()->img() }}"
                                    ></div>
                                    {{ Auth::user()->name() }}
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/profile') }}">
                                            <i class="fa fa-btn fa-user"></i>
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/password/change') }}">
                                            <i class="fa fa-btn fa-key"></i>
                                            Change Password
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/logout') }}">
                                            <i class="fa fa-btn fa-sign-out">
                                            </i>
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
@yield('content')
@endsection
</body>
</html>
