@extends('layouts.admin')

@section('content')
    <h1 class="text-white">Изменение данных компании</h1>

    @include('admin.companies.form', [
        'action' => route('admin.company.update', ['company' => $company->id]),
        'method' => 'PUT'
    ])
@endsection
