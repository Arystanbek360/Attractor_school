<?php

namespace App\Http\Controllers;

use App\Models\tasks;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class PagesController extends Controller
{
    /**
     * @return View|Application
     */
    public function index(): View|Application
    {
        $tasks = tasks::all();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function create(Request $request): RedirectResponse
    {
        $task = new tasks($request->all());
        $task->state_id = '1';
        $task->save();
        return redirect(route('tasks.index'))->with('status', 'Новая задача была создана');
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function delete($id): RedirectResponse
    {
        $task = tasks::find($id);
        if ($task) {
            $task->delete();
            return redirect(route('tasks.index'))->with('status', 'Задача была удалена');
        }
        return redirect(route('tasks.index'))->with('error', 'Не получилось удалить задачу');
    }

    /**
     * @param $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function change($id, Request $request): RedirectResponse
    {
        $task = tasks::find($id);
        if ($task) {
            $task->state_id = $request->input('state_id');
            $task->save();
            return redirect(route('tasks.index'))->with('status', 'Статус готовности был заменен');
        }
        return redirect(route('tasks.index'))->with('error', 'Ошибка не получилось поменять статус');
    }

    /**
     * @return RedirectResponse
     */
    public function garbage(): RedirectResponse
    {
        $tasks = tasks::all();
        foreach ($tasks as $task) {
            if ($task->state_id == '3') {
                $task->delete();
            }
        }
        return redirect(route('tasks.index'))->with('status', 'Все задания со статусом "Выполнена" были удалены');
    }
}
