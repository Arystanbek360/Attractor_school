@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                {{ $user->first_name }} {{ $user->last_name }}
            </div>
            <div class="card-body">
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>Пол:</strong> {{ $user->gender }}</p>
                <p><strong>Город:</strong> {{ $user->city }}</p>
                <p><strong>Описание:</strong> {{ $user->description }}</p>
                <p><strong>Личная страничка:</strong> <a>{{ $user->url }}</a></p>
                <p><strong>Дата рождения:</strong> {{ $user->born }}</p>
                <p><strong>Активность пользователя:</strong> {{ $user->active ? 'Да' : 'Нет' }}</p>
                <a href="{{ route('edit', $user) }}" class="btn btn-sm btn-primary">Редактировать</a>
                <form action="{{ route('destroy', $user) }}" method="POST" class="d-inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">
                        Удалить
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
