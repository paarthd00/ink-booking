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
        $total = 0;
        foreach ($carts as $cart) {
            $art_item = ArtItem::find($cart->art_items_id);
            $cart->price = $art_item->price;
            $cart->image = \App\Models\Upload::find($art_item->image)->path;
            $cart->name = $art_item->name;
            $cart->description = $art_item->description;
            $total += $cart->price * $cart->quantity;
        }

        return view('cart.all', ['items' => $carts, 'total' => $total]);
    }

    public function addToCart(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'art_items_id' => 'required',
            'quantity' => 'required',
        ]);

        $cart = new \App\Models\Cart();
        // if art item already in cart, update quantity
        $cart = Cart::where('art_items_id', $request->art_items_id)->first();
        if ($cart) {
            $cart->quantity += $request->quantity;
            $cart->save();
            return redirect()->route('cart');
        } else {
            $cart = new Cart();
            $cart->user_id = $request->user_id;
            $cart->art_items_id = $request->art_items_id;
            $cart->quantity = $request->quantity;
            $cart->save();
            return redirect()->route('cart');
        }
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
