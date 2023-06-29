<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Фотосалон Кот</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    @vite(['resources/js/app.js'])
</head>
<body>
<div class="bg-dark text-white" style="min-height: 120vh">
    <div class="container" style="padding-top: 50px;">
        <div class="d-flex">
            <a class="col-2 nav-link" href="{{route('home')}}"><h3 class="text-white">
                    Домашняя страница</h3></a>
            <a class="text-white" href="{{route('admin.photographs.index')}}"><h4 class="text-white border-white">
                    Фотографы</h4>
            </a>
            <h4 class="mx-5">|</h4>
            <a class="text-white" href="{{route('admin.company.index')}}"><h4 class="text-white border-white">
                    Компания</h4>
            </a>
        </div>
    </div>
    <div class="bg-light col-12 pt-2 mt-4"></div>
    <div class="container pb-5" style="padding-top: 50px;">
        @if (session('status'))
            <div class="alert alert-primary" role="alert">
                {{session('status')}}
            </div>
        @endif
        @yield('content')
        @yield('script')
    </div>
</div>
</body>
</html>
