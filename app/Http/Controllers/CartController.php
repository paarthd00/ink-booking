<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\ArtItem;

class CartController extends Controller
{

    public function index()
    {
        $carts = Cart::all();
        foreach ($carts as $cart) {
            $art_item = ArtItem::find($cart->art_items_id);
            $cart->price = $art_item->price;
            $cart->image = \App\Models\Upload::find($art_item->image)->path;
        }

        return view('cart.all', ['items' => $carts]);
    }

    public function addToCart(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'art_items_id' => 'required',
            'quantity' => 'required',
        ]);

        $cart = new \App\Models\Cart();
        $cart->user_id = $request->user_id;
        $cart->art_items_id = $request->art_items_id;
        $cart->quantity = $request->quantity;
        $cart->save();

        return redirect()->route('cart');
    }

    public function deleteCart(Request $request)
    {
        $cart = \App\Models\Cart::find($request->id);
        $cart->delete();

        return redirect()->route('cart');
    }

    public function empty(Request $request)
    {
        $carts = \App\Models\Cart::all();
        foreach ($carts as $cart) {
            $cart->delete();
        }

        return redirect()->route('cart');
    }
}
