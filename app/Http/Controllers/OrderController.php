<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // $user = auth()->user();
        $reqData = $request->only([
            "first_name",
            "last_name",
            "email",
            "phone",
            "address_1",
            "address_2",
            "city",
            "state",
            "country",
            "postcode"
        ]);

        $user = User::first();

        $orderData = [
            'user_id' => auth()->user()->id ?? $user->id,
            'payment_id' => $request->order_id,
            'notes' => $request->notes ?? null,
            'sub_amount' => $request->sub_amount,
            'total_amount' => $request->sub_amount,
            'address' => json_encode($reqData),
            'email' => auth()->user()->email ?? $request->email,
            'phone' => $request->phone
        ];

        // $cart = Cart::where('user_id', $user->id)->get();

        $cart = session()->get('cart', []);
        if (!empty($cart)) {

            $order = Order::create($orderData);
            foreach ($cart as $key => $value) {
                OrderProduct::Create([
                    'user_id' => auth()->user()->id ?? $user->id,
                    'order_id' => $order->id,
                    'product_id' => $value['product_id'],
                    'quantity' => $value['quantity'],
                    'length' => $value['length'] ?? null,
                    'style' => $value['style'] ?? null,
                    'plating_color' => $value['color'] ?? null,
                    'custom_text' => $value['custom_text'] ?? null,
                    'custom_image' => $value['custom_image'] ?? null,
                    'lang' => $value['lang'] ?? null,
                    'font' => $value['font'] ?? null,
                ]);
            }

            Mail::to(env('ADMIN_EMAIL'))->send(new \App\Mail\OrderMail($reqData, $cart));
            session()->forget('cart');
        }

        if (auth()) {
            return redirect()->route('account');
        }

        return redirect()->route('home')->with('orderSuccess', 'active');
    }
}
