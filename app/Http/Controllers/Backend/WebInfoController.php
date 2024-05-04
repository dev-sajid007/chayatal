<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Traits\ImageSaver;
use App\Models\WebInfo;
use Illuminate\Http\Request;

class WebInfoController extends Controller
{
    use ImageSaver;

    public function index()
    {
        $webInfo = WebInfo::find(1);
        return view('admin.website.web-info.index',compact('webInfo'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);


        $webinfo = WebInfo::find(1);

        $webinfo->update([
            'title' => $request->title
        ]);

        //image upload
        if ($request->logo) {
            $this->uploadFileWithResize($request->logo, $webinfo, 'logo', 'web-info', 228, 78);
        }

        //image upload
        if ($request->favicon) {
            $this->uploadFileWithResize($request->favicon, $webinfo, 'favicon', 'web-info', 228, 78);
        }

        $notification = array(
            'message' => 'WebInfo Update Successfully ',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.website.web-info.index')->with($notification);

    }
}
