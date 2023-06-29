@extends('layouts.admin')

@section('content')
    <h1>Добавление нового автора</h1>

    @include('admin.authors.form', ['action' => route('admin.authors.store')])
@endsection
