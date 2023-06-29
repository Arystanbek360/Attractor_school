@extends('layouts.admin')

@section('content')
    <div style="padding-bottom: 30px;">
        <div class="d-flex">
            <h1 class="col-2 me-4 text-white">Все Жанры</h1>
            <a href="{{route('admin.genres.create')}}" type="button" class="btn btn-outline-light btn-lg">
                Добавить Новый Жанр
            </a>
        </div>
    </div>

    <table class="table table-dark table-striped table-bordered border-white" style="padding-top: 30px">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название Жанра</th>
            <th scope="col">Описание жанра</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($genres as $genre)
            <tr>
                <th scope="row">{{$genre->id}}</th>
                <td>
                    {{$genre->name}}
                </td>
                <td>{{is_null($genre->description) ? "Описания нету" : $genre->description}}</td>
                <td>
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="{{route('admin.genres.edit', ['genre' => $genre])}}" class="text-white">
                            Изменить
                        </a>
                        <form method="post" action="{{route('admin.genres.destroy', ['genre' => $genre])}}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-link text-white">Delete</button>
                        </form>
                        <a href="{{route('admin.genres.show', ['genre' => $genre])}}" class="text-white">
                            Просмотр
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
