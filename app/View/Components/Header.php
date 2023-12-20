<?php

namespace App\View\Components;

use App\Models\Cart;
use App\Models\Categories;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $categories = Categories::where('status', 'active')->where('name', '<>', 'CUSTOM ITEMS')->get();
        $custom = Categories::where('name', 'CUSTOM ITEMS')->first();
        $cart = collect([]);
        $price = 0;
        $cnt = 0;
        if(auth()->user()) {
            $cart = Cart::with('product')->where('user_id', auth()->user()->id)->get();
            $cnt = $cart->count();
            // $price = 0;
        }

        return view('components.header', compact('categories', 'custom', 'cart', 'cnt', 'price'));
    }
}
