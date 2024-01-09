<?php

namespace App\View\Components;

use App\Models\Cart;
use App\Models\Categories;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
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
        return view('components.layout', compact('categories', 'cnt', 'cart', 'price'));
    }
}
