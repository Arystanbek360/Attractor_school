@extends('layouts.admin')

@section('content')
    <h1>Добавление нового кабинета</h1>

    @include('admin.cabinets.form', ['action' => route('admin.cabinets.store')])
@endsection
