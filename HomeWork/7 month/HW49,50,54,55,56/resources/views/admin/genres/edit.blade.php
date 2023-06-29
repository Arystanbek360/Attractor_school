@extends('layouts.admin')

@section('content')
    <h1>Изменение жанра: {{ $genre->name }}</h1>

    @include('admin.genres.form', [
        'action' => route('admin.genres.update', ['genre' => $genre->id]),
        'method' => 'PUT'
    ])
@endsection
