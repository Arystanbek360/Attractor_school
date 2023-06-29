@extends('layouts.admin')

@section('content')
    <h1>Create new product</h1>

    @include('admin.products.form', ['action' => route('admin.products.store')])
@endsection
