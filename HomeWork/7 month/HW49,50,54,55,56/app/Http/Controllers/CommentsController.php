<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Book;
use App\Models\Comment;
use Auth;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

class CommentsController extends Controller
{
    /**
     * @param CommentRequest $request
     * @param Book $book
     * @return JsonResponse
     */
    public function store(CommentRequest $request, Book $book): JsonResponse
    {
        $comment = new Comment();
        $user = Auth::user();
        $comment->user_id = $user->id;
        $comment->body = $request->input('body');
        $comment->rating = $request->input('rating');
        $comment->book_id = $book->id;
        $comment->save();
        return response()->json([
            'comment' => view('front.comments.show', compact('comment', 'user'))->render()
        ],
            201
        );
    }

    /**
     * @param Comment $comment
     * @return RedirectResponse
     */
    public function delete(Comment $comment)
    {
        $book = $comment->book;
        $comment->delete();

        return redirect()->route('books.show', ['book' => $book])->with(
            'status',
            'Комментарий №' . $comment->id . ' удачно удален!'
        );
    }

    /**
     * @param Comment $comment
     * @return View
     */
    public function edit(Comment $comment): view
    {
        $this->authorize('update', $comment);
        return view('front.comments.form', compact('comment'));
    }

    /**
     * @param CommentRequest $request
     * @param Comment $comment
     * @return RedirectResponse
     */
    public function update(CommentRequest $request, Comment $comment): RedirectResponse
    {
        $this->authorize('update', $comment);

        $comment->body = $request->input('body');
        $comment->user_id = Auth::user()->id;
        $comment->rating = $request->input('rating');
        $comment->save();

        return redirect()->route('books.show', $comment->book_id)->with('success', 'Comment updated successfully.');
    }
}
