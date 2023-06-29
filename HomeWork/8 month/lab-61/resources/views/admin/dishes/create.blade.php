@extends('layouts.admin')

@section('content')
    <h1 class="text-white">Добавление нового блюда в заведение "{{$institution->name}}"</h1>

    @include('admin.dishes.form', ['action' => route('admin.dishes.store')])
@endsection
