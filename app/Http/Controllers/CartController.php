<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store($pid, Request $request)
    {
        $data = [
            'product_id' => $pid,
            'user_id' => auth()->user()->id,
            'length' => $request->length ?? null,
            'style' => $request->style ?? null,
            'plating_color' => $request->color ?? null,
            'custom_text' => $request->custom_text,
        ];
        if ($request->has('custom_image')) {
            $data['custom_image'] = $request->file('custom_image')->store('order/custom', ['disk' => 'public']);
        }

        Cart::updateOrCreate($data, $data);
        return redirect()->back();
    }

    public function remove($id, Request $request)
    {
        $cart = Cart::find($id);
        $cart->delete();

        if ($request->has('cart')) {
            return redirect()->route('cart.show');
        } else {
            return redirect()->back();
        }
    }


    public function cart()
    {
        $user = auth()->user();
        $cart = Cart::with('product')->where('user_id', $user->id)->get();
        return view('cart', compact('cart'));
    }

    public function updateCart(Request $request)
    {
        $reqData = $request->item ?? [];
        foreach ($reqData as $key => $value) {
            Cart::find($key)->update([
                'quantity' => $value['quantity'],
                'sub_amount' => $value['quantity'] * $value['price']
            ]);
        }
        return redirect()->route('cart.show');
    }


    public function buyCart($id, Request $request)
    {
        $user = auth()->user();
        $data = [
            'product_id' => $id,
            'user_id' => $user->id,
            'length' => $request->length ?? null,
            'style' => $request->style ?? null,
            'plating_color' => $request->color ?? null,
            'custom_text' => $request->custom_text,
        ];

        if ($request->has('custom_image')) {
            $data['custom_image'] = $request->file('custom_image')->store('order/custom', ['disk' => 'public']);
        }

        Cart::updateOrCreate($data, $data);
        return redirect()->route('cart.show');
    }
}
