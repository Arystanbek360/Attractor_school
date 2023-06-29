<div class="m-3 p-2 col-12 rounded-5 border border-white text-white" id="comment-{{$comment->id}}">
    <div class="media g-mb-30 media-comment rounded-4 bg-dark m-2">
        <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
            <div class="g-mb-15">
                <span>{{$comment->user->name}} написал {{$comment->created_at->diffForHumans()}}:</span>
            </div>
            <p class="m-0">
                {{$comment->body}}
            </p>
        </div>
    </div>
</div>
