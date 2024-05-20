<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HumanResource;
use Illuminate\Http\Request;
use App\Http\Traits\ImageSaver;
use Illuminate\Support\Facades\File;

class AdviserControler extends Controller
{
    use ImageSaver;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advisers = HumanResource::where('type', 'adviser')->get();
        return view('admin.adviser.index', compact('advisers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.adviser.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'photo'  => 'required'
        ]);


       $adviser = HUmanResource::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'type' => 'adviser'
        ]);


        if ($request->hasFile('photo')) {
            $this->upload_file($request->file('photo'), $adviser, 'photo', 'adviser');
        }

        $notification = array(
            'message' => 'Adviser Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.adviser.index')->with($notification);

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
        $adviser = HumanResource::where('type', 'adviser')->where('id', $id)->first();
        return view('admin.adviser.create', compact('adviser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'  => 'required',
            'designation'  => 'required',
        ]);

        $adviser = HUmanResource::where('type', 'adviser')->where('id', $id)->first();
        $adviser->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'type' => 'adviser'
        ]);


        if ($request->hasFile('photo')) {
            $this->upload_file($request->file('photo'), $adviser, 'photo', 'adviser');
        }

        $notification = array(
            'message' => 'Adviser Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.adviser.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $adviser = HUmanResource::where('type', 'adviser')->where('id', $id)->first();

        if($adviser->photo){
            if (File::exists($adviser->photo)) {
                File::delete($adviser->photo);
            }
        }
        
        $adviser->delete();

        $notification = array(
            'message' => 'Adviser Delete Successfully ',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.adviser.index')->with($notification);
    }
}
