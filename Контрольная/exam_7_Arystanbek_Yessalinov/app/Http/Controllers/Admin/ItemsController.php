<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Form\ItemForm;
use App\Http\Requests\ItemRequest;
use App\Models\Type;
use App\Models\Item;
use App\Models\Cabinet;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ItemsController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $items = Item::all();
        return view('admin.items.index', compact('items'));
    }

    /**
     * @return View
     */
    public function create(): View
    {
        $types = Type::all();
        $cabinets = Cabinet::all();
        return view('admin.items.create', compact('types', 'cabinets'));
    }

    /**
     * @param ItemRequest $request
     * @return RedirectResponse
     */
    public function store(ItemRequest $request): RedirectResponse
    {
        $item = ItemForm::execute($request);

        return redirect()
            ->route('admin.items.index')
            ->with('status', "{$item->name} successfully created!");
    }

    /**
     * @param Item $item
     * @return View
     */
    public function show(Item $item): View
    {
        return view('admin.items.show', compact('item'));
    }

    /**
     * @param Item $item
     * @return View
     */
    public function edit(Item $item): View
    {
        $types = Type::all();
        $cabinets = Cabinet::all();
        return view('admin.items.edit', compact(['item', 'types', 'cabinets']));
    }

    /**
     * @param ItemRequest $request
     * @param Item $item
     * @return RedirectResponse
     */
    public function update(ItemRequest $request, Item $item): RedirectResponse
    {
        $data = $request->all();

        if ($request->hasFile('picture')) {
            $data['picture'] = $request->file('picture')->store('pictures', 'public');
        }

        $item->update($data);

        return redirect()
            ->route('admin.items.show', ['item' => $item])
            ->with('status', "Product {$item->name} successfully updated!");
    }

    /**
     * @param Item $item
     * @return RedirectResponse
     */
    public function destroy(Item $item): RedirectResponse
    {
        $item->delete();

        return redirect()->route('admin.items.index')->with('status', $item->name . ' successfully deleted!');
    }
}
