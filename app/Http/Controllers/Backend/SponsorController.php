<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Traits\ImageSaver;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    use ImageSaver;
    public function index()
    {
        $sponsors = Sponsor::all();
        return view('admin.website.sponsor.index',compact('sponsors'));
    }


    public function create()
    {
        return view('admin.website.sponsor.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required',
        ]);


        $sponsor = Sponsor::create([
            'photo'   => 'default-banner.jpg',
            'status'  => $request->filled('status')
        ]);

        //image upload
        if ($request->photo) {
            $this->uploadFileWithResize($request->photo, $sponsor, 'photo', 'sponsor', 170, 110);
        }



        $notification = array(
            'message' => 'Sponsor Create Successfully ',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.website.sponsor.index')->with($notification);
    }


    public function edit($id)
    {
        $sponsor = Sponsor::find($id);
        return view('admin.website.sponsor.create',compact('sponsor'));
    }


    public function update(Request $request,$id)
    {
        $sponsor = Sponsor::find($id);

        $sponsor->update([
            'photo'   => $sponsor->photo,
            'status'  => $request->filled('status')
        ]);

        //image upload
        if ($request->photo) {
            $this->uploadFileWithResize($request->photo, $sponsor, 'photo', 'sponsor', 170, 110);
        }

        $notification = array(
            'message' => 'Sponsor Update Successfully ',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.website.sponsor.index')->with($notification);
    }


    public function delete($id){

        $sponsor = Sponsor::find($id);
        if (file_exists(@$sponsor->photo) and !empty($sponsor->photo)) {
            unlink($sponsor->photo);
        }
        $sponsor->delete();

        $notification = array(
            'message' => 'Photo Delete Successfully ',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.website.sponsor.index')->with($notification);
    }
}
