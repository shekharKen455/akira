<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return view('admin.home-image', compact('images'));
    }

    public function add()
    {
        return view('admin.image-add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name',
            'image' => 'required|mimes:png,jpg,jpeg|file'
        ]);

        $reqData = $request->only('name', 'link');
        $reqData['image'] = $request->file('image')->store('homepage', ['disk' => 'public']);

        Image::create($reqData);

        return redirect()->route('admin.image');
    }
    
    public function delete($id)
    {
        $image = Image::find($id);
        if($image) {
            $image->delete();
        }

        return redirect()->route('admin.image');
    }
}
