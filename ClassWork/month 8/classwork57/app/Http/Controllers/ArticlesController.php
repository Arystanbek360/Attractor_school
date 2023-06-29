<?php
namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
        $this->authorizeResource(Article::class, 'article');
    }

    /**
     * @return View
     */
    public function index(): View
    {
        $articles = Article::all();

        return view('articles.index', compact('articles'));
    }

    /**
     * @param Article $article
     *
     * @return View
     */
    public function show(Article $article): View
    {
        return view('articles.show', compact('article'));
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('articles.create');
    }

    /**
     * @param ArticleRequest $request
     *
     * @return RedirectResponse
     */
    public function store(ArticleRequest $request): RedirectResponse
    {
        $article = new Article();
        $article->title = $request->input('title');
        $article->content = $request->input('content');

        $article->user()->associate($request->user());

        $article->save();

        return redirect(route('articles.index'));
    }

    public function edit(Article $article)
    {
        dump("Access successful");
    }

    /**
     * @throws AuthorizationException
     */
    public function some(Article $article)
    {
        $this->authorize('view', $article);

        dump("Access successful");
    }
}
