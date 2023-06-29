@extends('layouts.admin')

@section('content')
    <h1 class="text-white">Добавление нового оборудования</h1>

    @include('admin.items.form', ['action' => route('admin.items.store')])
@endsection
