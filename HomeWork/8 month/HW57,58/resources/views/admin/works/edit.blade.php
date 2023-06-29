@extends('layouts.admin')

@section('content')
    <h1 class="text-white">Редактирование работы фотографа: {{ $work->photograph->name }}</h1>

    @include('admin.works.form', [
        'action' => route('admin.works.update', ['work' => $work]),
        'method' => 'PUT'
    ])
@endsection
