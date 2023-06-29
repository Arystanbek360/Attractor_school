<div class="col-6 p-2" id="comment-{{$comment->id}}">
    <div class="media g-mb-30 media-comment">
        <img class="d-flex mx-auto g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15"
             src="{{asset('images/default_avatar.png')}}" alt="Image Description">
        <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
            <div class="g-mb-15">
                <h5 class="h5 g-color-gray-dark-v1 mb-0"><strong class="fs-4">Автор:</strong>{{$comment->user->name}}
                </h5>
                <span class="g-color-gray-dark-v4 g-font-size-12">{{$comment->created_at->diffForHumans()}}</span>
            </div>
            <p>
                <strong class="fs-5">Прокоментировал:</strong> {{$comment->body}}
                <br>
                <strong class="fs-5">Оценка:</strong>{{$comment->rating}}
            </p>
        </div>

        @can('delete', $comment)
            <form method="post" action="{{route('comments.delete', ['comment' => $comment])}}"
                  id="delete-comment">
                @method('delete')
                @csrf
                <input type="hidden" id="Comment_id" value="{{$comment->id}}">
                <button class="btn btn-outline-primary btn-sm btn-block" type="submit"
                        data-comment-id="{{$comment->id}}">
                    Удалить комментарий
                </button>
            </form>
        @endcan

        @can('update', $comment)

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#modal{{$comment->id}}">
                Измененить комментарии
            </button>

            <!-- Modal -->
            <div class="modal fade" id="modal{{$comment->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Изменение коментария
                                #{{$comment->id}}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal{{$comment->id}}"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @include('front.comments.edit',['comment'=>$comment])
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal{{$comment->id}}">
                                Закрыть
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endcan

    </div>
</div>
