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
            'name' => 'required|unique:categories,name',
            'image' => 'required|mimes:png,jpg,jpeg|file'
        ]);

        $reqData = $request->only(['name', 'description']);
        $reqData['image'] = $request->file('image')->store('category', ['disk' => 'public']);

        Categories::create($reqData);
        return redirect()->route('admin.category');
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,' . $id
        ]);
        $cat = Categories::find($id);
        $reqData = $request->only(['name', 'description']);
        if ($request->hasFile('image')) {
            $reqData['image'] = $request->file('image')->store('category', ['disk' => 'public']);
        }
        $cat->update($reqData);

        return redirect()->route('admin.category');
    }

    public function delete($id)
    {
        $cat = Categories::find($id);
        $cat->delete();
        return redirect()->back();
    }
}
