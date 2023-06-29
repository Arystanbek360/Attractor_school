<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductsController extends Controller
{
    /**
     * @param Request $request
     * @return View|RedirectResponse
     */
    public function index(Request $request): view|RedirectResponse
    {
        if ($request['name'] !== null) {
            $product = new Product($request->all());
            $product->save();
            return redirect(route('index'))->with('status', 'Product success creat');
        }
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * @return View
     */
    public function newProduct(): view
    {
        return view('products.new');
    }

    /**
     * @param $id
     * @return View|RedirectResponse
     */
    public function show($id): view|RedirectResponse
    {
        $product = Product::find($id);
        if ($product) {
            return view('products.show', compact('product'));
        }
        return redirect()->route('index')->with('error', 'Ups!!! Product not found');
    }

}
