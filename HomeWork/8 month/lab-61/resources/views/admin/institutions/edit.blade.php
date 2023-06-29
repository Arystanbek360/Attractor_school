@extends('layouts.admin')

@section('content')
    <h1>Изменение заведения: {{ $institution->name }}</h1>

    @include('admin.institutions.form', [
        'action' => route('admin.institutions.update', ['institution' => $institution->id]),
        'method' => 'PUT'
    ])
@endsection
