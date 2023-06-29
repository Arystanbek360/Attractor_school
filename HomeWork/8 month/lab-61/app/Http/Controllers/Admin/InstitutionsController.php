<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Form\InstitutionForm;
use App\Http\Requests\InstitutionRequest;
use App\Models\Cabinet;
use App\Models\Institution;
use App\Models\InstitutionCategory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class InstitutionsController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $institutions = Institution::paginate(5);
        return view('admin.institutions.index', compact('institutions'));
    }

    /**
     * @return View
     */
    public function create(): View
    {
        $categories = InstitutionCategory::all();
        return view('admin.institutions.create', compact('categories'));
    }

    /**
     * @param InstitutionRequest $request
     * @return RedirectResponse
     */
    public function store(InstitutionRequest $request): RedirectResponse
    {
        $institution = InstitutionForm::execute($request);

        return redirect()
            ->route('admin.institutions.index')
            ->with('status', "{$institution->name} успешно создан!");
    }

    /**
     * @param Institution $institution
     * @return View
     */
    public function show(Institution $institution): View
    {
        return view('admin.institutions.show', compact('institution'));
    }

    /**
     * @param Institution $institution
     * @return View
     */
    public function edit(Institution $institution): View
    {
        $categories = InstitutionCategory::all();
        return view('admin.institutions.edit', compact('institution', 'categories'));
    }

    /**
     * @param InstitutionRequest $request
     * @param Institution $institution
     * @return RedirectResponse
     */
    public function update(InstitutionRequest $request, Institution $institution): RedirectResponse
    {
        $data = $request->all();
        $file = $request->file('picture');


        if ($file) {
            $data['picture'] = $file->store('pictures', 'public');
        }
        $institution->update($data);

        return redirect()
            ->route('admin.institutions.show', ['institution' => $institution])
            ->with('status', "Заведение {$institution->name} успешно обновлен!");
    }

    /**
     * @param Institution $institution
     * @return RedirectResponse
     */
    public function destroy(Institution $institution): RedirectResponse
    {
        $institution->delete();
        return redirect()->route('admin.institutions.index')->with('status', $institution->name . ' успешно удален!');
    }
}
