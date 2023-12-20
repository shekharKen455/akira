<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        return view('admin.product', compact('products'));
    }

    public function add()
    {
        $cats = Categories::all();
        return view('admin.product-add', compact('cats'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $cats = Categories::all();
        return view('admin.product-edit', compact('product', 'cats'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:products,name'
        ]);

        $data = $request->only([
            'name',
            'price',
            'sale_price',
            'quantity',
            'discount',
            'rating',
            'description',
            'category_id'
        ]);

        $data['slug'] = Str::slug($data['name']);
        $data['image'] = $request->file('main_image')->store('product', ['disk' => 'public']);

        $other = [];
        foreach ($request->other_images as $value) {
            $other[] = $value->store('product', ['disk' => 'public']);
        }

        $data['other_images'] = implode(',', $other);
        Product::create($data);
        return redirect()->route('admin.product');
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required|unique:products,name,' . $id
        ]);

        $product = Product::find($id);
        $data = $request->only([
            'name',
            'price',
            'sale_price',
            'quantity',
            'discount',
            'rating',
            'description',
            'category_id'
        ]);

        $data['slug'] = Str::slug($data['name']);
        if ($request->has('main_image')) {
            $data['image'] = $request->file('main_image')->store('product', ['disk' => 'public']);
        }

        if ($request->has('other_images')) {
            $other = [];
            foreach ($request->other_images as $value) {
                $other[] = $value->store('product', ['disk' => 'public']);
            }
            $data['other_images'] = implode(',', $other);
        }

        $product->update($data);
        return redirect()->route('admin.product');
    }

    public function delete($id)
    {
        $cat = Product::find($id);
        $cat->delete();
        return redirect()->back();
    }
}
