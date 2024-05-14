<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Traits\ImageSaver;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    use ImageSaver; 
    public function index()
    {
        $pages = Page::all();
        return view('admin.website.page.index', compact('pages'));
    }


    public function create()
    {
        return view('admin.website.page.create');
    }


    public function page($slug){
        $page = Page::where('slug',$slug)->first();
        return $page;
    }



    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required'
        ]);


        $page = Page::create([
            'title'   =>  $request->title,
            'slug'    =>  Str::slug($request->title),
            'content' => $request->content
        ]);

        //image upload
        if ($request->image) {
            $this->uploadFileWithResize($request->image, $page, 'image', 'page', 1200, 720);
        }



        $notification = array(
            'message' => 'Page Create Successfully ',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.website.page.index')->with($notification);
    }
}
