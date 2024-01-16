<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user')->withCount('orderProduct')->get();
        return view('admin.order', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::with('user', 'orderProduct.product')->find($id);
        return view('admin.order-edit', compact('order'));
    }

    public function update($id, Request $request)
    {
        $order = Order::find($id);
        $order->order_status = $request->order_status;
        $order->save();

        return redirect()->route('admin.order');
    }

    public function productInfo($id)
    {
        $order = OrderProduct::with('order', 'product')
            ->find($id);

        return view('admin.order-detail', compact('order'));
    }
}
