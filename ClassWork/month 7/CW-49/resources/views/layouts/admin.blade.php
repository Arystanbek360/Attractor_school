<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lesson 49</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('admin.dashboard')}}">HOME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('admin.products.index')}}">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.categories.index')}}">Categories</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container" style="padding-top: 50px;">
    @if (session('status'))
        <div class="alert alert-primary" role="alert">
            {{session('status')}}
        </div>
    @endif
    @yield('content')
    @yield('script')
</div>
</body>
</html>
