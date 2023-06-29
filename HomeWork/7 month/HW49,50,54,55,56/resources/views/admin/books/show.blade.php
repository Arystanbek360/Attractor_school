@extends('layouts.admin')

@section('content')
    <div class="card bg-secondary text-white">
        <div class="card-header text-white">
            Книга - {{$book->title}}
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h5 class="card-title">{{$book->title}}</h5>
                <div class="row col-3">
                    <a href="{{route('admin.books.edit', ['book' => $book])}}"
                       class="btn btn-primary btn-sm">Изменить</a>
                    <a href="{{route('admin.books.index')}}" class="btn btn-secondary btn-sm">Назад</a>
                </div>
            </div>
            <p class="card-text">
                <strong>Цена:</strong> {{$book->price}} <br>
                <strong>Жанр:</strong>
                {{$book->genres[0]->name}}
                @for($i=1;$i<count($book->genres);$i++)
                    ,{{$book->genres[$i]->name}}
                @endfor
                <br>
                <strong>Автор:</strong> {{$book->author->name}} <br>
                <strong>Описание книги:</strong> {{$book->description}}<br>
            </p>
            <img class="card-img-top" src="{{asset('/storage/' . $book->picture)}}" alt="{{$book->picture}}">
        </div>
    </div>
@endsection
