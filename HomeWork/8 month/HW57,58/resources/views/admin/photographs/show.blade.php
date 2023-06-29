@extends('layouts.admin')

@section('content')
    <div style="padding-bottom: 30px;">
        <div class="d-flex">
            <h1 class="me-4 text-white">Все работы фотографа {{$photograph->name}}</h1>
            <a href="{{route('admin.work.create',['photograph'=>$photograph])}}"
               type="button"
               class="btn btn-outline-light btn-lg">
                Добавить новую работу
            </a>
        </div>
    </div>


    <table class="table table-dark table-striped table-bordered border-white" style="padding-top: 30px">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Изображение</th>
            <th scope="col">Рейтинг</th>
            <th scope="col">Описание</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($photograph->works as $work)
            <tr>
                <td>
                    {{$work->id}}
                </td>
                <td>
                    <img width="200"
                         @if ($work->picture)
                             src="{{asset('/storage/' . $work->picture)}}" alt="{{$work->picture}}"
                         @else
                             src="data:image/png;base64,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"
                         alt="Нету картинки"
                        @endif
                    >
                </td>
                <td>
                    {{$work->rating}}
                </td>
                <td>
                    {{$work->description}}
                </td>
                <td>
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="{{route('admin.works.edit', ['work' => $work])}}" class="text-white">
                            Редактировать
                        </a>
                        <form method="post" action="{{route('admin.works.destroy', ['work' => $work])}}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-link text-white">Удалить</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


    {{--    <p>--}}
    {{--        <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button"--}}
    {{--           aria-expanded="false" aria-controls="multiCollapseExample1">Все коментарий</a>--}}
    {{--        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2"--}}
    {{--                aria-expanded="false" aria-controls="multiCollapseExample2">Добавить коментарий--}}
    {{--        </button>--}}
    {{--        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse"--}}
    {{--                aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Переключить оба--}}
    {{--            элемента--}}
    {{--        </button>--}}
    {{--    </p>--}}
    {{--    <div class="row text-dark">--}}
    {{--        <div class="col-8">--}}
    {{--            <div class="collapse multi-collapse" id="multiCollapseExample1">--}}
    {{--                <div class="card card-body bg-dark">--}}
    {{--                    <div class="text-center scrollit d-flex flex-wrap">--}}
    {{--                        @foreach($photograph->comments as $comment)--}}
    {{--                        --}}{{--                            @include('admin.comments.show')--}}
    {{--                        --}}{{--                        @endforeach--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="col-4">--}}
    {{--            <div class="collapse multi-collapse" id="multiCollapseExample2">--}}
    {{--                <div class="card card-body">--}}
    {{--                    <div class="text-center">--}}
    {{--                        <div class="comment-form">--}}
    {{--                            <form id="create-comment" method="Post"--}}
    {{--                                  action="{{route('admin.photographs.comment.add',['photograph'=>$photograph])}}">--}}
    {{--                                @csrf--}}
    {{--                                <input type="hidden" id="photograph_id" value="{{$photograph->id}}">--}}
    {{--                                <div class="form-group">--}}
    {{--                                    <label for="commentFormControl">Коментарий</label>--}}
    {{--                                    <textarea name="body" class="form-control" id="commentFormControl" rows="3"--}}
    {{--                                              required></textarea>--}}
    {{--                                </div>--}}
    {{--                                <button id="create-new-comment-btn" type="submit"--}}
    {{--                                        class="btn btn-outline-primary btn-sm btn-block">--}}
    {{--                                    Добавить коментарий--}}
    {{--                                </button>--}}
    {{--                            </form>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
@endsection
