<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Dish;
use Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function indexCart($id)
    {
        $user = Auth::user();
        $cart = Cart::where('user_id', $user->id)->where('institution_id', $id)->first();
        if (!$cart) {
            $cart = new Cart();
            $cart->user_id = $user->id;
            $cart->institution_id = $id;
            $cart->save();
        }

        $cart->calculateTotal();

        return response()->json($cart);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function addDishToCart(Request $request)
    {
        $user = Auth::user();
        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $dishId = $request->input('dish_id');
        $dish = Dish::find($dishId);
        if (!$dish) {
            return response()->json(['error' => 'Dish not found'], 404);
        }

        $cart = Cart::where('user_id', $user->id)->first();
        if (!$cart) {
            $cart = new Cart();
            $cart->user_id = $user->id;
            $cart->save();
        }

        $cartItem = $cart->items()->where('dish_id', $dishId)->first();
        if (!$cartItem) {
            $cartItem = $cart->items()->create([
                'dish_id' => $dishId,
                'quantity' => 1,
                'price' => $dish->price,
            ]);
        } else {
            $cartItem->quantity++;
            $cartItem->save();
        }

        $cart->calculateTotal();

        return response()->json($cart);
    }

    /**
     * @param Dish $dish
     * @return string
     */
    public function getName(Dish $dish)
    {
        return $dish->name;
    }

    /**
     * @param $id
     * @return JsonResponse
     */
    public function removeItem($id)
    {
        $user = auth()->user();
        $cart = Cart::where('user_id', $user->id)->first();

        $cartItem = $cart->items()->where('dish_id', $id)->first();

        if ($cartItem) {
            $cartItem->delete();
        }

        $cart->calculateTotal();

        return response()->json($cart);
    }

    /**
     * @return JsonResponse
     */
    public function clearCart()
    {
        $user = auth()->user();
        $cart = Cart::where('user_id', $user->id)->first();
        $cartItem = $cart->items();

        if ($cartItem) {
            $cartItem->delete();
        }

        $cart->calculateTotal();

        return response()->json($cart);
    }


}
