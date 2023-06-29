<?php

namespace App\Orchid\Layouts\Article;

use App\Models\Article;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ArticleListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'articles';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('title', 'Title')
                ->sort()
                ->filter()
                ->render(fn (Article $article) => Link::make($article->title)
                    ->route('platform.articles.edit', $article)),
            TD::make('created_at', 'Created')
                ->render(fn (Article $article) => $article->created_at->toDateTimeString())
                ->sort(),
            TD::make('updated_at', 'Last edit')
                ->render(fn (Article $article) => $article->updated_at->toDateTimeString())
                ->sort(),
        ];
    }
}
