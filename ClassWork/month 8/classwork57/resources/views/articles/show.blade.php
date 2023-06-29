@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 style="padding-top: 50px">{{/* @var \App\Models\Article $article */ $article->title}}</h3>
                <blockquote class="blockquote">
                    <p class="mb-2" style="text-align: justify">
                        {{$article->content}}
                    </p>
                    <footer class="blockquote-footer">
                        Author: {{$article->user?->name ?: 'Some redactor'}}, | created in
                        <cite title="Created at article">
                            {{$article->created_at->diffForHumans()}}
                        </cite>
                    </footer>
                </blockquote>
            </div>
        </div>

        @can('update', $article)
            <div class="row">
                <a href="{{route('articles.edit', ['article' => $article])}}" class="card-link">Edit</a>
            </div>
        @endcan

        <div class="row">
            <div class="col-md-12">
                <h3>Comments</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-4 scrollit">
                @foreach($article->comments as $comment)
                    @include('comments/show')
                @endforeach
            </div>

            <div class="col-6 fixed">
                <div class="comment-form">
                    <form id="create-comment" method="POST" action="{{route('articles.comments.store', ['article' => $article])}}">
                        @csrf
                        <div class="form-group">
                            <label for="authorInput">Author</label>
                            <input name="author" type="text" class="form-control" id="authorInput" aria-describedby="authorHelpText"
                                   required>
                            <small id="authorHelpText" class="form-text text-muted">You need to enter your full name.</small>
                        </div>
                        <div class="form-group">
                            <label for="commentFormControl">Comment</label>
                            <textarea name="body" class="form-control" id="commentFormControl" rows="3" required></textarea>
                        </div>
                        <button id="create-comment-btn" type="submit" class="btn btn-outline-primary btn-sm btn-block">Add new
                            comment
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

