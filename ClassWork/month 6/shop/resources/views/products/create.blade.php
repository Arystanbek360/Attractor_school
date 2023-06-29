@extends('base')

@section('content')
    <h1>Create new product</h1>

    @include('products.form',['action' => route('products.store'),'categories' => $categories])
@endsection
