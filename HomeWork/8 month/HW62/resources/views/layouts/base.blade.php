<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Страница заметок</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<header class="header">
    <div class="container">
        <a href="{{route('home')}}" class="logo_link">
            <img src="{{asset('img/logo.png')}}" class="logo_img" alt="logo">
            <span class="logo_text">Заметки.kz</span>
        </a>
        <nav style="display: flex;flex-direction: row-reverse;">
            @if(auth_user())
                <a class="nav_link">Привет {{auth_user()->name}}!</a>
                <form action="{{route('sessions.logout')}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <label for="logout" class="nav_link">Logout</label>
                    <button class="nav_link" id="logout" style="display: none"></button>
                </form>
            @else
                <a href="{{route('sessions.login')}}" class="nav_link">Войти</a>
                <a href="{{route('users.register')}}" class="nav_link">Зарегестрироваться</a>
            @endif
        </nav>
        @include('partials.notifications.alert')
    </div>
</header>
<div class="flex-center position-ref full-height" style="min-height: 70vh">
    <div class="content container-sm">
        @yield('content')
    </div>
</div>
<div class="footer mt-5 p-5">
    <div class="container">
        <h4>ВасяПупкин.com © 2023 Все права защищены автором Арыстанбеком
        </h4>
    </div>
</div>
</body>
</html>
