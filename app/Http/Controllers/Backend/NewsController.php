<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Traits\ImageSaver;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    use ImageSaver;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newses = News::orderByDesc('id')->get();
        return view('admin.website.news.index', compact('newses'));
    }


    public function status(Request $request)
    {
        if ($request->mode == 'true') {
            News::where('id', $request->id)->update(['status' => '1']);
        } else {
            News::where('id', $request->id)->update(['status' => '0']);
        }

        return response()->json(['msg' => 'Successfully Updated Status', 'status' => 'true']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.website.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:news',
            'description' => 'required',
            'photo' => 'required|mimes:jpg,jpeg,png|max:2048',
        ]);

        

        $news = new News();
        $news->title = $request->title;
        $news->description = $request->description;
        $news->save();
        
        if ($request->hasFile('photo')) {
            $this->uploadFileWithResize($request->file('photo'), $news, 'photo', 'news', 3701, 250);
        }

        $notification = array(
            'message' => 'News Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.website.news.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = News::find($id);
        return view('admin.website.news.create', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|unique:news,title,' . $id,
            'description' => 'required',
        ]);

        
        $news = News::find($id);
        $news->title = $request->title;
        $news->description = $request->description;
        $news->update();
        
        if ($request->hasFile('photo')) {
            $this->uploadFileWithResize($request->file('photo'), $news, 'photo', 'news', 3701, 250);
        }

        $notification = array(
            'message' => 'News Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.website.news.index')->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $news = News::find($id);

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

        return redirect()->route('admin.website.news.index')->with($notification);
    }
}
