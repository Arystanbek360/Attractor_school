@extends('layouts.admin')

@section('content')
    <h1>Изменение кабинета: {{ $cabinet->name }}</h1>

    @include('admin.cabinets.form', [
        'action' => route('admin.cabinets.update', ['cabinet' => $cabinet->id]),
        'method' => 'PUT'
    ])
@endsection
