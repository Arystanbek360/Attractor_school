@extends('layouts.admin')

@section('content')
    <h1>Create category</h1>

    @include('admin.categories.form', ['action' => route('admin.categories.store')])
@endsection
