<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index()
    {
        $stories = Story::where('type','success')->get();
        return view('frontend.page.story.index',compact('stories'));
    }
    public function childStories()
    {
        $stories = Story::where('type','child')->get();
        return view('frontend.page.story.child',compact('stories'));
    }


    public function singleStory($id)
    {
        $story = Story::find($id);
        return view('frontend.page.story.view',compact('story'));
    }
}
