<form method="post" action="{{ $action }}" enctype="multipart/form-data">
    @method($method ?? 'POST')
    @csrf
    <div class="form-group">
        <label for="commentFormControl2">Коментарий</label>
        <textarea name="body" class="form-control" id="commentFormControl2" rows="3"
                  required>{{$comment->body}}</textarea>
    </div>
    <input type="hidden" id="book_id" value="{{$comment->book->id}}">
    <div class="form-group">
        <label for="rating">Оценка</label>
        <select class="form-control" id="rating" name="rating" required>
            @for($i=1;$i<6;$i++)
                <option value="{{$i}}"
                        @if($comment->rating==$i)
                            selected
                    @endif
                >{{$i}}
                </option>
            @endfor
        </select>
    </div>
    <button id="create-comment-btn2" type="submit"
            class="btn btn-outline-primary btn-sm btn-block">
        Изменить коментарий
    </button>
</form>
