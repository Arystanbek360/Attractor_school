@extends('layouts.app')
@section('content')
    <div class="mt-5 text-center">
        <h1>About Product</h1>
        <div class="row mx-auto d-flex flex-column align-items-center p-5">
            <img src="https://via.placeholder.com/768x400.png" class="my-3">
            <div class="col-4">
                <p class="">Product name:{{ $product->name }}</p>
            </div>
            <div class="col-4">
                <p class="">About Product: {{ $product->description }}</p>
            </div>
            <div class="col-4">
                <p class="">Price: {{ $product->price }} $</p>
            </div>
        </div>
        <a href="{{route('index')}}">Back</a>
    </div>

@endsection
