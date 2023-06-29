@extends('layouts.admin')

@section('content')
    <h1 class="text-white">Добавление новой работы</h1>

    @include('admin.works.form', ['action' => route('admin.works.store')])
@endsection
