<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return view('admin.categories', compact('categories'));
    }

    public function addCategory()
    {
        return view('admin.category-add');
    }

    public function edit($id)
    {
        $cat = Categories::find($id);
        return view('admin.category-edit', compact('cat'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name'
        ]);

        Categories::create($request->only(['name', 'description']));
        return redirect()->route('admin.category');
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,' . $id
        ]);
        $cat = Categories::find($id);
        $cat->update($request->only(['name', 'description']));

        return redirect()->route('admin.category');
    }

    public function delete($id)
    {
        $cat = Categories::find($id);
        $cat->delete();
        return redirect()->back();
    }
}
