<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Traits\ImageSaver;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    use ImageSaver;

    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.website.gallery.index',compact('galleries'));
    }

    public function create()
    {
        return view('admin.website.gallery.create');
    }


    public function status(Request $request)
    {
        if ($request->mode == 'true') {
            Gallery::where('id', $request->id)->update(['status' => '1']);
        } else {
            Gallery::where('id', $request->id)->update(['status' => '0']);
        }

        return response()->json(['msg' => 'Successfully Updated Status', 'status' => 'true']);
    }


    public function store(Request $request)
    {
       
        $request->validate([
            'photo' => 'required',
        ]);


        $gallery = Gallery::create([
            'photo'   => 'default-banner.jpg',
            'status'  => $request->filled('status')
        ]);

        //image upload
        if ($request->photo) {
            $this->uploadFileWithResize($request->photo, $gallery, 'photo', 'gallery', 370, 250);
        }



        $notification = array(
            'message' => 'Gallery Create Successfully ',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.website.gallery.index')->with($notification);
    }


    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('admin.website.gallery.create',compact('gallery'));
    }



    public function update(Request $request,$id)
    {
        $gallery = Gallery::find($id);

        $gallery->update([
            'photo'   => $gallery->photo,
            'status'  => $request->filled('status')
        ]);

        //image upload
        if ($request->photo) {
            $this->uploadFileWithResize($request->photo, $gallery, 'photo', 'gallery', 370, 250);
        }

        $notification = array(
            'message' => 'Gallery Update Successfully ',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.website.gallery.index')->with($notification);
    }


    public function delete($id){

        $gallery = Gallery::find($id);
        if (file_exists(@$gallery->photo) and !empty($gallery->photo)) {
            unlink($gallery->photo);
        }
        $gallery->delete();

        $notification = array(
            'message' => 'Photo Delete Successfully ',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.website.gallery.index')->with($notification);
    }
}
