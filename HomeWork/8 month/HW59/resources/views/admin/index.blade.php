@extends('layouts.app')
@section('content')
    <h1>Все пользователи</h1>
    <table class="table table-bordered table-striped table-bordered border-white" style="padding-top: 30px">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">Эл.Почта</th>
            <th scope="col">Активность</th>
            <th scope="col">Администрирование</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->active}}</td>
                <td>{{$user->is_admin}}</td>
                <td>
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="{{route('switchActive', ['user' => $user])}}" class="text-dark">
                            Дать активацию пользователю
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
@endsection
