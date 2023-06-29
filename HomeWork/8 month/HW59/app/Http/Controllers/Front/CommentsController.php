<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    /**
     * @param CommentRequest $request
     * @return RedirectResponse
     */
    public function store(CommentRequest $request): RedirectResponse
    {
        $comment = new Comment();
        $user = Auth::user();
        $comment->user_id = $user->id;
        $comment->post_id = $request->input('post_id');
        $comment->body = $request->input('body');
        $comment->save();
        return redirect()->route('posts.show', ['post' => $comment->post_id])->with(
            'status',
            'Комментарий №' . $comment->id . ' удачно создан!'
        );
    }

    /**
     * @param Comment $comment
     * @return RedirectResponse
     */
    public function destroy(Comment $comment)
    {
        $post = $comment->post;
        $comment->delete();

        return redirect()->route('posts.show', ['post' => $post->id])->with(
            'status',
            'Комментарий №' . $comment->id . ' удачно удален!'
        );
    }

}
