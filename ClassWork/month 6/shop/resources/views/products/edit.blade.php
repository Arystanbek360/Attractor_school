@extends('base')
@section('content')
    <h1>Edit "{{$product->title}}" product</h1>
    @include('products.form',[
    'action' => route('products.update',['product'=>$product->id]),
    'method' => 'PUT',
    'model' => $product,
    'categories' => $categories
    ])
@endsection
