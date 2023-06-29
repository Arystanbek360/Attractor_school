<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Домашнее задание 54</title>
    @vite(['resources/js/app.js'])
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <div class="container">
        @if (session('status'))
            <div class="alert alert-primary" role="alert">
                {{session('status')}}
            </div>
        @endif

        <h1 class="mb-5 pt-5">Книжный магазин "Раритет"</h1>
        @yield('content')
        @yield('script')

    </div>
</div>
</body>

</html>
