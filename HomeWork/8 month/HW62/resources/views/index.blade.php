@extends('layouts.app')
@section('content')

    <div class="main">
        <div class="first">
            <div class="container">
                <div class="text">
                    <h1 style="color: black">Добро пожаловать в заметки</h1>
                    <p style="color: black">Здесь вы сможете создавать заметки</p>
                </div>
                <a href="{{route('sessions.login')}}" class="knock">
                    Перейти в заметки
                </a>
            </div>
        </div>
    </div>
    <div class="second">
        <div class="container">
            <div class="about">
                <h2>О нас</h2>
                <p class="about_text">Мы предоставляем услуги заметок</p>
            </div>
            <div class="all_card">
                <div class="card">
                    <i class="like" style="background-image: url({{asset('img/ic-hand.png')}})"></i>
                    <h3>
                        Выбор пользователей
                    </h3>
                    <p class="info">
                        Нас выбирают большинство пользователей
                    </p>
                </div>
                <div class="card">
                    <i class="book" style="background-image: url({{asset('img/ic-book.png')}})"></i>
                    <h3>
                        Лучшие среди всех
                    </h3>
                    <p class="info">
                        Мы храним ваши закладки и даем гарантию на защиту от постороних глаз
                    </p>
                </div>
                <div class="card">
                    <i class="comment" style="background-image: url({{asset('img/ic-comment.png')}})"></i>
                    <h3>
                        Всегда под рукой
                    </h3>
                    <p class="info">
                        У вас будет быстрый доступ получить информацию из ваших заметок сэкономив на этом куча времени))
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection

