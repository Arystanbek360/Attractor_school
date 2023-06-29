@extends('layouts.admin')

@section('content')
    <h1>Добавление нового жанра</h1>

    @include('admin.genres.form', ['action' => route('admin.genres.store')])
@endsection
