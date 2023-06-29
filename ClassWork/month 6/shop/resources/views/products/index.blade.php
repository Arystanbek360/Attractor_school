@extends('base')


@section('content')

    <div style="padding-bottom: 30px;">
        <h1>All products</h1>
        <a href="{{route('products.create')}}" type="button" class="btn btn-outline-primary">
            Add product
        </a>
    </div>

    <table class="table" style="padding-top: 30px">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>
                    <a href="{{route('products.show', ['product' => $product])}}">
                        {{$product->title}}
                    </a>
                </td>
                <td>{{is_null($product->description) ? "No description" : $product->description}}</td>
                <td>{{is_null($product->category) ? "No category" : $product->category->name}}</td>
                <td>{{number_format($product->price, 2)}}</td>
                <td>
                    <a href="{{route('products.edit', ['product' => $product])}}">
                        Edit
                    </a>
                    <form method="post" , action="{{route('products.destroy', ['product' => $product])}}">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
