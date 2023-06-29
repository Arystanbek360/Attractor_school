<?php

namespace App\Orchid\Screens\Article;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class ArticleEditScreen extends Screen
{
    /** @var string $name */
    public string $name = 'Article Create';
    /** @var string $description */
    public string $description = 'Article form';
    /** @var bool $exists */
    protected bool $exists = false;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Article $article): iterable
    {
        $this->exists = $article->exists;

        if ($this->exists) {
            $this->name = 'Article Edit';
        }

        return compact('article');
    }

    /**
     * The screen's action buttons.
     *
     * @return Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create article')
                ->icon('pencil')
                ->method('save')
                ->canSee(!$this->exists),
            Button::make('Update article')
                ->icon('note')
                ->method('save')
                ->canSee($this->exists),
            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->exists)
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('article.title')
                    ->title('Title')
                    ->placeholder('Article title')
                    ->help('Short article title'),
                Relation::make('article.user_id')
                    ->title('Author')
                    ->fromModel(User::class, 'name', 'id'),
                Quill::make('article.content')
                    ->title('Article content'),
                Upload::make('image')
            ])
        ];
    }

    /**
     * @param Article $article
     * @param Request $request
     * @return RedirectResponse
     */
    public function save(Article $article, Request $request): RedirectResponse
    {
        $article->fill($request->get('article'))->save();

        Alert::info(sprintf(
            'You are successfully %s an article',
            $this->exists ? 'updated' : 'created'
        ));

        return redirect()->route('platform.articles.list');
    }

    /**
     * @param Article $article
     * @return RedirectResponse
     */
    public function remove(Article $article): RedirectResponse
    {
        if ($article->delete()) {
            Alert::info('You have successfully deleted');
            return redirect()->route('platform.articles.list');
        }

        Alert::warning('An error has occurred');

        return redirect()->route('platform.articles.edit', $article);
    }
}
