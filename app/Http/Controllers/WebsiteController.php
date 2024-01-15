<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class WebsiteController extends Controller
{
    public function index()
    {
        $cats = Categories::where('status', 'active')->where('name', '<>', 'CUSTOM ITEMS')->get();
        $trending = Product::orderBy('created_at', 'desc')->limit(8)->get();
        return view('index', compact('cats', 'trending'));
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

    public function customeItems()
    {
        $cats = Categories::where('description', 'like', '%CUSTOM%')->get(['id']);
        $products = Product::whereIn('category_id', $cats->toArray())->paginate(24);

        $cat = (object)[
            'name' => 'Custom Items'
        ];

        return view('category', compact('cat', 'products'));
    }

    public function product($slug)
    {
        $product = Product::with('category')->where('slug', $slug)->first();
        $fonts = [];
        if (str_contains(strtolower($product->category->name), strtolower('NAME PENDANTS'))) {
            $files = File::allFiles(public_path('fonts'));
            foreach ($files as $file) {
                $pathinfo = pathinfo($file);
                $filename = $pathinfo['filename'];
                $extension = $pathinfo['extension'];
                if (str_contains($filename, 'english')) {
                    $fonts['english'][] = asset('fonts/' . $filename . '.' . $extension);
                }
                if (str_contains($filename, 'punjabi')) {
                    $fonts['punjabi'][] = asset('fonts/' . $filename . '.' . $extension);
                }
                if (str_contains($filename, 'hindi')) {
                    $fonts['hindi'][] = asset('fonts/' . $filename . '.' . $extension);
                }
            }
        }

        $product->others = explode(',', $product->other_images);

        return view('product', compact('product', 'fonts'));
    }

    public function about()
    {
        return view('about');
    }

    public function privacy()
    {
        return view('pp');
    }

    public function tnc()
    {
        return view('tnc');
    }

    public function pcare()
    {
        return view('care');
    }

    public function shipping()
    {
        return view('shipping');
    }

    public function faq()
    {
        return view('faq');
    }

    public function contact()
    {
        return view('contact');
    }
}
