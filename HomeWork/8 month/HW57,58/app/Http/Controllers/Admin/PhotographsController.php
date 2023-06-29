<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Form\PhotographForm;
use App\Http\Requests\PhotographsRequest;
use App\Models\Photograph;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PhotographsController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $photographs = Photograph::all();
        return view('admin.photographs.index', compact('photographs'));
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('admin.photographs.create');
    }

    /**
     * @param PhotographsRequest $request
     * @return RedirectResponse
     */
    public function store(PhotographsRequest $request): RedirectResponse
    {
        $photograph = PhotographForm::execute($request);

        return redirect()
            ->route('admin.photographs.index')
            ->with('status', "{$photograph->name} successfully created!");
    }

    /**
     * @param Photograph $photograph
     * @return View
     */
    public function show(Photograph $photograph): View
    {
        return view('admin.photographs.show', compact('photograph'));
    }

    /**
     * @param Photograph $photograph
     * @return View
     */
    public function edit(Photograph $photograph): View
    {
        return view('admin.photographs.edit', compact(['photograph']));
    }

    /**
     * @param PhotographsRequest $request
     * @param Photograph $photograph
     * @return RedirectResponse
     */
    public function update(PhotographsRequest $request, Photograph $photograph): RedirectResponse
    {
        $data = $request->all();

        if ($request->hasFile('picture')) {
            $data['picture'] = $request->file('picture')->store('pictures', 'public');
        }

        $photograph->update($data);

        return redirect()
            ->route('admin.photographs.show', ['photograph' => $photograph])
            ->with('status', "Product {$photograph->name} successfully updated!");
    }

    /**
     * @param Photograph $photograph
     * @return RedirectResponse
     */
    public function destroy(Photograph $photograph): RedirectResponse
    {
        $photograph->delete();

        return redirect()->route('admin.photographs.index')
            ->with(
                'status',
                $photograph->name . ' successfully deleted!'
            );
    }
}
