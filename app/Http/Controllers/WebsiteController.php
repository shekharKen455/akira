<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $cats = Categories::where('status', 'active')->get();
        return view('index', compact('cats'));
    }

    public function catelog()
    {
        $cats = Categories::where('status', 'active')->get();
        return view('catelog', compact('cats'));
    }

    public function category($id)
    {
        $cat = Categories::find($id);
        $products = Product::where('category_id', $id)->paginate(24);

        return view('category', compact('cat', 'products'));
    }

    public function product($slug)
    {
        $product = Product::with('category')->where('slug', $slug)->first();
        $product->others = explode(',', $product->other_images);
        
        return view('product', compact('product'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
