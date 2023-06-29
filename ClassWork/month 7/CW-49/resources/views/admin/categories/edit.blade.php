@extends('layouts.admin')

@section('content')
    <h1>Edit "{{ $category->name }}" category</h1>

    @include('admin.categories.form', [
        'action' => route('admin.categories.update', ['category' => $category->id]),
        'method' => 'PUT'
    ])
@endsection
