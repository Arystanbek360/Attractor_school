@extends('layouts.admin')

@section('content')
    <h1 class="text-white">Изменение книги: {{ $book->title }}</h1>

    @include('admin.books.form', [
        'action' => route('admin.books.update', ['book' => $book->id]),
        'method' => 'PUT'
    ])
@endsection
