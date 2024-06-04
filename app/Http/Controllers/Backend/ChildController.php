<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Traits\ImageSaver;
use App\Models\Child;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    use ImageSaver;
    public function index()
    {
        $childs = Child::all();
        return view('admin.child.index',compact('childs'));
    }


    public function create()
    {
        return view('admin.child.create');
    }

    public function store(Request $request)
    {
        $child = Child::create([
            'name'       => $request->name,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'dream' => $request->dream,
            'country' => $request->country,
            'amount' => $request->amount,
            'description' => $request->description,
            'image'       => 'default-banner.jpg',
        ]);

        //image upload
        if ($request->image) {
            $this->uploadFileWithResize($request->image, $child, 'image', 'child', 268, 251);
        }


        $notification = array(
            'message' => 'Child Profile Create Successfully ',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.child.index')->with($notification);
    }


    public function delete($id)
    {
        $child = Child::find($id);
        $child->delete();

        $notification = array(
            'message' => 'Child Profile Delete Successfully ',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.child.index')->with($notification);
    }
}
