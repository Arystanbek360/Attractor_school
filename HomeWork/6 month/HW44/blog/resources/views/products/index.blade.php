@extends('layouts.app')
@section('content')
    <div class="container">
        @if(session('status'))
            <div class="alert alert-primary" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        <div id="carouselExample" class="carousel slide mt-5 ">
            <div class="carousel-inner rounded-5 ">
                <div class="carousel-item active">
                    <img src="https://media.timeout.com/images/105683040/image.jpg" class="d-block w-100 h-75"
                         alt="...">
                </div>
                <div class="carousel-item">
                    <img
                        src="https://upload.wikimedia.org/wikipedia/commons/2/27/Market_Place_by_Jasons_in_Taipei_101_Mall.JPG"
                        class="d-block w-100 h-75" alt="...">
                </div>
                <div class="carousel-item">
                    <img
                        src="https://upload.wikimedia.org/wikipedia/commons/3/32/Market_Place_by_Jasons_in_Double_Cove_Place_2015.jpg"
                        class="d-block w-100 h-75" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <h3 class="text-center mt-5">All Products</h3>
        <p class="mb-5">
        <h1 class="text-center mb-5">
            <a href="{{route('newProduct')}}">
                Create Product
            </a>
        </h1>
        </p>
        <div class="row d-flex justify-content-evenly">
            @foreach($products as $product)
                <div class="card mb-5" style="width: 18rem;">
                    <img src="https://via.placeholder.com/250x200.png" class="card-img-top" alt="...">
                    <div class="card-body pb-1">
                        <h5 class="card-title text-center">
                            <a href="{{route('show',['id'=>$product->id])}}">{{$product->name}}</a>
                            <p class="card-text text-center">{{$product->description}}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-center">{{$product->price}} $</li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
@endsection


