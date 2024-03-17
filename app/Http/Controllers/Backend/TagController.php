<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('admin.tag.index',compact('tags'));
    }

    public function create()
    {
        return view('admin.tag.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => "required|unique:tags",
        ]);


        Tag::create([
            'name' => $request->name,
        ]);

        $notification = array(
            'message' => 'Tag Create Successfully ',
            'alert-type' => 'success'
        );
        return redirect()->route('tag.index')->with($notification);
    }


    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('admin.tag.create',compact('tag'));
    }


    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => "required|unique:tags,name,".$id,
        ]);

        $tag = Tag::find($id);
        $tag->update([
            'name' => $request->name,
        ]);

        $notification = array(
            'message' => 'Tag Update Successfully ',
            'alert-type' => 'success'
        );
        return redirect()->route('tag.index')->with($notification);
    }


    public function delete($id)
    {
        $tag = Tag::find($id);
        $tag->delete();

        $notification = array(
            'message' => 'Tag Delete Successfully ',
            'alert-type' => 'success'
        );
        return redirect()->route('tag.index')->with($notification);
    }
}
