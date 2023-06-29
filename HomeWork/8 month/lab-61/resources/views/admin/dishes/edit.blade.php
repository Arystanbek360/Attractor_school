@extends('layouts.admin')

@section('content')
    <h1 class="text-white">Редактирование блюда: {{ $dish->name }}</h1>

    @include('admin.dishes.form', [
        'action' => route('admin.dishes.update', ['dish' => $dish->id]),
        'method' => 'PUT'
    ])
@endsection
