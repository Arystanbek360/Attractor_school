@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-6 offset-3 align-self-center">
            @include('partials.notifications.alert')
            <h1 class="text-center text-dark">Вход</h1>
            <hr>
            <form action="{{route('sessions.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email адресс</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           name="email" value="{{old('email')}}">
                    <small id="emailHelp" class="form-text text-muted">Ваша почта служит вашим логином.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Пароль</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Войти</button>
                или <a href="{{route('users.register')}}">Зарегестрироваться</a>
            </form>
        </div>
    </div>
@endsection
