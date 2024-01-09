<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store($pid, Request $request)
    {
        $data = collect([
            'id' => rand(10000, 99999),
            'quantity' => 1,
            'product_id' => $pid,
            'length' => $request->length ?? null,
            'style' => $request->style ?? null,
            'plating_color' => $request->color ?? null,
            'custom_text' => $request->custom_text,
            'lang' => $request->lang,
            'product' => Product::find($pid)
        ]);
        if ($request->has('custom_image')) {
            $data['custom_image'] = $request->file('custom_image')->store('order/custom', ['disk' => 'public']);
        }

        $cart = session()->get('cart', []);
        $cart[$data['id']] = $data;
        session(['cart' => $cart]);

        // Cart::updateOrCreate($data, $data);
        return redirect()->back();
    }

    public function remove($id, Request $request)
    {
        // dd($request->all());
        // $cart = Cart::find($id);
        // $cart->delete();

        $cart = session('cart', []);

        // Check if the product is in the cart
        if (isset($cart[$id])) {
            // Remove the product from the cart
            unset($cart[$id]);
            // Update the cart session
            session(['cart' => $cart]);
        }

        if ($request->has('cart')) {
            return redirect()->route('cart.show');
        } else {
            return redirect()->back();
        }
    }


    public function cart()
    {
        // $user = auth()->user();
        // $cart = Cart::with('product')->where('user_id', $user->id)->get();
        // session()->forget('cart');

        $cart = [];
        $cartSess = session()->get('cart') ?? [];
        foreach ($cartSess as $key => $value) {
            $cart[$key] = is_array($value) ? collect($value) : $value;
        }

        return view('cart', compact('cart'));
    }

    public function updateCart(Request $request)
    {
        $reqData = $request->item ?? [];

        $cart = session()->get('cart', []);
        foreach ($reqData as $key => $value) {

            // Cart::find($key)->update([
            //     'quantity' => $value['quantity'],
            //     'sub_amount' => $value['quantity'] * $value['price']
            // ]);

            $cart[$key]['quantity'] = $value['quantity'];
        }
        session(['cart' => $cart]);
        return redirect()->route('cart.show');
    }


    public function buyCart($id, Request $request)
    {
        $data = collect([
            'id' => rand(10000, 99999),
            'quantity' => 1,
            'product_id' => $id,
            'length' => $request->length ?? null,
            'style' => $request->style ?? null,
            'plating_color' => $request->color ?? null,
            'custom_text' => $request->custom_text,
            'lang' => $request->lang,
            'product' => Product::find($id)
        ]);
        if ($request->has('custom_image')) {
            $data['custom_image'] = $request->file('custom_image')->store('order/custom', ['disk' => 'public']);
        }

        $cart = session()->get('cart', []);
        $cart[$data['id']] = $data;
        session(['cart' => $cart]);

        // Cart::updateOrCreate($data, $data);
        return redirect()->route('cart.show');
    }
}
