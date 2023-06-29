@extends('layouts.admin')

@section('content')
    <div class="card bg-secondary text-white">
        <div class="card-header">
            <h3 class="text-center"> {{$author->name}}</h3>
        </div>
        <img class="card-img-top" src="{{asset('/storage/' . $author->picture)}}" alt="{{$author->picture}}">
        <div class="card-body">
            <h5 class="card-title">{{$author->name}}</h5>
            <p class="card-text">
                {{$author->description}}
            </p>
            <a href="{{route('admin.authors.index')}}" class="btn btn-default btn-sm">Назад</a>
            <a href="{{route('admin.authors.edit', ['author' => $author])}}"
               class="btn btn-primary btn-sm">Править</a>
        </div>
    </div>
@endsection
