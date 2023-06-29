<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Домашняя страница</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
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
                <a href="{{route('notes.index')}}" class="nav_link" style="color: blueviolet">Перейти к закладкам</a>
            @else
                <a href="{{route('sessions.login')}}" class="nav_link">Войти</a>
                <a href="{{route('users.register')}}" class="nav_link">Зарегестрироваться</a>
            @endif
        </nav>
        @include('partials.notifications.alert')
    </div>
</header>

@yield('content')

<div class="footer">
    <div class="container">
        <h4>ВасяПупкин.com © 2023 Все права защищены автором Арыстанбеком
        </h4>
    </div>
</div>
</body>
</html>
