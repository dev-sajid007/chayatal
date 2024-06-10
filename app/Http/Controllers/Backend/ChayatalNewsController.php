<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Traits\ImageSaver;
use App\Models\ChayatalNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ChayatalNewsController extends Controller
{
    use ImageSaver;
    public function index()
    {
        $newses = ChayatalNews::all();
        return view('admin.chayatal-news.index',compact('newses'));
    }

    public function create()
    {
        return view('admin.chayatal-news.create');

    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:news',
            'description' => 'required',
            'photo' => 'required|mimes:jpg,jpeg,png|max:2048',
        ]);

        $news = new ChayatalNews();
        $news->title = $request->title;
        $news->description = $request->description;
        $news->photo = 'default.png';
        $news->save();

        if ($request->hasFile('photo')) {
            $this->uploadFileWithResize($request->file('photo'), $news, 'photo', 'chayatal-news', 370, 250);
        }

        $notification = array(
            'message' => 'News Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.chayatal-news.index')->with($notification);
    }


    public function edit($id)
    {
        $news = ChayatalNews::find($id);
        return view('admin.chayatal-news.create', compact('news'));
    }


    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required|unique:news',
            'description' => 'required',
            'photo' => 'mimes:jpg,jpeg,png|max:2048',
        ]);

        $news = ChayatalNews::find($id);
        $news->title = $request->title;
        $news->description = $request->description;
        $news->photo = $news->photo;
        $news->save();

        if ($request->hasFile('photo')) {
            $this->uploadFileWithResize($request->file('photo'), $news, 'photo', 'chayatal-news', 370, 250);
        }

        $notification = array(
            'message' => 'News Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.chayatal-news.index')->with($notification);
    }

    public function delete(string $id)
    {
        $news = ChayatalNews::find($id);

        if($news->photo){
            if (File::exists($news->photo)) {
                File::delete($news->photo);
            }
        }

        $news->delete();
        $notification = array(
            'message' => 'News Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.chayatal-news.index')->with($notification);
    }
}
