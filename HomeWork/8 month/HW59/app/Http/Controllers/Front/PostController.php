<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Form\PostForm;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $posts = Post::paginate(5);
        return view('front.posts.index', ['posts' => $posts]);
    }

    /**
     * @param Post $post
     * @return View
     */
    public function show(Post $post): View
    {
        $comments = $post->comments()->paginate(6);
        return view('front.posts.show', ['post' => $post, 'comments' => $comments]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('front.posts.create');
    }

    /**
     * @param PostRequest $request
     * @return RedirectResponse
     */
    public function store(PostRequest $request): RedirectResponse
    {
        $post = PostForm::execute($request);

        return redirect()
            ->route('posts.show', compact('post'))
            ->with('status', "Пост: {$post->title} успешно создан!");
    }
}
