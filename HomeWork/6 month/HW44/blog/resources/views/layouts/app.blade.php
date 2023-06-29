<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    @yield('style')
    <style>
        header h3 {
            border-bottom: 2px solid black;
        }

        all {
            height: 100vh;
            width: 100%;
        }
    </style>
</head>
<body class="antialiased bg-info text-dark">

<div class="container bg-warning-subtle all pb-5">
    <div>
        <header>
            <nav class="navbar navbar-expand-lg bg-warning text-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{route('index')}}">Market Place</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{route('index')}}">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('about')}}">О магазине</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contacts')}}">Контакты</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        @yield('content')
    </div>
</div>
<footer class="footer d-flex align-items-center mt-5 bg-black text-white p-5">
    <div class="container">
        <span class="small-text d-inline-block footer_text upper">© 2023 Интернет магазин By Arystanbek</span>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
@yield('js')
</body>
</html>
