<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Cabinet;
use App\Models\Comment;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    /**
     * @param CommentRequest $request
     * @param Cabinet $cabinet
     * @return JsonResponse
     */
    public function store(CommentRequest $request, Cabinet $cabinet): JsonResponse
    {
        $comment = new Comment();
        $comment->user_id = Auth::user()->id;
        $comment->cabinet_id = $cabinet->id;
        $comment->body = $request->input('body');
        $comment->save();
        return response()->json([
            'comment' => view('admin.comments.show', compact('comment'))->render()
        ],
            201
        );
    }
}
