@extends('layouts.app')

@section('content')
    <div class="w-100">
        <div class="row m-2">
            <div class="col-8">
                <div class="bg-primary">
                    {{$post->title}}
                </div>
                <div class="bg-info">
                    <p>{{$post->body}}</p>
                    @foreach(json_decode($post->options) as $value)
                        <p>{{$value}}</p>
                    @endforeach
                </div>
            </div>

            {{--    Form    --}}
            @cannot('view', $post)
                <div class="card card-body">
                    <div class="text-center">
                        <div class="comment-form">
                            <form method="Post"
                                  action="{{route('comments.store')}}">
                                @csrf
                                <input type="hidden" name="post_id" value="{{$post->id}}">
                                <div class="form-group">
                                    <label for="commentFormControl">Коментарий</label>
                                    <textarea name="body" class="form-control" id="commentFormControl" rows="3"
                                              required></textarea>
                                </div>
                                <button id="create-comment-btn" type="submit"
                                        class="btn btn-outline-primary btn-sm btn-block">
                                    Добавить коментарий
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endcannot
            {{--        --}}
        </div>

        <div class="d-flex justify-content-center">
            {{ $comments->links('pagination::bootstrap-4') }}
        </div>
        <div class="row">
            @foreach($comments as $comment)
                <div class="card w-50">
                    <div class="card-body">
                        <h5 class="card-title">{{$comment->user->name}} прокоментировал:</h5>
                        <p>{{$comment->created_at->diffForHumans()}}</p>
                        <p class="card-text">{{$comment->body}} </p>
                        @can('delete', $comment)
                            <form method="post" action="{{ route('comments.destroy', ['comment' => $comment->id]) }}">
                                @method('delete')
                                @csrf
                                <button class="btn btn-outline-primary btn-sm btn-block" type="submit">
                                    Удалить комментарий
                                </button>
                            </form>
                        @endcan
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-2">
            {{ $comments->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
