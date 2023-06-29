@extends('layouts.app')
@section('content')

    <div class="my-5 d-flex justify-content-around">
        @foreach($genres as $genre)
            <a href="{{route('genres.show', ['genre'=>$genre])}}">
                <h3>{{$genre->name}}</h3>
            </a>
            <br>
        @endforeach
    </div>
    <div class="bg-dark col-12 pt-2 mt-4"></div>
    <div class="container">

        <div class="mt-5 pb-5 text-center">
            <h1>Топ 10 продаж:</h1>
            <div class="d-flex justify-content-start row mt-5">
                @foreach ($books as $book)
                    <div class="col-3 mb-5">
                        <div
                            class="d-flex justify-content-start align-content-stretch align-items-stretch w-75 h-75 mx-auto mb-3">
                            @if($book->picture)
                                <img
                                    src="{{asset('/storage/' . $book->picture)}}"
                                    alt="{{$book->picture}}" class="img-fluid rounded"
                                >
                            @else
                                <img
                                    src="
data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZAAAAJYCAYAAABM7LCIAAAAAXNSR0IArs4c6QAAIABJREFUeF7t3Xm87eW8wPGngUiJVy8plaGuyzUkIlwV0qBoNleiEom4yUF1S3VoUGie1GnQnMpQUZTSfRkukkw5pJQi3Gssuei+fpuznLWntfa3s/f3fM957/+cs579ffb7eTofe1h7LfHjq++9v3kjQIAAAQJTFFhCQKYo5uEECBAgMCIgIC4CAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAgQIBASEBAQmwWESBAgICAuAMECBAgEBIQkBCbRQQIECAgIO4AAQIECIQEBCTEZhEBAgQICIg7QIAAAQIhAQEJsVlEgAABAgLiDhAg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
"
                                    alt="" class="img-fluid rounded">
                            @endif
                        </div>
                        <div class="w-100 text-center">
                            <a href="{{route('books.show',['book'=>$book])}}">
                                <h4>{{$book->title}}</h4>
                            </a>
                            <a href="{{route('authors.show',['author'=>$book->author])}}">
                                <h5>{{$book->author->name}}</h5>
                            </a>
                            <p>Количество продаж: {{$book->sales}} штук</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
@endsection
