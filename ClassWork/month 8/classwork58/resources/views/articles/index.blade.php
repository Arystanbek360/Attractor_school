@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-2">
                        <h3>Articles</h3>
                    </div>
                    @auth
                        <div class="col-4">
                            <a href="{{route('articles.create')}}"
                               class="btn btn-primary btn-sm active" role="button"
                               aria-pressed="true"
                            >
                                Create new Article
                            </a>
                        </div>
                    @endauth
                </div>
            </div>
            <div class="row">
                @foreach($articles as /* @var \App\Models\Article $article */ $article)
                    <div class="col-md-3" style="padding: 35px 0 0 0;">
                        <div class="card" style="width: 18rem;">
                            <div class="card-header">
                                {{ $article->title }}
                                <span class="badge badge-info" style="cursor: pointer" title="Comments count">
                                    {{$article->comments->count()}}
                                </span>
                            </div>
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p class="text-truncate">
                                        {{ $article->content }}
                                    </p>
                                </blockquote>
                                <a href="{{route('articles.show', ['article' => $article])}}" class="card-link">Show
                                    more ...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="row justify-content-center p-5">
                    <div class="col-md-auto">
                        {{$articles->links('pagination::bootstrap-5')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
