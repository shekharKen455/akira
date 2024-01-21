<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CheckoutController extends Controller
{
    public function index()
    {
        // $user = auth()->user();
        // $cart = Cart::with('product')->where('user_id', $user->id)->get();

        $cart = [];
        $cartSess = session()->get('cart') ?? [];
        foreach ($cartSess as $key => $value) {
            $cart[$key] = is_array($value) ? collect($value) : $value;
        }

        return view('checkout', compact('cart'));
    }

    public function createMonerisTxn()
    {
        $url = env('MONERIS_CHECKOUT_URL');
        $data = [
            'store_id' => env('MONERIS_STORE_ID'),
            'api_token' => env('MONERIS_API_TOKEN'),
            'checkout_id' => env('MONERIS_CHECKOUT_ID'),
            'environment' => 'prod',
            'txn_total' => number_format(floatval(request()->input('totalAmount')), 2),
            'action' => 'preload',
        ];

        try {
            $response = Http::post($url, $data);
            $responseData = $response->json();

            return response()->json($responseData);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
