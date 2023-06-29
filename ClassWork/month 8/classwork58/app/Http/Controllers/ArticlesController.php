<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ArticlesController extends Controller
{
    /**
     *
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    /**
     * @return View
     * @throws AuthorizationException
     *
     */
    public function index(): View
    {
//        $this->authorize('viewAny', Article::class);

        $articles = Article::paginate(10);
//        dd(Article::paginate());
//        dd(Article::all());

        return view('articles.index', compact('articles'));
    }

    /**
     * @param Article $article
     *
     * @return View
     * @throws AuthorizationException
     *
     */
    public function show(Article $article): View
    {
        $this->authorize('view', $article);

        $article->setRelation('comments', $article->comments()->simplePaginate(5));

        return view('articles.show', compact('article'));
    }

    /**
     *
     * @return View
     * @throws AuthorizationException
     *
     */
    public function create(): View
    {
        $this->authorize('create', Article::class);

        return view('articles.create');
    }

    /**
     * @param ArticleRequest $request
     *
     * @return RedirectResponse
     * @throws AuthorizationException
     *
     */
    public function store(ArticleRequest $request): RedirectResponse
    {
        $this->authorize('create', Article::class);

        $article = new Article();
        $article->title = $request->input('title');
        $article->content = $request->input('content');

        $article->user()->associate($request->user());

        $article->save();

        return redirect(route('articles.index'));
    }

    /**
     * @param Article $article
     *
     * @return RedirectResponse
     * @throws AuthorizationException
     *
     */
    public function update(Article $article): RedirectResponse
    {
        $this->authorize('update', $article);

        return response()->redirectToRoute('articles.show', ['article' => $article]);
    }

    /**
     * @param Article $article
     *
     * @return RedirectResponse
     * @throws AuthorizationException
     *
     */
    public function destroy(Article $article): RedirectResponse
    {
        $this->authorize('delete', $article);

        return response()->redirectToRoute('articles.index');
    }
}
