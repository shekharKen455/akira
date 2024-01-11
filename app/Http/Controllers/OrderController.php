<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

include(app_path() . '/Gateway/mpgClasses.php');

use App\Gateway\mpgTransaction;
use App\Gateway\CofInfo;
use App\Gateway\mpgRequest;
use App\Gateway\mpgHttpsPost;
use App\Models\User;

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
            'user_id' => $user->id,
            'payment_id' => $request->order_id,
            'notes' => $request->notes ?? null,
            'sub_amount' => $request->sub_amount,
            'total_amount' => $request->sub_amount,
            'address' => json_encode($reqData),
            'email' => $request->email,
            'phone' => $request->phone
        ];

        // $cart = Cart::where('user_id', $user->id)->get();

        $cart = session()->get('cart', []);
        if (!empty($cart)) {

            $order = Order::create($orderData);
            foreach ($cart as $key => $value) {
                OrderProduct::Create([
                    'user_id' => $user->id,
                    'order_id' => $order->id,
                    'product_id' => $value['product_id'],
                    'quantity' => $value['quantity'],
                    'length' => $value['length'] ?? null,
                    'style' => $value['style'] ?? null,
                    'plating_color' => $value['color'] ?? null,
                    'custom_text' => $value['custom_text'] ?? null,
                    'custom_image' => $value['custom_image'] ?? null,
                    'lang' => $value['lang'] ?? null,
                ]);
            }

            session()->forget('cart');
        }

        return redirect()->route('home')->with('orderSuccess', 'active');
    }
}
