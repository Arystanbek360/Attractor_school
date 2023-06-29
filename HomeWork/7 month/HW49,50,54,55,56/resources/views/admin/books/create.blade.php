@extends('layouts.admin')

@section('content')
    <h1 class="text-white">Добавление новой книги</h1>

    @include('admin.books.form', ['action' => route('admin.books.store')])
@endsection
