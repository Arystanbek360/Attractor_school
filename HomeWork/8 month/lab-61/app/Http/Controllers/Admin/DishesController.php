<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Form\dishForm;
use App\Http\Requests\dishRequest;
use App\Models\Dish;
use App\Models\DishType;
use App\Models\Institution;
use App\Models\Kitchen;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class DishesController extends Controller
{

    public function create(Institution $institution): View
    {
        $kitchens = Kitchen::all();
        $types = DishType::all();
        return view('admin.dishes.create', compact('kitchens', 'types', 'institution'));
    }

    /**
     * @param DishRequest $request
     * @return RedirectResponse
     */
    public function store(DishRequest $request): RedirectResponse
    {
        $dish = DishForm::execute($request);
        $institution = $dish->institution;

        return redirect()
            ->route('admin.institutions.show', compact('institution'))
            ->with('status', "{$dish->name} successfully created!");
    }
    
    /**
     * @param Dish $dish
     * @return View
     */
    public function edit(Dish $dish): View
    {
        $kitchens = Kitchen::all();
        $types = DishType::all();
        return view('admin.dishes.edit', compact(['dish', 'types', 'kitchens']));
    }

    /**
     * @param DishRequest $request
     * @param Dish $dish
     * @return RedirectResponse
     */
    public function update(DishRequest $request, Dish $dish): RedirectResponse
    {
        $data = $request->all();
        $file = $request->file('picture');

        if ($file) {
            $data['picture'] = $file->store('pictures', 'public');
        }

        $dish->update($data);
        $institution = $dish->institution;

        return redirect()
            ->route('admin.institutions.show', ['institution' => $institution])
            ->with('status', "Product {$dish->name} successfully updated!");
    }

    /**
     * @param Dish $dish
     * @return RedirectResponse
     */
    public function destroy(Dish $dish): RedirectResponse
    {
        $institution = $dish->institution;
        $dish->delete();

        return redirect()->route('admin.institutions.show', compact('institution'))->with(
            'status',
            $dish->name . ' successfully deleted!'
        );
    }
}
