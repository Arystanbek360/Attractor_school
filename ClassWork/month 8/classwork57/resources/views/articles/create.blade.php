@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Create new Article</h1>
            </div>

            <div class="col-12">
                <form method="post" action="{{route('articles.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="article-title">Title</label>
                        <input name="title" type="text" class="form-control" id="article-title">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" class="form-control" id="content"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Create article</button>
                </form>
            </div>

            <div style="padding-top: 25px" class="col-2">
                <a href="{{route('articles.index')}}" class="btn btn-primary btn-sm active" role="button"
                   aria-pressed="true">Back</a>
            </div>
        </div>
    </div>
@endsection
