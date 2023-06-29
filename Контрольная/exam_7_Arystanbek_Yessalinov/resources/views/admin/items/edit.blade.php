@extends('layouts.admin')

@section('content')
    <h1 class="text-white">Редактирование оборудования: {{ $item->title }}</h1>

    @include('admin.items.form', [
        'action' => route('admin.items.update', ['item' => $item->id]),
        'method' => 'PUT'
    ])
@endsection
