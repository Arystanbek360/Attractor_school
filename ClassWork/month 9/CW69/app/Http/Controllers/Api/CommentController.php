<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\CommentResource;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CommentController extends Controller
{
    /**
     * @param Article $article
     * @return AnonymousResourceCollection
     */
    public function index(Article $article): AnonymousResourceCollection
    {
        return CommentResource::collection($article->comments()->paginate());
    }

    /**
     * @param Request $request
     * @param Article $article
     * @return JsonResponse
     */
    public function store(Request $request, Article $article): JsonResponse
    {
        return response()->json(['success' => true]);
    }

    /**
     * @param Article $article
     * @param Comment $comment
     * @return JsonResponse
     */
    public function show(Article $article, Comment $comment): JsonResponse
    {
        return response()->json($comment);
    }

    /**
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
     * @param Article $article
     * @param Comment $comment
     * @return JsonResponse
     */
    public function destroy(Article $article, Comment $comment): JsonResponse
    {
        $comment->delete();

        return response()->json(['success' => true]);
    }
}
