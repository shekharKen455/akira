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
        $cart = [];
        $price = 0;
        $cnt = 0;
        $cartSess = session()->get('cart', []);
        if (!empty($cartSess)) {
            foreach ($cartSess as $key => $value) {
                $cart[$key] = is_array($value) ? collect($value) : $value;
                $cnt++;
            }
        }

        return view('components.header', compact('categories', 'custom', 'cart', 'cnt', 'price'));
    }
}
