<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Form\CabinetForm;
use App\Http\Requests\CabinetRequest;
use App\Models\Cabinet;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CabinetsController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $cabinets = Cabinet::all();
        return view('admin.cabinets.index', compact('cabinets'));
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('admin.cabinets.create');
    }

    /**
     * @param CabinetRequest $request
     * @return RedirectResponse
     */
    public function store(CabinetRequest $request): RedirectResponse
    {
        $cabinet = CabinetForm::execute($request);

        return redirect()
            ->route('admin.cabinets.index')
            ->with('status', "{$cabinet->name} успешно создан!");
    }

    /**
     * @param Cabinet $cabinet
     * @return View
     */
    public function show(Cabinet $cabinet): View
    {
        return view('admin.cabinets.show', compact('cabinet'));
    }

    /**
     * @param Cabinet $cabinet
     * @return View
     */
    public function edit(Cabinet $cabinet): View
    {
        return view('admin.cabinets.edit', compact('cabinet'));
    }

    /**
     * @param CabinetRequest $request
     * @param Cabinet $cabinet
     * @return RedirectResponse
     */
    public function update(CabinetRequest $request, Cabinet $cabinet): RedirectResponse
    {
        $cabinet->update($request->all());

        return redirect()
            ->route('admin.cabinets.show', ['cabinet' => $cabinet])
            ->with('status', "Жанр {$cabinet->name} успешно обновлен!");
    }

    /**
     * @param Cabinet $cabinet
     * @return RedirectResponse
     */
    public function destroy(Cabinet $cabinet): RedirectResponse
    {
        $cabinet->delete();
        return redirect()->route('admin.cabinets.index')->with('status', $cabinet->name . ' успешно удален!');
    }
}
