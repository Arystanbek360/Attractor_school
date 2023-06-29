@extends('base')

@section('content')
    <h1>Edit "{{ $category->name }}" category</h1>

    @include('categories.form', [
        'action' => route('categories.update', ['category' => $category->id]),
        'method' => 'PUT',
        'model' => $category
    ])
@endsection
