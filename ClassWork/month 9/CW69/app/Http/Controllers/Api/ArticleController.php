<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ArticleRequest;
use App\Http\Resources\Api\ArticleResource;
use App\Http\Resources\Api\ArticleWithCommentsResource;
use App\Models\Article;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ArticleController extends Controller
{
    /**
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return ArticleResource::collection(Article::with('user')->paginate());
    }

    /**
     * @param ArticleRequest $request
     * @return ArticleResource
     */
    public function store(ArticleRequest $request): ArticleResource
    {
        $article = Article::create($request->all());
        return new ArticleResource($article);
    }

    /**
     * @param Article $article
     * @return ArticleWithCommentsResource
     */
    public function show(Article $article): ArticleWithCommentsResource
    {
        return new ArticleWithCommentsResource($article);
    }

    /**
     * @param ArticleRequest $request
     * @param Article $article
     * @return ArticleWithCommentsResource
     */
    public function update(ArticleRequest $request, Article $article): ArticleWithCommentsResource
    {
        $article->update($request->all());
        return new ArticleWithCommentsResource($article);
    }

    /**
     * @param Article $article
     * @return JsonResponse
     */
    public function destroy(Article $article): JsonResponse
    {
        $article->delete();

        return response()->json(['success' => true], 204);
    }
}
