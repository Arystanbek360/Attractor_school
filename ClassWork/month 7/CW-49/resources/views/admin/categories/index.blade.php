@extends('layouts.admin')

@section('content')
    <div style="padding-bottom: 30px;">
        <h1>All categories</h1>
        <a href="{{route('admin.categories.create')}}" type="button" class="btn btn-outline-primary">
            Add category
        </a>
    </div>

    <div class="row">
        @foreach($categories as $category)
            <div class="col-sm-3" style="padding-bottom: 25px">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$category->name}}</h5>
                        <a
                            href="{{route('admin.categories.edit', ['category' => $category])}}"
                            class="btn btn-primary"
                        >Edit</a>
                        <form style="float: left; margin-right: 12px;" action="{{route('admin.categories.destroy', ['category' => $category])}}" method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
