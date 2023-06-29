@extends('layouts.app')

@section('content')
    @if(count($users)>0)
        <h1 class="mb-4">Список пользователей</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Email</th>
                <th>URL-адрес</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><a href="{{ $user->url }}">Страница пользователя</a></td>
                    <td>
                        <a href="{{ route('edit', $user) }}" class="btn btn-sm btn-primary">Редактировать</a>
                        <a href="{{ route('show', $user) }}" class="btn btn-sm btn-primary">Отобразить
                            пользователя</a>
                        <form action="{{ route('destroy', $user) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                Удалить
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h1 class="mb-4">Список пользователей пуст</h1>
    @endif
@endsection
