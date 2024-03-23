<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Traits\FileSaver;
use App\Http\Traits\ImageSaver;
use App\Models\Banner;

use Illuminate\Http\Request;

class BannerController extends Controller
{
    use ImageSaver;

    public function index()
    {
        $banners = Banner::all();
        return view('admin.website.banner.index', compact('banners'));
    }


    public function create()
    {
        return view('admin.website.banner.create');
    }

    public function status(Request $request)
    {
        if ($request->mode == 'true') {
            Banner::where('id', $request->id)->update(['status' => '1']);
        } else {
            Banner::where('id', $request->id)->update(['status' => '0']);
        }

        return response()->json(['msg' => 'Successfully Updated Status', 'status' => 'true']);
    }

    public function store(Request $request)
    {
        //return $request->all();

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'photo' => 'required',
            'button_text' => 'required',
        ]);


        $banner = Banner::create([
            'title'       => $request->title,
            'description' => $request->description,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'photo'       => 'default-banner.jpg',
            'status'       => $request->filled('status')
        ]);

        //image upload
        if ($request->photo) {
            $this->uploadFileWithResize($request->photo, $banner, 'photo', 'banner', 1200, 700);
        }



        $notification = array(
            'message' => 'Banner Create Successfully ',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.website.banner.index')->with($notification);
    }


    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('admin.website.banner.create', compact('banner'));
    }


    public function update(Request $request, $id)
    {
        $banner = Banner::find($id);

        $banner->update([
            'title'       => $request->title,
            'description' => $request->description,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'photo'       => $banner->photo,
            'status'      => $request->filled('status')
        ]);

        //image upload
        if ($request->photo) {

            if (file_exists($banner->photo) and !empty($banner->photo)) {
                unlink($banner->photo);
            }
            $this->uploadFileWithResize($request->photo, $banner, 'photo', 'banner', 1200, 700);
        }

        $notification = array(
            'message' => 'Banner Create Successfully ',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.website.banner.index')->with($notification);
    }


    public function delete($id){

        $banner = Banner::find($id);
        if (file_exists($banner->photo) and !empty($banner->photo)) {
            unlink($banner->photo);
        }
        $banner->delete();

        $notification = array(
            'message' => 'Banner Delete Successfully ',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.website.banner.index')->with($notification);
    }
}
