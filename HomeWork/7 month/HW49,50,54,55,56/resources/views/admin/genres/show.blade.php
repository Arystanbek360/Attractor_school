@extends('layouts.admin')

@section('content')
    <div class="card bg-secondary text-white">
        <div class="card-header text-white">
            Жанр: {{$genre->name}}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$genre->name}}</h5>
            <p class="card-text">
                @if (!is_null($genre->description))
                    {{$genre->description}}
                @else
                    Описание отсутвует
                @endif
            </p>
            <a href="{{route('admin.genres.index')}}" class="btn btn-default btn-sm">Назад</a>
            <a href="{{route('admin.genres.edit', ['genre' => $genre])}}" class="btn btn-primary btn-sm">Изменить</a>
        </div>
    </div>
@endsection
