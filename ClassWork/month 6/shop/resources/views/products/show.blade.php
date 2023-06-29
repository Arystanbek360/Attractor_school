@extends('base')

@section('content')

    <div class="card">
        <div class="card-header">
            Product {{$product->title}} detail
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$product->title}}</h5>
            <p class="card-text">
                @if (!is_null($product->description))
                    {{$product->description}}
                @else
                    No description
                @endif
            </p>
            <footer class="blockquote-footer">
                Price: {{number_format($product->price, 2)}}
                @if (!is_null($product->category))
                    , Category: {{$product->category->name}}
                @endif
            </footer>
            <a href="{{route('home')}}" class="btn btn-default btn-sm">Back</a>|
            <a href="{{route('products.edit', ['product' => $product])}}" class="btn btn-primary btn-sm">Edit</a>
        </div>
    </div>

@endsection