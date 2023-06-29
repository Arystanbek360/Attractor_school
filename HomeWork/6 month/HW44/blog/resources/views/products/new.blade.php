@extends('layouts.app')

@section('content')
    <div class="container mt-5 text-center">
        <h1>New Product</h1>
        <div class="row">
            <form class="mx-auto d-flex flex-column align-items-center" action="{{action([\App\Http\Controllers\ProductsController::class, 'index'])}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group col-4">
                    <label for="name">Product name:</label><br/>
                    <input class="form-control" type="text" id="name" name="name"/>
                </div>
                <div class="form-group col-4">
                    <label for="description">Product description:</label><br/>
                    <textarea class="form-control" name="description" id="description"></textarea>
                </div>
                <div class="form-group col-4">
                    <label for="price">Product price:</label><br/>
                    <input class="form-control" type="text" name="price" id="price"/>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
