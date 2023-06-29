<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param Article $article
     * @return JsonResponse
     */
    public function index(Article $article): JsonResponse
    {
        return response()->json($article->comments()->paginate());
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @param Article $article
     * @return JsonResponse
     */
    public function store(Request $request, Article $article): JsonResponse
    {
        return response()->json(['success' => true]);
    }

    /**
     * Display the specified resource.
     * @param Article $article
     * @param Comment $comment
     * @return JsonResponse
     */
    public function show(Article $article, Comment $comment): JsonResponse
    {
        return response()->json($comment);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param Article $article
     * @param Comment $comment
     * @return JsonResponse
     */
    public function update(Request $request, Article $article, Comment $comment): JsonResponse
    {
        $comment->update($request->all());
        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     * @param Article $article
     * @param Comment $comment
     * @return JsonResponse
     */
    public function destroy(Article $article, Comment $comment): JsonResponse
    {
        $comment->delete();
        return response()->json(['status' => 'success']);
    }
}
