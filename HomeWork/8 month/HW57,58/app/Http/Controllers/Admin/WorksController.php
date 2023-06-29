<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Form\WorkForm;
use App\Http\Requests\WorkRequest;
use App\Models\Photograph;
use App\Models\Work;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class WorksController extends Controller
{
    /**
     * @param Photograph $photograph
     * @return View
     */
    public function create(Photograph $photograph): View
    {
        return view('admin.works.create', compact('photograph'));
    }

    /**
     * @param WorkRequest $request
     * @return RedirectResponse
     */
    public function store(WorkRequest $request): RedirectResponse
    {
        $work = WorkForm::execute($request);

        return redirect()
            ->route('admin.works.show', compact('work'))
            ->with('status', "{$work->id} successfully created!");
    }

    /**
     * @param Work $work
     * @return View
     */
    public function show(Work $work): View
    {
        return view('admin.works.show', compact('work'));
    }

    /**
     * @param Work $work
     * @return View
     */
    public function edit(Work $work): View
    {
        return view('admin.works.edit', compact(['work']));
    }

    /**
     * @param WorkRequest $request
     * @param Work $work
     * @return RedirectResponse
     */
    public function update(WorkRequest $request, Work $work): RedirectResponse
    {
        $data = $request->all();

        if ($request->hasFile('picture')) {
            $data['picture'] = $request->file('picture')->store('pictures', 'public');
        }

        $work->update($data);

        return redirect()
            ->route('admin.works.show', ['work' => $work])
            ->with('status', "Product {$work->id} successfully updated!");
    }

    /**
     * @param Work $work
     * @return RedirectResponse
     */
    public function destroy(Work $work): RedirectResponse
    {
        $photograph = $work->photograph;
        $work->delete();

        return redirect()->route('admin.photographs.show', compact('photograph'))
            ->with(
                'status',
                $work->id . ' successfully deleted!'
            );
    }
}
