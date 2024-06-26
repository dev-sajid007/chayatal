<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Traits\ImageSaver;
use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    use ImageSaver;
    public function index()
    {
        $stories = Story::all();
        return view('admin.story.index',compact('stories'));
    }


    public function create()
    {
        return view('admin.story.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:stories',
            'description' => 'required',
            'photo' => 'required|mimes:jpg,jpeg,png|max:2048',
        ]);

        $story = new Story();
        $story->title = $request->title;
        $story->description = $request->description;
        $story->type = $request->type;
        $story->photo = 'default.png';
        $story->save();

        if ($request->hasFile('photo')) {
            $this->uploadFileWithResize($request->file('photo'), $story, 'photo', 'story', 370, 250);
        }

        $notification = array(
            'message' => 'Story Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.story.index')->with($notification);
    }

    public function edit($id)
    {
        $story = Story::find($id);
        return view('admin.story.create',compact('story'));
    }


    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'photo' => 'mimes:jpg,jpeg,png|max:2048',
        ]);

        $story = Story::find($id);

        $story->title = $request->title;
        $story->description = $request->description;
        $story->type = $request->type;
        $story->photo = $story->photo;
        $story->save();

        if ($request->hasFile('photo')) {
            $this->uploadFileWithResize($request->file('photo'), $story, 'photo', 'story', 370, 250);
        }

        $notification = array(
            'message' => 'Story Update  Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.story.index')->with($notification);
    }

    public function delete($id)
    {
        $story = Story::find($id);
        $story->delete();
        
        $notification = array(
            'message' => 'Story Delete Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.story.index')->with($notification);
    }
}
