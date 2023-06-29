<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
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
        $user = Auth::user();
        if ($user->cannot('create', Article::class)) {
            abort(403);
        }
        dump('Access successful', $user->name);

        return view('articles.create');
    }

    /**
     * @param ArticleRequest $request
     * @return RedirectResponse
     */
    public function store(ArticleRequest $request): RedirectResponse
    {
        $article = new Article();
        $article->title = $request->input('title');
        $article->content = $request->input('content');

//       Есть 3 способа получить id у пользователя они приведены ниже
//        $article->user_id = Auth::user()?->id;
//        $article->user_id = $request->user()?->id;
        $article->user()->associate($request->user());

        $article->save();

        return redirect(route('articles.index'));
    }

    public function edit(Article $article)
    {
//       2 метода для закрытия доступа Одно и то же закрывает доступ allows и denies
//        if (!Gate::allows('update-article', $article)) {
//            abort(403);
//        }
//        if (Gate::denies('update-article', $article)) {
//            abort(403);
//        }

//        /** @var User|null $user */
//        $user = User::find(1);
//        if (Gate::forUser($user)->denies('update-article', $article)) {
//            abort(403);
//        }

        $user = Auth::user();
        if ($user->cannot('update-article', $article)) {
            abort(403);
        }
        dump('Access successful', $user->name);
    }

    public function some(Article $article)
    {
        $this->authorize('update', $article);
        dump('Access successful');
    }
}
