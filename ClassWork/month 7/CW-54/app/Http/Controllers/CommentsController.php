<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * @param Request $request
     * @param Article $article
     * @return JsonResponse
     */
    public function store(Request $request,Article $article):JsonResponse
    {
        $request->validate(['author'=>'required',
            'body'=>'required']);
        $comment=new Comment();
        $comment->author=$request->input('author');
        $comment->body=$request->input('body');
        $comment->article_id=$article->id;
        $comment->save();
        return response()->json([
            'comment'=> view('comments.show', compact('comment'))->render()
        ],
            201
        );
    }
}
