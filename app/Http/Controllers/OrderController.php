<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $user = auth()->user();
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

        $orderData = [
            'user_id' => $user->id,
            'notes' => $request->notes ?? null,
            'sub_amount' => $request->sub_amount,
            'total_amount' => $request->sub_amount,
            'address' => json_encode($reqData)
        ];

        $cart = Cart::where('user_id', $user->id)->get();
        if ($cart->isNotEmpty()) {
            if ($request->has('custom_image')) {
                $orderData['custom_image'] = $request->file('custom_image')->store('order/custom', ['disk' => 'public']);
            }

            $order = Order::create($orderData);
            foreach ($cart as $key => $value) {
                OrderProduct::Create([
                    'user_id' => $user->id,
                    'order_id' => $order->id,
                    'product_id' => $value->product_id,
                    'quantity' => $value->quantity
                ]);

                $value->delete();
            }
        }

        return redirect()->route('account');
    }
}
