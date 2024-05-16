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
        return view('frontend.page.index',compact('page'));
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



    public function edit($id)
    {
        $page = Page::find($id);
        return view('admin.website.page.create',compact('page'));
    }



    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required'
        ]);

        $page = Page::find($id);

        $page->update([
            'title'   =>  $request->title,
            'slug'    =>  Str::slug($request->title),
            'content' => $request->content,
            'image'   => $page->image
        ]);

        //image upload
        if ($request->image) {
            $this->uploadFileWithResize($request->image, $page, 'image', 'page', 1200, 720);
        }



        $notification = array(
            'message' => 'Page Update Successfully ',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.website.page.index')->with($notification);
    }


    public function delete($id)
    {
        $page = Page::find($id);
       
        if (file_exists($page->image) and !empty($page->image)) {
            unlink($page->image);
        }
        $page->delete();

        $notification = array(
            'message' => 'Page Delete Successfully ',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.website.page.index')->with($notification);
    }
}
