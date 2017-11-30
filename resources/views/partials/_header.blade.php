
<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    <link rel="stylesheet" href="{{asset('css/custom.css')}}" />
    <link rel="stylesheet" href="{{asset('css/jumbotron-narrow.css')}}"
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" href="{{ asset('css/ie10-viewport-bug-workaround.css') }}" />

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}" />

    @yield('stylesheet')
</head>
<body class="ff">

<nav class="nav navbar-fixed-top" >
    <div class="container">
        <div class="header">
            <ul class="nav nav-pills text-center"  id="nav">
                <li><a  href="{{route('home')}}">Главная страница</a> </li>
                <li><a href="{{route('blog')}}">Блог</a></li>
                {{--<li><a href="{{}}"</li>--}}
                <li>
                @if (Auth::guest())
                    <li><a class="blog-nav-item {{ Request::is('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a></li>
                    <li><a class="blog-nav-item {{ Request::is('register') ? 'active' : '' }}" href="{{ route('register') }}">Регистрация</a></li>

                @else

                    <li class="dropdown">
                        <a href="#" class="blog-nav-item dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        @if(Auth::user()->role   === 'admin')
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ route('posts.index') }}">Все посты</a></li>
                            <li><a href="{{ route('posts.create') }}">Добавить новый</a></li>
                            <li><a href="{{route('importexport')}}">Загрузить из файла</a> </li>
                            <li><hr/></li>

                            <!--we'll work on this later-->
                            <li><a href="{{ route('comments.index') }}">Все комментарии</a></li>
                                <li>
                                        <a>admin</a>
                            @else
                                Non admin
                            @endif
                                </li>
                            <li>
                                <a class="blog-nav-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>


                        </ul>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>

{{--
    Check if there is a success Session key
    If So display the Session key value

    More to this later
--}}
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if( Session::has('success') )
                <div class="mt-5 alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif

        </div>
    </div>
</div>
