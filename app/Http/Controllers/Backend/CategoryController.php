<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index',compact('categories'));
    }


    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => "required|unique:categories",
        ]);


        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        $notification = array(
            'message' => 'Category Create Successfully ',
            'alert-type' => 'success'
        );
        return redirect()->route('category.index')->with($notification);
    }


    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.create',compact('category'));
    }


    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => "required|unique:categories,name,".$id,
        ]);

        $category = Category::find($id);
        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        $notification = array(
            'message' => 'Category Update Successfully ',
            'alert-type' => 'success'
        );
        return redirect()->route('category.index')->with($notification);
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();

        $notification = array(
            'message' => 'Category Delete Successfully ',
            'alert-type' => 'success'
        );
        return redirect()->route('category.index')->with($notification);
    }
}
