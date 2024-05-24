<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FooterContent;
use Illuminate\Http\Request;
use App\Http\Traits\ImageSaver;
use Illuminate\Support\Facades\File;

class FooterContentController extends Controller
{
    use ImageSaver;
    public function index()
    {
        $footer = FooterContent::first();
        return view('admin.website.footer.update', compact('footer'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'about' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);


        $footer = FooterContent::first();
        if($footer){
            $footer->update([
                'about' => $request->about,
                'address' => $request->address,
                'phone' => $request->phone,
                'email' => $request->email
            ]);
        }
        else{
            FooterContent::create([
                'about' => $request->about,
                'address' => $request->address,
                'phone' => $request->phone,
                'email' => $request->email
            ]);
        }
        

        if ($request->hasFile('logo')) {
            $this->upload_file($request->file('logo'), $footer, 'logo', 'footer');
        }

        $notification = array(
            'message' => 'Footer Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
