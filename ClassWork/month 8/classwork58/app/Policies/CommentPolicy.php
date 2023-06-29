<?php

namespace App\Policies;

use App\Models\Article;
use App\Models\Comment;
use App\Models\User;

class CommentPolicy
{
    /**
     * @param User $user
     * @param Article $article
     * @return bool
     */
    public function create(User $user, Article $article): bool
    {
        return !!$user->id;
    }

    /**
     * @param User $user
     * @param Comment $comment
     * @param Article $article
     *
     * @return bool
     */
    public function delete(User $user, Comment $comment, Article $article): bool
    {
        return (
                $user->name === $comment->author
                ||
                $article->user_id === $user->id
            )
            &&
            $comment->article_id === $article->id;
    }
}
