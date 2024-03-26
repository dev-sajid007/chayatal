<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Traits\ImageSaver;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    use ImageSaver;
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.website.testimonial.index', compact('testimonials'));
    }


    public function create()
    {
        return view('admin.website.testimonial.create');
    }


    public function status(Request $request)
    {
        if ($request->mode == 'true') {
            Testimonial::where('id', $request->id)->update(['status' => '1']);
        } else {
            Testimonial::where('id', $request->id)->update(['status' => '0']);
        }

        return response()->json(['msg' => 'Successfully Updated Status', 'status' => 'true']);
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'name' => 'required',
            'content' => 'required',
            'photo' => 'required',
        ]);


        $testimonial = Testimonial::create([
            'name'    => $request->name,
            'content' => $request->content,
            'photo'   => 'default-banner.jpg',
            'status'  => $request->filled('status')
        ]);

        //image upload
        if ($request->photo) {
            $this->uploadFileWithResize($request->photo, $testimonial, 'photo', 'testimonial', 88, 88);
        }



        $notification = array(
            'message' => 'Testimonial Create Successfully ',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.website.testimonial.index')->with($notification);
    }


    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view('admin.website.testimonial.create',compact('testimonial'));
    }


    public function update(Request $request,$id)
    {
       
        $request->validate([
            'name' => 'required',
            'content' => 'required',
        ]);

        $testimonial = Testimonial::find($id);
        $testimonial->update([
            'name'    => $request->name,
            'content' => $request->content,
            'photo'   => $testimonial->photo,
            'status'  => $request->filled('status')
        ]);

        //image upload
        if ($request->photo) {
            $this->uploadFileWithResize($request->photo, $testimonial, 'photo', 'testimonial', 88, 88);
        }



        $notification = array(
            'message' => 'Testimonial Update Successfully ',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.website.testimonial.index')->with($notification);
    }



    public function delete($id){

        $testimonial = Testimonial::find($id);
        if (file_exists(@$testimonial->photo) and !empty($testimonial->photo)) {
            unlink($testimonial->photo);
        }
        $testimonial->delete();

        $notification = array(
            'message' => 'Testimonial Delete Successfully ',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.website.testimonial.index')->with($notification);
    }
}
