<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Админ панель Namba Food</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body style="padding-top: 0;height: auto">
<div class="bg-dark text-white" style="min-height: 120vh">
    <div class="container" style="padding-top: 50px;">
        <div class="d-flex">
            <a class="col-2 nav-link" href="{{route('admin.dashboard')}}"><h3 class="text-white">
                    Namba Food</h3></a>
            <a class="col-1 text-white" href="{{route('admin.institutions.index')}}"><h4 class="text-white">
                    Заведения</h4>
            </a>
            <h3 class="col-1 text-center text-white">|</h3>
            <a class="text-white" href="/"><h4 class="text-white border-white">Вернуться на главную страницу</h4>
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
