@extends('layouts.admin')

@section('content')
    <h1 class="text-white">Изменение данных фотографа: {{ $photograph->name }}</h1>

    @include('admin.photographs.form', [
        'action' => route('admin.photographs.update', ['photograph' => $photograph->id]),
        'method' => 'PUT'
    ])
@endsection
