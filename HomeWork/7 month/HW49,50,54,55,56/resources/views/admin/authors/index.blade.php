@extends('layouts.admin')

@section('content')
    <div style="padding-bottom: 30px;">
        <div class="d-flex">
            <h1 class="col-1 me-4 text-white">Поэты</h1>
            <a href="{{route('admin.authors.create')}}" type="button" class="btn btn-outline-light btn-lg">
                Добавить нового автора
            </a>
        </div>
    </div>

    <div class="row">
        @foreach($authors as $author)
            <div class="col-sm-3" style="padding-bottom: 25px">
                <div class="card bg-secondary text-white align-items-center text-center">
                    <img width="200"
                         @if ($author->picture)
                         src="{{asset('/storage/' . $author->picture)}}" alt="{{$author->picture}}"
                         @else
                         src="data:image/png;base64,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"
                         alt="нету фото"
                        @endif
                    >
                    <div class="card-body">
                        <h5 class="card-title"><a
                                href="{{route('admin.authors.show',['author' => $author])}}"
                                class="text-white">{{$author->name}}</a></h5>
                        <div class="d-flex justify-content-center ">
                            <a
                                href="{{route('admin.authors.edit', ['author' => $author])}}"
                                class="btn btn-primary"
                            >Править</a>
                            <form style="float: left; margin-right: 12px;" class="text-center"
                                  action="{{route('admin.authors.destroy', ['author' => $author])}}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger">Удалить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
