@extends('layouts.admin')

@section('content')
    <h1>Добавление нового заведения</h1>

    @include('admin.institutions.form', ['action' => route('admin.institutions.store')])
@endsection
