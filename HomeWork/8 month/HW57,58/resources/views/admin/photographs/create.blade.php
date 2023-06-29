@extends('layouts.admin')

@section('content')
    <h1 class="text-white">Добавление нового фотографа</h1>

    @include('admin.photographs.form', ['action' => route('admin.photographs.store')])
@endsection
