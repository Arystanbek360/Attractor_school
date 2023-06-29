@extends('layouts.app')

@section('content')
    <h1>Список постов</h1>
    <h2><a href="{{route('posts.create')}}">Написать пост</a></h2>
    <div class="row">
        @foreach ($posts as $post)
            <div class="card my-2 w-100">
                <div class="card-header bg-primary">
                    Пост
                </div>
                <div class="card-body bg-info">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <h6 class="card-subtitle">Пост создан: {{$post->created_at->diffForHumans()}}</h6>
                    <p class="card-text">{{ $post->body }}</p>
                    <a href="{{route('posts.show',$post)}}" class="btn btn-primary">Смотреть пост</a>
                </div>
            </div>
        @endforeach
        <div class="col-md-auto">
            {{ $posts->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
