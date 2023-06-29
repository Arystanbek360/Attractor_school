@extends('layouts.front')

@section('content')
    <div style="padding-bottom: 30px;">
        <h1>All products</h1>
    </div>

    <table class="table" style="padding-top: 30px">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Photo</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>
                    <img width="200"
                         @if ($product->picture)
                         src="{{asset('/storage/' . $product->picture)}}" alt="{{$product->picture}}"
                         @else
                         src="" alt=""
                        @endif
                    >
                </td>
                <td>
                    <a href="{{route('products.show', ['product' => $product])}}">
                        {{$product->title}}
                    </a>
                </td>
                <td>{{is_null($product->description) ? "No description" : $product->description}}</td>
                <td>{{is_null($product->category) ? "No category" : $product->category->name}}</td>
                <td>{{number_format($product->price, 2)}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
