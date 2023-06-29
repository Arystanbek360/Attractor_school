@extends('layouts.front')

@section('content')
    <div style="padding-bottom: 30px;">
        <h1>All categories</h1>
    </div>

    <div class="row">
        @foreach($categories as $category)
            <div class="col-sm-3" style="padding-bottom: 25px">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$category->name}}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
