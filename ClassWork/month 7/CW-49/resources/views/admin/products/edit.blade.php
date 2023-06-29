@extends('layouts.admin')

@section('content')
    <h1>Edit "{{ $product->title }}" product</h1>

    @include('admin.products.form', [
        'action' => route('admin.products.update', ['product' => $product->id]),
        'method' => 'PUT'
    ])
@endsection
