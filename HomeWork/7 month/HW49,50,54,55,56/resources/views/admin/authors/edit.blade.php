@extends('layouts.admin')

@section('content')
    <h1>Правка автора:{{ $author->name }}</h1>

    @include('admin.authors.form', [
        'action' => route('admin.authors.update', ['author' => $author->id]),
        'method' => 'PUT'
    ])
@endsection
