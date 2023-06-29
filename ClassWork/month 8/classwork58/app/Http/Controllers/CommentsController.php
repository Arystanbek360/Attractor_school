<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    /**
     * @param Request $request
     * @param Article $article
     *
     * @throws \Throwable
     *
     * @return JsonResponse
     */
    public function store(Request $request, Article $article): JsonResponse
    {
        $this->authorize('create', [Comment::class, $article]);

        $request->validate([
            'author' => 'required',
            'body'   => 'required'
        ]);

        $comment             = new Comment();
        $comment->author     = $request->input('author');
        $comment->body       = $request->input('body');
        $comment->article_id = $article->id;

        $comment->save();

        return response()->json(
            [
                'comment' => view('comments.show', compact('comment'))->render()
            ],
            201
        );
    }

    /**
     * @param Article $article
     * @param Comment $comment
     *
     * @throws \Throwable
     *
     * @return JsonResponse
     */
    public function destroy(Article $article, Comment $comment): JsonResponse
    {
        $this->authorize('delete', [$comment, $article]);

        $comment->delete();

        return response()->json();
    }
}
