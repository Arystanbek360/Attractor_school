@extends('layouts.app')
@section('content')
    <form method="post" action="{{route('posts.store')}}" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <div class="form-group">
            <label for="title" class="text-dark">Название поста:</label>
            <input type="text" class="form-control text-dark bg-white" id="title" name="title">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="body" class="text-dark">Текст поста:</label>
            <textarea class="form-control text-dark bg-white" style="height: 200px" id="body"
                      name="body"></textarea>
            @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="options" class="text-dark">Параметры поста:</label>
            <textarea class="form-control text-dark bg-white" style="height: 200px" id="options"
                      name="options"></textarea>
            @error('options')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-1">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
